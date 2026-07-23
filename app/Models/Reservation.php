<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    //
    protected $fillable = [
        'user_id',
        'event_id'
    ];
    public function userReservation(){
        return $this->belongsTo(User::class);
    }
    public function event(){
                return $this->belongsTo(Event::class);

    }
    
}
