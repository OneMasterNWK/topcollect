<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMairieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mairie', function (Blueprint $table) {
            $table->id('id_mairie');
            $table->string('nom_mairie');
            $table->string('lieu_mairie');
            $table->string('adress_mairie');
            $table->integer('tel_mairie');
            $table->string('code_mairie')->nullable();
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
        Schema::dropIfExists('mairie');
    }
}
