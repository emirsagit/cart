<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('image')->nullable();
            $table->integer('price');
            $table->text('description')->nullable();
            $table->boolean('show_on_slider')->default(false)->index();
            $table->smallInteger('slider_order')->default(1);
            $table->boolean('show_on_homepage')->default(false)->index();
            $table->smallInteger('homepage_order')->default(1);
            $table->boolean('seo_title')->nullable();
            $table->boolean('seo_description')->nullable();
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
        Schema::dropIfExists('products');
    }
}
