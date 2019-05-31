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
        'judul_lomba',
    	'id_lomba'
    ];

    public function lomba()
    {
    	return $this->belongsTo(Lomba::class);

        // return $this->hasMany(Lomba::class);
    }
}


