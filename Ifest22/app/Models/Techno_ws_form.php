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
        'team_member_1',
        'team_member_2',
        'proposal_link',
        'id_card',
        'proof_payment',
        'selected_team'
    ];
}
