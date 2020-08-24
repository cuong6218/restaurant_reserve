<?php

use Illuminate\Database\Seeder;

class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table = new \App\Table();
        $table->name = '1';
        $table->status = 'empty';
        $table->save();
        $table = new \App\Table();
        $table->name = '2';
        $table->status = 'empty';
        $table->save();
        $table = new \App\Table();
        $table->name = '3';
        $table->status = 'empty';
        $table->save();
        $table = new \App\Table();
        $table->name = '4';
        $table->status = 'empty';
        $table->save();
        $table = new \App\Table();
        $table->name = '5';
        $table->status = 'empty';
        $table->save();
        $table = new \App\Table();
        $table->name = '6';
        $table->status = 'empty';
        $table->save();
        $table = new \App\Table();
        $table->name = '7';
        $table->status = 'empty';
        $table->save();
        $table = new \App\Table();
        $table->name = '8';
        $table->status = 'empty';
        $table->save();
    }
}
