<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Visitors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitors', function (Blueprint $table) {
            $table->id(); ###this is the primary key-id
            $table->integer('propertyId');
            $table->integer('ip');
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
        Schema::table('visitors', function($table) {
            $table->integer('propertyId');
            $table->integer('ip');
            $table->dateTime('createdAt');
            $table->dateTime('updatedAt');
        });
    }
}
