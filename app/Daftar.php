<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Daftar extends Model
{
    protected $fillable = [
    	'alamat_email',
    	'nama_team',
    	'nama_ketua',
        'nama_anggota1',
        'nama_anggota2',
        'nama_anggota3',
        'nama_anggota4',
        'nama_anggota5',
        'nama_anggota6',
        'jumlah_anggota',
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


