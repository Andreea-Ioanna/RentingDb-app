<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tenant extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenant', function (Blueprint $table) {
            $table->id(); ###this is the primary key-id
            $table->integer('propertyId');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('email');
            $table->string('job');
            $table->string('description');
            $table->string('photo');
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
        Schema::table('tenant', function($table) {
            $table->integer('propertyId');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('email');
            $table->string('job');
            $table->string('description');
            $table->string('photo');
            $table->dateTime('createdAt');
            $table->dateTime('updatedAt');
        });
    }
}
