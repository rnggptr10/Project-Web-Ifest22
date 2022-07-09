<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Techno_ws_form extends Model
{
    use HasFactory;
    protected $table = 'techno_ws_forms';
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
        'proposal_link',
        'proof_payment',
        'status_pembayaran',
        'selected_team',
        'pitcdeck1_link',
        'pitcdeck2_link',
    ];
}
