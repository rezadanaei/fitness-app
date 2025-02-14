<?php

namespace App\Http\Controllers;

use App\Models\UserExercise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserExerciseController extends Controller
{
    public function store(Request $request)
{
    $exercises = $request->input('exercises'); 

    $exercisesJson = json_encode($exercises);

    UserExercise::create([
        'user_id' => auth()->id(), 
        'exercises' => $exercisesJson, 
    ]);

}
    
    public function index()
    {
        $user = Auth::user(); 
        $userExercise = UserExercise::where('user_id', $user->id)->first();

        if (!$userExercise) {
            $userExercise = UserExercise::create([
                'user_id' => $user->id,
                'exercises' => json_encode([
                    'exercise1' => false,
                    'exercise2' => false,
                    'exercise3' => false,
                ]),
            ]);
        }

        return view('profile.exercises', compact('userExercise'));
    }

    public function update(Request $request)
    {
        $user = auth()->user();
        $exerciseId = $request->input('exercise_id');
        $completed = $request->input('completed');

        $userExercise = UserExercise::firstOrCreate(
            ['user_id' => $user->id],
            ['exercises' => []]
        );

        $exercises = $userExercise->exercises;

        $exercises[$exerciseId] = $completed;

        $userExercise->update([
            'exercises' => $exercises
        ]);

        return response()->json(['message' => 'تمرین به‌روزرسانی شد', 'exercises' => $exercises]);
    }
}
