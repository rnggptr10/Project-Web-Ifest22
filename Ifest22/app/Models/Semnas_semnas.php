<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semnas_semnas extends Model
{
    use HasFactory;
    protected $fillable = [
        'email',
        'name',
        'institute',
        'proof_payment',
        'status_pembayaran',
    ];
}
