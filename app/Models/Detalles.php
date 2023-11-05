<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalles extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'producto_id',
        'cantidad',
        'subtotal',
    ];

    public function order(){
        return $this->belongsTo(Orden::class);
    }

    public function producto(){
        return $this->belongsTo(Producto::class);
    }
    
}
