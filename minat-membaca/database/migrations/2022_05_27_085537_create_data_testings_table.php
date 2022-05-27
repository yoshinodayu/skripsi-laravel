<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataTestingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_testings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('identitas2_id');
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
            $table->text('kelas');
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
        Schema::dropIfExists('data_testings');
    }
}
