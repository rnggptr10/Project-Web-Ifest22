<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ctf_form extends Model
{
    use HasFactory;
    protected $table = 'ctf_forms';
    protected $fillable = [
        'email',
        'team_name',
        'team_leader',
        'team_member_1',
        'team_member_2',
        'id_card',
        'proof_payment',
    ];
}
