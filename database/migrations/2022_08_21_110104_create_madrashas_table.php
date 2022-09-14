<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMadrashasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('madrashas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('madrasha');
            $table->string('madrashaimage');
            $table->string('type');
            $table->string('subtype');
            $table->string('founder');
            $table->string('foundationyear');
            $table->string('division');
            $table->string('district');
            $table->string('subdistrict');
            $table->longText('address');
            $table->float('latitude');
            $table->float('longitude');
            $table->string('muhtamim');
            $table->string('muhtamimideology');
            $table->string('muhtamimaddress');
            $table->string('muhtamimnid');
            $table->string('muhtamimphone');
            $table->string('highestclass');
            $table->string('studentnumber');
            $table->string('teachernumber');
            $table->string('category');
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
        Schema::dropIfExists('madrashas');
    }
}
