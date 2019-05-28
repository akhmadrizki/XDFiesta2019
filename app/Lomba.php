<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lomba extends Model
{
    public $table = 'lomba';

    protected $table = 'lomba';

    public function daftar()
	{
		return $this->hasMany(Daftar::class);
	}
}
