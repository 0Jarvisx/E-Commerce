<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ordens extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nit',
        'address',
        'estado_id',
        'total'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function estado(){
        return $this->belongsTo(Estado::class);
    }
    
    public function detalle(){
        return $this->hasMany(Detalles::class);
    }
}
