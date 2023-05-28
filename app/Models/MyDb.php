<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyDb extends Model
{
    protected $table = 'masukan';
    protected $fillable = [
    	'Nama',
    	'Pesan',
    	'Email',
    	'Telpon',
    	'Kategori'
    ];

}
