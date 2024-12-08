<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Equip extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'estadi_id', 'titols', 'escut'];
    
    public function estadi()
    {
        return $this->belongsTo(Estadi::class,'equip_id');
    }
}
