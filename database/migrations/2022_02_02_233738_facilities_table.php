<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FacilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facilities', function (Blueprint $table) {
            $table->id(); ###this is the primary key-id
            $table->integer('propertyId');
            $table->boolean('airConditioning');
            $table->boolean('internet');
            $table->boolean('cableTv');
            $table->boolean('petAllowed');
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
        
        Schema::table('facilities', function($table) {
            $table->integer('propertyId');
            $table->boolean('airConditioning');
            $table->boolean('internet');
            $table->boolean('cableTv');
            $table->boolean('petAllowed');
            $table->dateTime('createdAt');
            $table->dateTime('updatedAt');
        });
    }
}
