<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getInfo()
    {
        return view('info');
    }
    
    public function updatePhysicalInfo(Request $request, $id)
    {
        $request->validate([
            'height' => 'required|numeric',
            'weight' => 'required|numeric',
            'age' => 'required|integer',
        ]);

        $user = User::findOrFail($id);
        $user->physicalInfo()->updateOrCreate(
            ['user_id' => $user->id],
            $request->only(['height', 'weight', 'age'])
        );

        return response()->json($user->physicalInfo, 200);
    }
}
