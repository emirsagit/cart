<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstallmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('installments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->unsignedTinyInteger('bin_number');
            $table->unsignedDecimal('price');
            $table->boolean('force3ds');
            $table->string('card_family')->nullable();
            $table->string('installment_price');
            $table->string('total_price');
            $table->string('local_subtotal');
            $table->string('local_total');
            $table->unsignedTinyInteger('installment_number');
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
        Schema::dropIfExists('installments');
    }
}
