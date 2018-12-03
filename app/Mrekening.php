<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mrekening extends Model
{
   	protected $table = 'rekening';
    protected $primaryKey = 'id';
	protected $fillable = [
        'nama','noRek','user_id',
];

public function penyedia()
    {
    	return $this->belongsTo('app\User');
    }
public function datakesenian()
    {
    	return $this->belongsTo('App\datakesenian','seni_id');
    }

}
