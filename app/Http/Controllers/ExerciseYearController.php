<?php

namespace App\Http\Controllers;

use App\Models\ExerciseYear;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class ExerciseYearController extends Controller
{
    use AuthorizesRequests;

    public function getExerciseYears()
    {
        $this->authorize('sisppi/ano de exercício listar');
        $exercise_years = ExerciseYear::all();
        return response()->json($exercise_years, 200);
    }

    public function createExerciseYear(Request $request)
    {
        $this->authorize('sisppi/ano de exercício criar');
        ExerciseYear::create([
            'name' => $request->name,
        ]);
    }
}
