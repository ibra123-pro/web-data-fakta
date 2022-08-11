<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomentarWebDevelopersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komentar_web_developer', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 50);
            $table->date("tgl");
            $table->text('email');
            $table->text('komentar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('komentar_web_developer');
    }
}
