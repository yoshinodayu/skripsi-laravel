<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIterasi2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iterasi2s', function (Blueprint $table) {
            $table->string('responden');
            $table->biginteger('p1');
            $table->biginteger('p2');
            $table->biginteger('p3');
            $table->biginteger('p4');
            $table->biginteger('p5');
            $table->biginteger('p6');
            $table->biginteger('p7');
            $table->biginteger('p8');
            $table->biginteger('p9');
            $table->biginteger('p10');
            $table->biginteger('p11');
            $table->biginteger('p12');
            $table->biginteger('p13');
            $table->biginteger('p14');
            $table->biginteger('p15');
            $table->biginteger('p16');
            $table->biginteger('p17');
            $table->biginteger('p18');
            $table->biginteger('C1');
            $table->biginteger('C2');
            $table->biginteger('C3');
            $table->string('kelas');
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
        Schema::dropIfExists('iterasi2s');
    }
}
