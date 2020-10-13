<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locate', function (Blueprint $table) {
            $table->id();
            $table->string('communelocate');
            $table->integer('zonelocate');
            $table->string('quartierlocate');
            $table->string('avenuelocate');
            $table->string('ruelocate');
            $table->integer('numilotlocate');
            $table->integer('numlotlocate');
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
        Schema::dropIfExists('locate');
    }
}
