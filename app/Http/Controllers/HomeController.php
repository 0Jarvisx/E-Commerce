<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Producto;

class HomeController extends Controller
{
    public function index(User $user)
    {
        $categorias = Categoria::all();
        $productos = Producto::all();
        if ($user->name === null) {
            return view('welcome', ['productos' => $productos, 'categorias' => $categorias]);
        } else {
            return view('welcome', ['productos' => $productos, 'categorias' => $categorias, 'user' => $user]);
        }
    }
}
