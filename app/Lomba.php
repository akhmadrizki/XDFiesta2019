<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lomba extends Model
{
    // public $table = 'lomba';

    protected $table = 'lomba';

    protected $fillable = [
    	'judul',
    	'judul_nav',
    	'deskripsi',
    	'pic',
    	'thumbnail',
    	'pdf'
    ];

    public function daftar()
	{
		return $this->hasMany(Daftar::class);
		// return $this->belongsTo(Daftar::class);
	}
}
