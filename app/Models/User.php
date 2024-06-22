<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name', 'last_name', 'email', 'password', 'role',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function physicalInfo()
    {
        return $this->hasOne(PhysicalInfo::class);
    }

    public function trainingProgramsAsCoach()
    {
        return $this->hasMany(TrainingProgram::class, 'coach_id');
    }

    public function trainingProgramsAsStudent()
    {
        return $this->hasMany(TrainingProgram::class, 'student_id');
    }
}
