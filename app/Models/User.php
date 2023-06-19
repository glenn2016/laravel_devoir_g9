<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'firstname',
        'email',
        'role',
        'password',
        'google_id',
        'google_token',
    ];

    public function projets()
    {
        return $this->hasMany(Projet::class);
    }

<<<<<<< HEAD
    public function projetencours(){
        return $this->hasMany(Projetencours::class);
    }

    public function projets_termines(){
        return $this->hasMany(Projets_termines::class);
    }

=======
>>>>>>> 1a44ab56fe4a021dd1b0a2706e2d4a497b9f7ec4
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
    ];

    protected $key = 'id';

    
    public function trajets()
    {
        return $this->hasMany(Trajet::class);
    }
}
