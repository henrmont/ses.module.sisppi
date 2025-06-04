<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ExerciseYear extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
    ];

    // public function incentive()
    // {
    //     return $this->hasOne(Incentive::class);
    // }

    // public function ministerial_ordinace()
    // {
    //     return $this->hasOne(MinisterialOrdinace::class);
    // }
}
