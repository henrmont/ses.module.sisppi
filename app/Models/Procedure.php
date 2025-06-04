<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Procedure extends Model
{
    protected $fillable = [
        'competence_id',
        'group_id',
        'subgroup_id',
        'organization_form_id',
        'financing_id',
        'heading_id',
        'code',
        'name',
        'complexity',
        'gender',
        'max_execution',
        'days_of_stay',
        'time_of_stay',
        'points',
        'min_age',
        'max_age',
        'hospital_procedure_value',
        'outpatient_procedure_value',
        'profissional_procedure_value',
    ];

    public function group(): BelongsTo
    {
        return $this->belongsTo(Group::class);
    }

    public function subgroup(): BelongsTo
    {
        return $this->belongsTo(Subgroup::class);
    }

    public function organization_form(): BelongsTo
    {
        return $this->belongsTo(OrganizationForm::class);
    }

    public function financing(): BelongsTo
    {
        return $this->belongsTo(Financing::class);
    }

    public function modalities(): BelongsToMany
    {
        return $this->belongsToMany(Modality::class, 'procedure_modalities');
    }

}
