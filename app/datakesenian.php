<?php

namespace App;
use Auth;
use Illuminate\Database\Eloquent\Model;

class datakesenian extends Model
{
	protected $table = 'datakesenian';
    protected $primaryKey = 'id';
	protected $fillable = [
        'namaKesenian', 'JenisKesenian', 'tarifSewa','noTelp','alamat','deskripsi','foto','status','statusSewa','fotoSeni','user_id',
];
        
    public function penyedia()
    {
    	return $this->belongTo('app\User');
    }

}
