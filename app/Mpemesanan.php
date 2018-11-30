<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mpemesanan extends Model
{
    protected $table = 'transaksi';
    protected $primaryKey = 'id_sewa';
	protected $fillable = [
    'durasiSewa', 'tanggalSewa', 'catatan','metodePembayaran',
}
