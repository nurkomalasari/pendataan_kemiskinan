<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenduduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penduduks', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('tanggal_lahir');
            $table->enum('jenis_kelamin', ['Laki-Laki', 'Perempuan']);
            $table->enum('agama', ['ISLAM', 'BUDHA', 'KHATOLIK', 'KRISTEN', 'HINDU', 'KHONGHUCU']);
            $table->foreignId('id_status');
            $table->string('pekerjaan');
            $table->foreignId('district');
            $table->foreignId('village');
            $table->string('alamat_lengkap');
            $table->string('longitude');
            $table->string('latitude');
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
        Schema::dropIfExists('penduduks');
    }
}
