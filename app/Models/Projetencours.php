<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projetencours extends Model
{
    use HasFactory;

    protected $fillable = [
        'libelle',
        'description',
        'datedebut',
        'datefin',
    ];
<<<<<<< HEAD

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function projetencours()
    {
        return $this->hasMany(Projetencours::class, 'user_id');
    }
=======
>>>>>>> 1a44ab56fe4a021dd1b0a2706e2d4a497b9f7ec4
}
