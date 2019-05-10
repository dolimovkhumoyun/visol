<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('order_id');            
            $table->string('orderer_name');
            $table->dateTime('order_date');
            $table->string('bride_name');
            $table->string('groom_name');
            $table->integer('first_meal_id');
            $table->integer('second_meal_id');
            $table->boolean('light_show');
            $table->boolean('projector');
            $table->integer('guest_number');
            $table->bigInteger('overall_payment');
            $table->bigInteger('prepayment_sum');
            $table->boolean('prepayment_status');

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
