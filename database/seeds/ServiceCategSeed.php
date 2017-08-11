<?php

use Illuminate\Database\Seeder;
use App\Service_category;
use App\Service;

class ServiceCategSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ([1, 2, 3, 4, 5] as $id):
            $categ = new Service_category();
            $categ->name = 'Категория услуги № ' . $id;
            $categ->name_eng = 'categor_uslug_' . $id;
            $categ->description = '';
            $categ->save();

            foreach ([1,2, 3, 4, 5,6,7,8,9,10] as $id2):
                $sevice = new Service();
                $sevice->name = 'Услуга № '.$id2;
                $sevice->name_eng = 'uslug1'.$id2;
                $sevice->service_category_id = $id;
                $sevice->description = 'Sed congue elit malesuada nibh, a varius odio vehicula aliquet. Aliquam consequat, nunc quis sollicitudin aliquet.Sed congue elit malesuada nibh, a varius odio vehicula aliquet. Aliquam consequat, nunc quis sollicitudin aliquet.';
                $sevice->save();
            endforeach;

        endforeach;
    }
}
