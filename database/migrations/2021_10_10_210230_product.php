<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Product extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('description', 255);
            $table->integer('seller'); //////////////
            $table->float('price',8,2);
            $table->float('discount',8,2);
            $table->integer('contity');
            $table->integer('attachments');///////////
            $table->smallInteger('rate');
            $table->string('brand'); /////////////////
            $table->string('material');
            $table->string('category'); /////////////
            $table->string('variation'); /////////////
            $table->string('dimensions'); 
            $table->float('whight',8,2);
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
        //
    }
}
