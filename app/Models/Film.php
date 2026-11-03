<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $table = 'film';
    protected $primaryKey = 'fkod';
    public $timestamps = false;

    protected $fillable = ['filmcim', 'szines', 'szinkron', 'szarmazas', 'mufaj', 'hossz'];

    public function mozik()
    {
        return $this->belongsToMany(Mozi::class, 'hely', 'fkod', 'moziazon');
    }
}