<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'belong'
    ];

    public function producto(){
        return $this->hasMany(Producto::class);
    }
    public function user(){
        return $this->hasMany(User::class);
    }

    public function order(){
         return $this->hasMany(Orden::class);
    }
    
}
