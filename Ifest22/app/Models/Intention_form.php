<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intention_form extends Model
{
    use HasFactory;
    protected $table = 'intention_forms';
    protected $fillable = [
        'email',
        'team_name',
        'team_leader',
        'team_leader_institute',
        'team_leader_id_card',
        'team_member_1',
        'team_member_1_institute',
        'team_member_1_id_card',
        'team_member_2',
        'team_member_2_institute',
        'team_member_2_id_card',
        'team_member_3',
        'team_member_3_institute',
        'team_member_3_id_card',
        'team_member_4',
        'team_member_4_institute',
        'team_member_4_id_card',
        'proof_payment',
        'status_pembayaran',
        'proposal_link',
        'app_link',
        'status_finalist',
    ];
}
