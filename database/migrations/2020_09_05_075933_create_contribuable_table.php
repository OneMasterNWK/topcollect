<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

class CreateContribuableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contribuable', function (Blueprint $table) {
            $table->id();
            $table->string('nomcontrib');
            $table->string('prenomcontrib');
            $table->string('sexecontrib');
            $table->date('naisscontrib');
            $table->string('lieunaisscontrib');
            $table->string('payscontrib');
            $table->string('nationcontrib');
            $table->string('piececontrib');
            $table->integer('numpiececontrib');
            $table->string('telcontrib');
            $table->string('celcontrib');
            $table->string('emailcontrib');
            $table->string('activcontrib');
            $table->string('professcontrib');
            $table->integer('montredevcontrib');
            $table->unsignedBigInteger('id_mairie');
            $table->foreign('id_mairie')->references('id')->on('mairie');
            $table->rememberToken();
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
        Schema::dropIfExists('contribuable');
    }
}
