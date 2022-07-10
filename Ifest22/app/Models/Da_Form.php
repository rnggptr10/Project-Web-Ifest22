<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Da_Form extends Model
{
    use HasFactory;
    protected $table = 'da_forms';
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
        'proof_payment',
        'paper_link',
        'analytics_result',
        'status_pembayaran',
        'status_finalist',
    ];
}
