<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResponden2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('responden2s', function (Blueprint $table) {
            $table->id();
            $table->text('nama_lengkap');
            $table->string('usia', 60);
            $table->text('status');
            $table->text('instansi');
            $table->string('no_hp', 60);
            $table->text('topik_berita');
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
        Schema::dropIfExists('responden2s');
    }
}
