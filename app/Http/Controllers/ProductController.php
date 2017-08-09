<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tovar_category;
use App\Tovar_podcategory;
use App\Tovar;

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

    public function index_tovar(Tovar_category $tovar_category, Tovar_podcategory $tovar_podcategory,Tovar $tovar)
    {
        return view('podpages.tovar', [
            'tovar_category' => $tovar_category,
            'tovar_podcategory' => $tovar_podcategory,
            'tovar' => $tovar
        ]);
    }
}
