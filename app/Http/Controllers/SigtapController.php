<?php

namespace App\Http\Controllers;

use App\Models\Competence;
use App\Models\Procedure;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class SigtapController extends Controller
{
    use AuthorizesRequests;

    public function getCompetences()
    {
        $this->authorize('sisppi/sigtap listar');
        $competences = Competence::get();
        return response()->json($competences, 200);
    }

    public function getProcedures($competence, $limit)
    {
        $this->authorize('sisppi/sigtap listar');
        $procedures = Procedure::with(
            'group',
            'subgroup',
            'organization_form',
            'financing',
            'modalities',
            )->where('competence_id',$competence)->limit($limit)->get();
        return response()->json($procedures, 200);
    }
}
