<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class wisata extends Model
{
    protected $table = 'wisata';
    protected $fillable = ['nama', 'deskripsi', 'harga'];
}
