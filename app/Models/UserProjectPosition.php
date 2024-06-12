<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserProjectPosition extends Model
{
    protected $table = 'user_project_positions';

    protected $fillable = [
        'user_id',
        'project_id',
        'position_id',
    ];
    
}

