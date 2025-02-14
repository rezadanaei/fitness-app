<?php

use App\Http\Controllers\Admin\TrainingProgramController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\UserExerciseController;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
});
Route::get("/coach1" , function (){
    return view('profile-details.coach1');
}
);
Route::get("/coach2" , function (){
    return view('profile-details.coach2');
}
);
Route::get("/coach3" , function (){
    return view('profile-details.coach3');
}
);
Route::get("/all-trainers" , function (){
    return view('profile-list.index');
}
);
Route::get('videos', [VideoController::class, 'index'])->name('videos.index');

Route::get('videos/upload', [VideoController::class, 'create'])->name('videos.create');  
Route::post('videos/upload', [VideoController::class, 'store'])->name('videos.store');    


Auth::routes();

Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show')->middleware('auth');
Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit')->middleware('auth');
Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update')->middleware('auth');
Route::middleware('auth')->group(function () {
    Route::get('profile/exercises', [UserExerciseController::class, 'index'])->name('profile.show');
    Route::post('profile/exercises', [UserExerciseController::class, 'update']);
    Route::post('/update-exercise', [UserExerciseController::class, 'update'])->name('exercise.update');
}); 

Route::get('/articles/{article}/{id}',function ($article , $id){
    return $article .'-------'.$id;
}
);

Route::prefix('admin')->group(function (){

    Route::get('/',function (){
        return 'admin';
    }
    );
    Route::get('/id',function (){
        return 'admin id';
    }
    );
    Route::get('/comment',function (){
        return 'admin comment';
    }
    );
    Route::get('/post',function (){
        return 'admin post';
    }
    );
});
