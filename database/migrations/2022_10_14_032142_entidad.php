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
        Schema::create('entidad', function (Blueprint $table) {
            $table->bigIncrements('idEntidad')->unique();
            $table->string('rutEntidad')->unique();
            $table->string('secreto')->nullable();
            $table->string('certificado')->nullable();
            $table->string('contrasenaEntidad');
            $table->string('rolEntidad');
            $table->string('estado');
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entidad');
    }
};
