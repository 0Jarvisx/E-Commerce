<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Orden;
use App\Models\Estado;
use App\Models\Roles;
use App\Models\Detalles;

class DashboardController extends Controller
{
    public function index(User $user)
    {
        $categorias = Categoria::all();
        $productos = Producto::all();
        $usuarios = User::all();
        $estados = Estado::all();
        $roles = Roles::all();
        $ordens = Orden::all();
        $detalles = Detalles::all();



        return view('Dashboard', [
            'productos' => $productos,
            'categorias' => $categorias,
            'usuarios' => $usuarios,
            'estados' => $estados,
            'roles' => $roles,
            'ordens' => $ordens,
            'detalles' => $detalles,
            'user' => $user
        ]);
    }
}
