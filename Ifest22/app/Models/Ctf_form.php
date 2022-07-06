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
        'team_leader_institute',
        'team_member_1',
        'team_member_1_institute',
        'team_member_2',
        'team_member_2_institute',
        'id_card',
        'proof_payment',
    ];
}
