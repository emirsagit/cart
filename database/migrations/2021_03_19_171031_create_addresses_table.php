<?php

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
			$table->string('description', 50)->nullable();
			$table->string('name', 50)->nullable();
			$table->string('address', 300);
			$table->string('phone', 20);
            $table->foreignId('city_id')->constrained('cities')->onDelete('cascade');
            $table->string('district', 50);
            $table->string('neighborhood', 50);
            $table->unsignedSmallInteger('postal_code');
            $table->boolean('is_default')->default(false);
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
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
        Schema::dropIfExists('addresses');
    }
}
