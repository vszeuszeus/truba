<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tovar_category;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;


class TovarCategoryController extends Controller
{
    public function show()
    {
        return view('admin.tovar_category.show');
    }

    public function create()
    {
        return view('admin.tovar_category.create');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|min:3|max:255|unique:tovar_categories,name',
            'description' => 'max:3000',
        ]);


        $tovar = new Tovar_category();
        $tovar->name = $request->tovar_name;
        $tovar->name_eng = str_slug($request->tovar_name);
        $tovar->description = $request->description;
        $tovar->save();

        return redirect()->back();

    }

    public function edit(Tovar_category $tovar_category)
    {

        return view('admin.tovar_category.edit', ['tovar_category' => $tovar_category]);
    }

    public function update(Request $request, Tovar_category $tovar_category)
    {


        $validator = Validator::make($request->all(), [
            'name' => [
                'required',
                'min:3',
                'max:255',
                Rule::unique('tovars_categories')->ignore($tovar_category->id, 'id'),
            ],
            'description' => 'max:3000',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $tovar_category->name = $request->name;
        $tovar_category->name_eng = str_slug($request->name);
        $tovar_category->description = $request->description;
        $tovar_category->save();
        $tovar_category->save();


        return redirect()->back();

    }

    public function destroy(Request $request, Tovar_category $tovar_category)
    {
        $tovar_category->delete();
        $request->session()->flash('status', 'Товар успешно удален');
        return redirect()->back();
    }
}
