<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTovarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tovars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->string('name_eng', 255);
            $table->string('path', 255);
            $table->string('description', 3000);
            $table->integer('tovar_podcategory_id')->unsigned();
            $table->foreign('tovar_podcategory_id')->references('id')->on('tovar_podcategories')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tovar');
    }
}
