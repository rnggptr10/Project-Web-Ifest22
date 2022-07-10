<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semnas_paper extends Model
{
    use HasFactory;
    protected $fillable = [
        'email',
        'name',
        'institute',
        'abstract_link',
        'status_selected',
        'proof_payment',
        'paper1_link',
        'paper2_link',
    ];
}
