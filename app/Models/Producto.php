<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'categoria_id',
        'name',
        'descripcion',
        'imagen',
        'precio',
        'stock',
        'estado_id'
    ];

    public function detalle(){
        return $this->belongsTo(Detalles::class);
    }

    public function estado(){
        return $this->belongsTo(Estado::class);
    }
    
    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }
}
