<?php

use Illuminate\Database\Seeder;
use App\Tovar_podcategory;

class TovarPodCategSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $tovar_cat = new Tovar_podcategory();
        $tovar_cat->name = 'PodCategory 2';
        $tovar_cat->name_eng = "podcat_1";
        $tovar_cat->tovar_category_id  = 1;
        $tovar_cat->description = "";
        $tovar_cat->save();
        $tovar_cat = new Tovar_podcategory();
        $tovar_cat->name = 'PodCategory 2';
        $tovar_cat->name_eng = "podcat_2";
        $tovar_cat->tovar_category_id  = 1;
        $tovar_cat->description = "";
        $tovar_cat->save();
        $tovar_cat = new Tovar_podcategory();
        $tovar_cat->name = 'PodCategory 2';
        $tovar_cat->name_eng = "podcat_3";
        $tovar_cat->tovar_category_id  = 1;
        $tovar_cat->description = "";
        $tovar_cat->save();

        $tovar_cat = new Tovar_podcategory();
        $tovar_cat->name = 'PodCategory 2';
        $tovar_cat->name_eng = "podcat_1";
        $tovar_cat->tovar_category_id  = 2;
        $tovar_cat->description = "";
        $tovar_cat->save();
        $tovar_cat = new Tovar_podcategory();
        $tovar_cat->name = 'PodCategory 2';
        $tovar_cat->name_eng = "podcat_2";
        $tovar_cat->tovar_category_id  = 2;
        $tovar_cat->description = "";
        $tovar_cat->save();
        $tovar_cat = new Tovar_podcategory();
        $tovar_cat->name = 'PodCategory 2';
        $tovar_cat->name_eng = "podcat_3";
        $tovar_cat->tovar_category_id  = 2;
        $tovar_cat->description = "";
        $tovar_cat->save();

        $tovar_cat = new Tovar_podcategory();
        $tovar_cat->name = 'PodCategory 2';
        $tovar_cat->name_eng = "podcat_1";
        $tovar_cat->tovar_category_id  = 3;
        $tovar_cat->description = "";
        $tovar_cat->save();
        $tovar_cat = new Tovar_podcategory();
        $tovar_cat->name = 'PodCategory 2';
        $tovar_cat->name_eng = "podcat_2";
        $tovar_cat->tovar_category_id  = 3;
        $tovar_cat->description = "";
        $tovar_cat->save();
        $tovar_cat = new Tovar_podcategory();
        $tovar_cat->name = 'PodCategory 2';
        $tovar_cat->name_eng = "podcat_3";
        $tovar_cat->tovar_category_id  = 3;
        $tovar_cat->description = "";
        $tovar_cat->save();

    }
}
