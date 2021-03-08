<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductVariantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_variants', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique()->index();
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade');
            $table->foreignId('option_id')->nullable()->constrained('options')->onDelete('SET NULL');
            $table->foreignId('option_value_id')->nullable()->constrained('option_values')->onDelete('SET NULL');
            $table->foreignId('attribute_id')->nullable()->constrained('attributes')->onDelete('SET NULL');
            $table->foreignId('attribute_value_id')->nullable()->constrained('attribute_values')->onDelete('SET NULL');
            $table->integer('price');
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
        Schema::dropIfExists('product_variants');
    }
}
