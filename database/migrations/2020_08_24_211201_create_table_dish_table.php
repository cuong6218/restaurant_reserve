<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDishTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_dish', function (Blueprint $table) {
            $table->unsignedBigInteger('table_id')->nullable();
            $table->unsignedBigInteger('dish_id')->nullable();
            $table->foreign('table_id')->references('id')->on('tables');
            $table->foreign('dish_id')->references('id')->on('dishes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_dish');
    }
}
