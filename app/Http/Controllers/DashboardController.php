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

    public function detailsUser(User $user)
    {
        $usuarios = User::with('role', 'estado')->get();
        $roles = Roles::all();
        $estados = Estado::all();

        return view('admin.adminUser', [
            'user' => $user,
            'usuarios' => $usuarios,
            'roles' => $roles,
            'estados' => $estados
        ]);
    }

    public function detailsProducto(User $user)
    {
        $productos = Producto::all();
        $categorias = Categoria::all();
        $estados = Estado::all();

        return view('admin.adminProducto', [
            'user' => $user,
            'productos' => $productos,
            'categorias' => $categorias,
            'estados' => $estados
        ]);
    }

    public function detailsOrden(User $user)
    {
        $productos = Producto::all();
        $ordens = Orden::with('user','estado')->get();
        $estados = Estado::all();

        return view('admin.adminOrden', [
            'user' => $user,
            'productos' => $productos,
            'ordens' => $ordens,
            'estados' => $estados
        ]);
    }

    public function detailsCategoria(User $user)
    {
        $categorias = Producto::all();

        return view('admin.adminCategoria', [
            'user' => $user,
            'categorias' => $categorias,
        ]);
    }
}
