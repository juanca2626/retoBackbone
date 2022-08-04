<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZipcodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zipcodes', function (Blueprint $table) {
            $table->id();
            $table->string('d_codigo',8);
            $table->string('d_asenta',250)->nullable();
            $table->string('d_tipo_asenta',250)->nullable();
            $table->string('d_mnpio',250)->nullable();
            $table->string('d_estado',250)->nullable();
            $table->string('d_ciudad',250)->nullable();
            $table->string('d_cp',50)->nullable();
            $table->string('c_estado',50)->nullable();
            $table->string('c_oficina',50)->nullable();
            $table->string('c_cp',50)->nullable();
            $table->string('c_tipo_asenta',50)->nullable();
            $table->string('c_mnpio',50)->nullable();
            $table->string('id_asenta_cpcons',50)->nullable();
            $table->string('d_zona',250)->nullable();
            $table->string('c_cve_ciudad',50)->nullable();
            $table->timestamps();

            $table->index('d_codigo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('zipcodes');
    }
}
