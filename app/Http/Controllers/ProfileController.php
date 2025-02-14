<?php

namespace App\Http\Controllers;

use App\Models\TrainingProgram;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    // public function show()
    // {
    //     $user = Auth::user();
    //     $trainingPrograms = TrainingProgram::where('student_id', $user->id)->orderBy('date', 'desc')->get();
    //     return view('profile.show', compact('user', 'trainingPrograms'));
    // }
    public function show()
{
    $user = Auth::user();

    $trainingPrograms = TrainingProgram::where('student_id', $user->id)->orderBy('date', 'desc')->get();

    $userExercises = \App\Models\UserExercise::where('user_id', $user->id)->first();

    $exercisesStatus = $userExercises?->exercises ?? [];


    return view('profile.show', compact('user', 'trainingPrograms', 'exercisesStatus'));
}


    public function edit()
    {
        $user = Auth::user();
        return view('profile.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        $user->update($request->all());
        return redirect()->route('profile.show')->with('success', 'Profile updated successfully');
    }
}
