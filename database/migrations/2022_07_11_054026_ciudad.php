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
        Schema::create('ciudad', function (Blueprint $table) {
            $table->bigIncrements('idCiudad')->unique();
            $table->string('nombreCiudad');
            $table->unsignedBigInteger('region_idRegion');
            $table->boolean('estado');
            $table->timestamps();
            $table->foreign('region_idRegion')
            ->references('idRegion')
            ->on('region')
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
