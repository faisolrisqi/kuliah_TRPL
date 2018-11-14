<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
	protected $table = 'transaksi';
    protected $primaryKey = 'id_sewa';
	protected $fillable = [
        'durasiSewa', 'tanggalSewa', 'catatan','metodePembayaran',
];


    public function penyedia()
    {
    	return $this->belongTo('app\User');
    }
}
