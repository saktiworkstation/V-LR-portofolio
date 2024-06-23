<?php

namespace App\Models;

use App\Models\Skill;
use App\Models\Rating;
use App\Models\Project;
use App\Models\Interest;
use App\Models\Education;
use App\Models\Experience;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function Skill()
    {
        return $this->HasMany(Skill::class);
    }

    public function Rating()
    {
        return $this->belongsTo(Rating::class, 'user_id');
    }

    public function Project()
    {
        return $this->belongsTo(Project::class, 'user_id');
    }

    public function Interest()
    {
        return $this->belongsTo(Interest::class, 'user_id');
    }

    public function Experience()
    {
        return $this->belongsTo(Experience::class, 'user_id');
    }

    public function Education()
    {
        return $this->belongsTo(Education::class, 'user_id');
    }

}
