<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtificialIntelligencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artificial_intelligence', function (Blueprint $table) {
            $table->id();
            $table->text('judul');
            $table->text('keterangan');
            $table->text('catatan');
            $table->text('sumber');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artificial_intelligence');
    }
}
