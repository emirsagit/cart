<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->index()->constrained('users');
            $table->foreignId('delivery_id')->index()->constrained('addresses');
            $table->foreignId('billing_id')->index()->constrained('addresses');
            $table->foreignId('shipping_id')->index()->constrained('shippings');
            $table->boolean('pay_at_door')->default(false);
            $table->unsignedSmallInteger('subtotal');
            $table->unsignedSmallInteger('total');
            $table->string('status')->default('pending');
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
        Schema::dropIfExists('orders');
    }
}
