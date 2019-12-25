<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDosennnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosennns', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama', 200);
            $table->string('tempat_lahir', 100);
            $table->date('tgl_lahir');
            $table->string('alamat');
            $table->char('jenis_kelamin', 1);
            $table->char('nomor_hp', 13);
            $table->string('email',50);
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
        Schema::dropIfExists('dosennns');
    }
}
