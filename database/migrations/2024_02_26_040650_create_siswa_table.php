<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->text('alamat')->nullable();
            $table->string('no_tlp')->nullable;
            $table->enum('jenis_kelamin',['laki_laki','perempuan']);
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('ijazah')->nullable();
            $table->string('kk')->nullable();
            $table->string('photo')->nullable();

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
        Schema::dropIfExists('siswa');
    }
}
