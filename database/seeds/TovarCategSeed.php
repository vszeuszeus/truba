<?php

use Illuminate\Database\Seeder;
use App\Tovar_category;

class TovarCategSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tovar_cat = new Tovar_category();
        $tovar_cat->name = 'Category 1';
        $tovar_cat->name_eng = "cat_1";
        $tovar_cat->description = "";
        $tovar_cat->save();

        $tovar_cat = new Tovar_category();
        $tovar_cat->name = 'Category 2';
        $tovar_cat->name_eng = "cat_2";
        $tovar_cat->description = "";
        $tovar_cat->save();

        $tovar_cat = new Tovar_category();
        $tovar_cat->name = 'Category 2';
        $tovar_cat->name_eng = "cat_2";
        $tovar_cat->description = "";
        $tovar_cat->save();
    }
}
