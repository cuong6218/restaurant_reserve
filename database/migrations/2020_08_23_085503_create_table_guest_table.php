<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableGuestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_guest', function (Blueprint $table) {
            $table->unsignedBigInteger('table_id')->nullable();
            $table->unsignedBigInteger('guest_id')->nullable();
            $table->foreign('table_id')->references('id')->on('tables');
            $table->foreign('guest_id')->references('id')->on('guests');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_guest');
    }
}
