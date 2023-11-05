<?php
/* 
Crear un nuevo Controller
sail artisan make:controller Auth\\RegisterController */

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    //Metodo Index
    public function index()
    {
        return view('auth.register');
    }


    public function store(Request $request)
    {
        
        $request->request->add([
            'name' => $request->name
        ]);
        
        //Validaciones antes de guardar
        
        $this->validate($request, [
            'name' => ['required', 'min:2', 'max:30'],
            'apellido' => ['required', 'min:2', 'max:30'],
            'role_id' => ['required', 'integer'], 
            'estado_id' => ['required', 'integer'], 
            // 'telefono' => ['required', 'phone:GT', 'unique:users', 'max:8'], 
            'email' => ['required', 'email', 'unique:users', 'max:100'],
            'password' => ['required', 'confirmed', 'min:6']
        ]);

        User::create([
            'name' => $request->name,
            'apellido' => $request->apellido,
            'estado_id' => $request->estado_id,
            'role_id' => $request->role_id,
            // 'telefono' => $request->telefono, 
            'email' => strtolower($request->email),
            'password' => Hash::make($request->password)
        ]);

        //Opcion 1 para autenticar el usuario
        auth()->attempt([
            'email' => $request->email,
            'password' => $request->password
        ]);

        //Opcion 2 para autenticar el usuario

        //        auth()->attempt($request->only('email','password'));


        return redirect()->route('registrado', auth()->user()->name); 
    }
}
