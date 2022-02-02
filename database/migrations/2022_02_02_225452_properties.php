<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Properties extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id(); ###this is the primary key-id
            $table->integer('userId');
            $table->string('description');
            $table->integer('price');
            $table->string('address');
            $table->integer('area');
            $table->string('latitude');
            $table->string('longitude');
            $table->integer('rooms');
            $table->boolean('active');
            $table->integer('deposit');
            $table->integer('utilities');
            $table->integer('period');
            $table->integer('type');
            $table->dateTime('available');
            $table->dateTime('createdAt');
            $table->dateTime('updatedAt');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('properties', function($table) {
            $table->integer('userId');
            $table->string('description');
            $table->integer('price');
            $table->string('address');
            $table->integer('area');
            $table->string('latitude');
            $table->string('longitude');
            $table->integer('rooms');
            $table->boolean('active');
            $table->integer('deposit');
            $table->integer('utilities');
            $table->integer('period');
            $table->integer('type');
            $table->dateTime('available');
            $table->dateTime('createdAt');
            $table->dateTime('updatedAt');
         });
    }
}
