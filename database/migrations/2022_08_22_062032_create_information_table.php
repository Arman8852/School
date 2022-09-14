<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('information', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('madrasha_id')->unsigned();
            $table->longText('madrashaideology');
            $table->longText('externalinfluence');
            $table->longText('accidentinfo');
            $table->longText('caseinfo');
            $table->longText('bankinfo');
            $table->longText('donnerinfo');
            $table->longText('remarks');
            $table->foreign('madrasha_id')->references('id')->on('madrashas')
        ->onDelete('cascade');
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
        Schema::dropIfExists('information');
    }
}
