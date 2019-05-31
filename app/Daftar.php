<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Daftar extends Model
{
    protected $fillable = [
    	'alamat_email',
    	'nama_team',
    	'nama_ketua',
    	'no_wa',
    	'id_lomba'
    ];

	public $id = 'id_daftar';
    public function lomba()
    {
    	return $this->belongsTo(Lomba::class);
    }
}


