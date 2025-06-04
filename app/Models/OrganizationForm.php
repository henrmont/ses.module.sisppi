<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrganizationForm extends Model
{
    protected $fillable = [
        'competence_id',
        'group_id',
        'subgroup_id',
        'code',
        'name',
    ];
}
