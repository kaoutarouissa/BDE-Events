<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    protected $fillable = [
        'title',
        'description',
        'date',
        'heure',
        'lieu',
        'prix',
        'nombre_places'
    ];
    public function user(){
        return $this->hasOne(User::class);
    }
    public function reservation(){
        return $this->hasMany(Reservation::class);
    }
}
