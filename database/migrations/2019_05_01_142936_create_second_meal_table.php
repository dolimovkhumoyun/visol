<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSecondMealTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('second_meals', function (Blueprint $table) {
            $table->bigIncrements('second_id');            
            $table->string('second_name');
            $table->text('second_img');
            $table->integer('second_cat_id');
            $table->timestamps();
            $table->foreign('second_id')
                   ->references('cat_id')
                   ->on('category_list')
                   ->onUpdate('cascade')
                   ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('second_meals');
    }
}
