<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subgroup extends Model
{
    protected $fillable = [
        'competence_id',
        'group_id',
        'code',
        'name',
    ];
}
