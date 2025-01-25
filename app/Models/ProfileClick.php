<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileClick extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'profile_id'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function profile()
    {
        return $this->belongsTo(User::class, 'profile_id');
    }
}
