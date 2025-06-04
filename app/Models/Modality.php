<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Modality extends Model
{
    protected $table = 'modalities';

    protected $fillable = [
        'competence_id',
        'code',
        'name',
    ];
}
