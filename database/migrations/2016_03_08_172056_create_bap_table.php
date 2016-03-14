<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bap_models', function (Blueprint $table) {
            $table->increments('id');
            $table->string('validate');
            $table->string('name');
            $table->string('username');
            $table->string('type');
            $table->string('typeother');
            $table->longText('descriptif');
            $table->longText('context');
            $table->longText('objectif');
            $table->longText('contrainte');
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
        Schema::drop('bap');
    }
}
