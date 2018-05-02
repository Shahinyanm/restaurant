<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->integer('price');
            $table->string('weight');
            $table->text('photo');
            $table->integer('status');
            $table->integer('recomend');
            $table->integer('popular')->default(0);
            $table->integer('catalog_id')->unsigned()->index()->nullable();
//            $table->foreign('catalog_id')->references('id')->on('Catalogs')->unsigned()->index()->nullable();

            $table->timestamps();
            // $table->foreign('catalog_id')->references('id')->on('catalogs');
        });

Schema::table('products', function($table) {
    $table->foreign('catalog_id')->references('id')->on('catalogs');
});
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Products');
    }
}
