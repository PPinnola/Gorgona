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
        //
        Schema::create('documento', function (Blueprint $table) {
            $table->bigIncrements('idDocumento')->unique();
            $table->string('ciudadDoc');
            $table->string('fechaDoc'); 
            $table->string('nombreNotarioDoc');
            $table->string('calleNotarioDoc');
            $table->string('numeroCalleNotarioDoc');
            $table->string('comunaCalleNotarioDoc');
            $table->string('nombreVendedor');
            $table->string('nacionalidadVendedor');
            $table->string('estadoCivilVendedor');
            $table->string('profesionVendedor');
            $table->string('rutVendedor');
            $table->string('calleVendedor');
            $table->string('numeroVendedor');
            $table->string('comunaVendedor');
            $table->string('nombreComprador');
            $table->string('nacionalidadComprador');
            $table->string('estadoCivilComprador');
            $table->string('profesionComprador');
            $table->string('rutComprador');
            $table->string('calleComprador');
            $table->string('numeroComprador');
            $table->string('comunaComprador');
            $table->string('nombreEdificio');
            $table->string('calleEdificio');
            $table->string('numeroEdificio');
            $table->string('numeroPisoDpto');
            $table->string('numeroDpto');
            $table->string('comunaDpto');
            $table->string('numeroPlanoDpto');
            $table->string('numeroDocumentoDpto');
            $table->string('coordenadaNorte');
            $table->string('coordenadaSur');
            $table->string('coordenadaEste');
            $table->string('coordenadaOeste');
            $table->string('dominioFojaDpto');
            $table->string('numeroFojaDpto');
            $table->string('precioDpto');
            $table->string('metodoPagoDpto');
            $table->string('idAsset');
            $table->string('fechaCreacionDoc');
            $table->string('fechaInscripcionNotario')->nullable();
            $table->string('fechaInscripcionConservador')->nullable();
            $table->string('firmaNotario')->nullable();
            $table->string('firmaConservador')->nullable();
            $table->string('firmaVendedor')->nullable();
            $table->string('firmaComprador')->nullable();
            $table->string('cedulaNotario')->nullable();
            $table->string('cedulaConservador')->nullable();
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
        //
    }
};