<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $fillable = [
        'email',
        'intention_status',
        'da_status',
        'ctf_status',
        'techno_seminar_status',
        'techno_ws_status',
        'startup_status',
        'incon_status',
    ];
}
