<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestV2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testV2', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('num')->unsigned();
            $table->timestamps();
            $table->foreign('num')->references('id')->on('test');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('testV2');
    }
}
