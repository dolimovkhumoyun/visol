<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFirstMealTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('first_meals', function (Blueprint $table) {
            $table->bigIncrements('first_id');            
            $table->string('first_name');
            $table->text('first_img');
            $table->integer('first_cat_id');
            $table->timestamps();
            $table->foreign('first_id')
                   ->references('cat_id')
                   ->on('category_list')
                   ->onUpdate('cascade')
                   ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('first_meals');
    }
}
