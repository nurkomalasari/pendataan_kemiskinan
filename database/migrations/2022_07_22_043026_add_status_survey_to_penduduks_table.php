<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusSurveyToPenduduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('penduduks', function (Blueprint $table) {
            $table->string('nik')->after('id');
            $table->string('kks')->nullable()->after('nik');
            $table->enum('status_survey', ['Sudah disurvey', 'Belum disurvey'])->default('Belum disurvey');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('penduduks', function (Blueprint $table) {
            //
        });
    }
}
