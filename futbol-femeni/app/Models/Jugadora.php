<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Jugadora extends Model
{
    use HasFactory;
    protected $table = 'jugadores';
    protected $fillable = ['nom', 'equip_id', 'posicio','foto'];
    public function equip(){
        return $this->belongsTo(Equip::class, 'equip_id');
    }
}

