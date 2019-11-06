<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('npm');
            $table->string('nama');
            $table->string('kelas');
            $table->string('jurusan');
            $table->string('fakultas');
            $table->string('alamat');
            $table->string('nomor_telepon');
            $table->string('krs');
            $table->string('avatar');
            $table->string('user_id');
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
        Schema::dropIfExists('calas');
    }
}
