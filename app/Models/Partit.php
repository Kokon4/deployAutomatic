<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partit extends Model
{
    use HasFactory;
    protected $table ='partits';
    protected $fillable = ['equip_local_id', 'equip_visitant_id', 'data', 'resultat'];

    public function equip_local(){
        return $this->belongsTo(Equip::class, 'equip_local_id');
    }

    public function equip_visitant(){
        return $this->belongsTo(Equip::class, 'equip_visitant_id');
    }
}

