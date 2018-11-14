<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabelKesenian extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dataKesenian', function (Blueprint $table) {
            $table->increments('id');
            $table->string('namaKesenian',150);
            $table->string('JenisKesenian',150);
            $table->integer('tarifSewa');
            $table->string('noTelp',14);
            $table->text('alamat');
            $table->text('deskripsi');
            $table->string('foto',150);
            $table->integer('user_id') -> unsigned();
            $table->timestamps();            
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dataKesenian');
    }
}
