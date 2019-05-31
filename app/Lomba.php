<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lomba extends Model
{
    public $table = 'lomba';
	public $id = 'id_lomba';
    public function daftar()
	{
		return $this->hasMany(Daftar::class);
	}
}
