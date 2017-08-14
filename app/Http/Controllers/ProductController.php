<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tovar_category;
use App\Tovar_podcategory;
use App\Tovar;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\ImageManagerStatic as Image;

class ProductController extends Controller
{
    public function index()
    {
        return view('podpages.products_categories');
    }

    public function index_category(Tovar_category $tovar_category)
    {
        return view('podpages.products_podcategories', [
            'tovar_category' => $tovar_category->load('tovar_podcategories')

        ]);
    }

    public function index_podcategory(Tovar_category $tovar_category, Tovar_podcategory $tovar_podcategory)
    {
        return view('podpages.tovars', [
            'tovar_category' => $tovar_category,
            'tovar_podcategory' => $tovar_podcategory->load('tovars')
        ]);
    }

    public function index_tovar(Tovar_category $tovar_category, Tovar_podcategory $tovar_podcategory, Tovar $tovar)
    {
        return view('podpages.tovar', [
            'tovar_category' => $tovar_category,
            'tovar_podcategory' => $tovar_podcategory,
            'tovar' => $tovar
        ]);
    }

    public function show()
    {
        return view('admin.product.show', ['products' => Tovar::with('tovar_podcategory.tovar_category')->get()]);
    }

    public function create()
    {
        return view('admin.product.create');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'tovar_name' => 'required|min:3|max:255|unique:tovars,name',
            'description' => 'max:3000',
            'image' => 'mimes:jpg,jpeg,png|dimensions:max_width=4000,max_height=4000',
            'tovar_podcategory' => 'required|exists:tovar_podcategories,id'
        ]);


        $tovar = new Tovar();
        $tovar->name = $request->tovar_name;
        $tovar->name_eng = str_slug($request->tovar_name);
        $tovar->description = $request->description;
        $tovar->path = '';
        $tovar->tovar_podcategory_id = $request->tovar_podcategory;
        $tovar->save();

        IF ($request->hasFile('image')) {
            $photo = $request->file('image');
            $directory = 'storage/app/public/products/photos/';
            $directory_thumb = 'storage/app/public/products/thumbs/';
            $extension = $photo->guessExtension();
            IF ($photo->isValid()) {
                IF ($photo->getClientSize() <= 20 * 1024 * 1024) {
                    $name = str_random(10) . $tovar->id . '.' . $extension;
                    $photo->move(public_path().'/'.$directory, $name);

                    $image = Image::make(public_path().'/'.$directory.$name);
                    $image->fit(200)->save(public_path().'/'.$directory_thumb.$name);
                    $tovar->path = $name;
                    $tovar->save();
                }
            }
        }
        $request->session()->flash('status', 'Товар успешно добавлен');
        return redirect()->back();

    }

    public function edit(Tovar $tovar)
    {

        return view('admin.product.edit', ['tovar' => $tovar->load('tovar_podcategory.tovar_category')]);
    }

    public function update(Request $request, Tovar $tovar)
    {


        $validator = Validator::make($request->all(), [
            'name' => [
                'required',
                'min:3',
                'max:255',
                Rule::unique('tovars')->ignore($tovar->id, 'id'),
            ],
            'description' => 'max:3000',
            'image' => [
                'mimes:jpg,jpeg,png',
                'dimensions:max_width=2000,max_height=2000'
            ],
            'tovar_podcategory' => 'required|exists:tovar_podcategories,id'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $tovar->name = $request->name;
        $tovar->name_eng = str_slug($request->name);
        $tovar->description = $request->description;
        $tovar->tovar_podcategory_id = $request->tovar_podcategory;
        $tovar->save();

        IF ($request->hasFile('image')) {
            $photo = $request->file('image');
            $directory_main = 'storage/app/public/products/photos/';
            $directory_thumb = 'storage/app/public/products/thumbs/';
            $extension = $photo->guessExtension();
            IF ($photo->isValid()) {
                IF ($photo->getClientSize() <= 20 * 1024 * 1024) {
                    IF($tovar->path)
                    {
                        Storage::delete('products/photos/'.$tovar->path);
                        Storage::delete('products/thumbs/'.$tovar->path);
                    }
                    $name = str_random(10) . $tovar->id . '.' . $extension;
                    $photo->move(public_path().'/'.$directory_main, $name);

                    $image = Image::make(public_path().'/'.$directory_main. $name);
                    $image->fit(200)->save(public_path().'/'.$directory_thumb.$name);
                    $tovar->path = $name;
                    $tovar->save();
                }
            }
        }

        return redirect()->back();

    }

    public function destroy(Request $request, Tovar $tovar)
    {
        $tovar->delete();
        $request->session()->flash('status', 'Товар успешно удален');
        return redirect()->back();
    }

}
