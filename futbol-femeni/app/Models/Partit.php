<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partit extends Model
{
    use HasFactory;
    protected $table ='partits';
    protected $fillable = ['local', 'visitant', 'data', 'resultat'];

    public function equip_local(){
        return $this->belongsTo(Equip::class, 'equip_local');
    }

    public function equip_visitant(){
        return $this->belongsTo(Equip::class, 'equip_visitant');
    }
}

