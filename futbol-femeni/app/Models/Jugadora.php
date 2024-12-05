<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jugadora extends Model
{
    protected $table = 'jugadores';
    protected $fillable = ['nom', 'equip', 'posicio'];
    public function equip(){
        return $this->belongsTo(Equip::class);
    }
}

