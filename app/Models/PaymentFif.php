<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentFif extends Model
{
    protected $table = 'fif';
    protected $fillable = [
    	'nama',
    	'nomer_kontrak',
    	'bayar',
    	'via',
    	'foto',
    	'created_at',
    	'updated_at'
    ];

}
