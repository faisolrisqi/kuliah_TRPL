<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
	protected $table = 'transaksi';
    protected $primaryKey = 'id_sewa';
	protected $fillable = [
        'namaKesenian','JenisKesenian','penyedia','tarifSewa','durasiSewa', 'tanggalSewa','alamatPenyewaan','catatan','metodePembayaran','status','user_id','seni_id','statusBayar','noTelp',
];
    public function penyedia()
    {
    	return $this->belongTo('app\User');
    }
    public function datakesenian()
    {
    	return $this->belongTo('app\datakesenian');
    }

}
