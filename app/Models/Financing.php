<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Financing extends Model
{
    protected $fillable = [
        'competence_id',
        'code',
        'name',
    ];
}
