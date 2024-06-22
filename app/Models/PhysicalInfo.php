<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhysicalInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'height', 'weight', 'age',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
