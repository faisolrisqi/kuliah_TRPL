<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->increments('id_Sewa');
            $table->string('namaKesenian',150);
            $table->string('jenisKesenian',150);
            $table->string('penyedia',150);
            $table->string('tarifSewa',14);
            $table->int('durasiSewa');
            $table->string('tanggalSewa',150);
            $table->text('alamatPenyewaan');
            $table->text('catatan');
            $table->string('metodePembayaran');
            $table->string('status');
            $table->integer('user_id') -> unsigned();
            $table->integer('seni_id') -> unsigned();
            $table->timestamps();            
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('seni_id')->references('id')->on('datakesenian');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */ 
    public function down()
    {
        Schema::dropIfExists('transaksi');
    }
}
