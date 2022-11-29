<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('comuna', function (Blueprint $table) {
            $table->bigIncrements('idComuna')->unique();
            $table->string('nombreComuna');
            $table->unsignedBigInteger('ciudad_idCiudad');
            $table->boolean('estado');
            $table->timestamps();
            $table->foreign('ciudad_idCiudad')
            ->references('idCiudad')
            ->on('ciudad')
            ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
