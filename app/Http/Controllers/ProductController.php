<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tovar_category;
use App\Tovar_podcategory;
use App\Tovar;
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
            $directory = '/storage/app/public/products/' . $tovar->id;
            $extension = $photo->guessExtension();
            IF ($photo->isValid()) {
                IF ($photo->getClientSize() <= 20 * 1024 * 1024) {
                    $name = str_random(10) . $tovar->id . '.' . $extension;
                    $photo->move($directory . '/', $name);

                    $image = Image::make($directory . '/thumb/', $name);
                    $image->fit(450)->save(public_path() . '/upload/begests/thumbs/' . $name . '.' . $extension);
                    $tovar->path = $directory . '/thumb/'. $name;
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

        $this->validate($request, [
            'name' => 'required|min:3|max:255|unique:tovars,name,' . $tovar->id,
            'description' => 'max:3000',
            'image' => 'mimes:jpg,jpeg,png|dimensions:max_width=2000,max_height=2000',
            'tovar_podcategory' => 'required|exists:tovar_categories,id'
        ]);

        $tovar = new Tovar();
        $tovar->name = $request->name;
        $tovar->name_eng = str_slug($request->name);
        $tovar->description = $request->description;
        $tovar->tovar_podcategory_id = $request->tovar_podcategory;
        $tovar->save();

        IF ($request->hasFile('image')) {
            $photo = $request->file('image');
            $directory = '/storage/app/public/products/' . $tovar->id;
            $extension = $photo->guessExtension();
            IF ($photo->isValid()) {
                IF ($photo->getClientSize() <= 20 * 1024 * 1024) {
                    IF($tovar->path)
                    {
                        Storage::disk('public_my')->delete($tovar->path);
                    }
                    $name = str_random(10) . $tovar->id . '.' . $extension;
                    $photo->move($directory . '/', $name);

                    $image = Image::make($directory . '/thumb/', $name);
                    $image->fit(450)->save(public_path() . '/upload/begests/thumbs/' . $name . '.' . $extension);
                    $tovar->path = $directory . '/thumb/'. $name;
                    $tovar->save();
                }
            }
        }

        return redirect()->back();

    }

    public function destroy(Tovar $tovar)
    {
        $tovar->delete();
        return redirect()->back();
    }

}
