<?php

namespace App\Http\Controllers;

use App\Models\TrainingProgram;
use Illuminate\Http\Request;

class TrainingProgramController extends Controller
{
    public function createProgram(Request $request)
    {
        $request->validate([
            'coach_id' => 'required|exists:users,id',
            'student_id' => 'required|exists:users,id',
            'program_details' => 'required',
            'date' => 'required|date',
        ]);

        $program = TrainingProgram::create($request->all());

        return response()->json($program, 201);
    }

    public function getProgramForStudent($student_id)
    {
        $programs = TrainingProgram::where('student_id', $student_id)->get();
        return response()->json($programs, 200);
    }
}
