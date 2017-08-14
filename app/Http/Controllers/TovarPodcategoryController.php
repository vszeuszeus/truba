<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tovar_podcategory;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class TovarPodcategoryController extends Controller
{

    public function show()
    {
        return view('admin.tovar_podcategory.show', ['tovar_podcategories' => Tovar_podcategory::with('tovar_category')->get()]);
    }

    public function create()
    {
        return view('admin.tovar_podcategory.create');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'tovar_name' => 'required|min:3|max:255|unique:tovar_categories,name',
            'description' => 'max:3000',
            'tovar_category' => 'required|exists:tovar_categories,id'
        ]);


        $tovar = new Tovar();
        $tovar->name = $request->tovar_name;
        $tovar->name_eng = str_slug($request->tovar_name);
        $tovar->description = $request->description;
        $tovar->tovar_category_id = $request->tovar_category;
        $tovar->save();

        $request->session()->flash('status', 'Категория успешно добавлена');

        return redirect()->back();

    }

    public function edit(Tovar_podcategory $tovar_podcategory)
    {

        return view('admin.tovar_podcategory.edit', ['tovar_podcategory' => $tovar_podcategory->load('tovar_category')]);
    }

    public function update(Request $request, Tovar_podcategory $tovar_podcategory)
    {


        $validator = Validator::make($request->all(), [
            'name' => [
                'required',
                'min:3',
                'max:255',
                Rule::unique('tovar_podcategories')->ignore($tovar_podcategory->id, 'id'),
            ],
            'description' => 'max:3000',
            'tovar_category' => 'required|exists:tovar_categories,id'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $tovar_podcategory->name = $request->name;
        $tovar_podcategory->name_eng = str_slug($request->name);
        $tovar_podcategory->description = $request->description;
        $tovar_podcategory->tovar_category_id = $request->tovar_category;
        $tovar_podcategory->save();

        $request->session()->flash('status', 'Категория успешно изменена');

        return redirect()->back();

    }

    public function destroy(Request $request, Tovar_podcategory $tovar_podcategory)
    {
        $tovar_podcategory->delete();
        $request->session()->flash('status', 'Категория успешно удалена');
        return redirect()->back();
    }
}
