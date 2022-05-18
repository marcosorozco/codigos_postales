<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCodigosPostalesTiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('codigos_postales', function (Blueprint $table) {
            $table->id();
            $table->foreignId('codigo_id');
            $table->string('d_asenta');
            $table->foreignId('asentamiento_tipo_id');
            $table->foreignId('municipio_id');
            $table->foreignId('estado_id');
            $table->foreignId('ciudad_id')->nullable();
            $table->string('d_CP');
            $table->string('c_estado');
            $table->string('c_oficina');
            $table->string('c_CP');
            $table->string('c_tipo_asenta');
            $table->string('c_mnpio');
            $table->string('id_asenta_cpcons');
            $table->foreignId('zona_id');
            $table->string('c_cve_ciudad');
            $table->timestamps();

            $table->foreign('codigo_id')
                ->references('id')
                ->on('codigos');

            $table->foreign('asentamiento_tipo_id')
                ->references('id')
                ->on('asentamientos_tipos');

            $table->foreign('municipio_id')
                ->references('id')
                ->on('municipios');

            $table->foreign('estado_id')
                ->references('id')
                ->on('estados');

            $table->foreign('ciudad_id')
                ->references('id')
                ->on('ciudades');

            $table->foreign('zona_id')
                ->references('id')
                ->on('zonas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('codigos_postales');
    }
}
