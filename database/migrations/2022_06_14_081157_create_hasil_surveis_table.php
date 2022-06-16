<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHasilSurveisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasil_surveis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_penduduk');
            $table->foreignId('id_opsi_jawaban');
            $table->date('tanggal');
            $table->float('longitude');
            $table->float('latitude');
            $table->softDeletes();
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
        Schema::dropIfExists('hasil_surveis');
    }
}
