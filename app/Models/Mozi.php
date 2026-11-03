<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mozi extends Model
{
    protected $table = 'mozi';
    protected $primaryKey = 'moziazon';
    public $timestamps = false;

    protected $fillable = ['mozinev', 'irszam', 'cim', 'telefon'];

    public function filmek()
    {
        return $this->belongsToMany(Film::class, 'hely', 'moziazon', 'fkod');
    }
}