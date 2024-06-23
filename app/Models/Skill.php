<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Skill extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function User()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
