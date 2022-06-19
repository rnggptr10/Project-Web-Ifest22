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
        'team_member_1',
        'team_member_2',
        'team_member_3',
        'team_member_4',
        // 'id_card',
        'proof_payment',
        'proposal_link',
        'app_link',
        'finalist'
    ];
}
