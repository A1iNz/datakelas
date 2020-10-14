<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'Kelas';
    protected $fillable = ['nama', 'kelas', 'nis'];
    public $timestamps = false;
}
