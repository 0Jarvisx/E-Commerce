@extends('layouts.app')
{{-- A esta vista le falta la validacion de datos (@error @enderror)  es decir la validacion de datos --}}
    @section('contenido')
    <div class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
        <div class="relative py-3 sm:max-w-xl sm:mx-auto">
          <div
            class="absolute inset-0 bg-[radial-gradient(ellipse_at_top_left,_var(--tw-gradient-stops))] from-red-200 to-red-600 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
          </div>
          <div class="relative px-4 py-10 bg-gray-200 shadow-lg sm:rounded-3xl sm:p-20">
            <form action="{{-- Agregar route --}}" method="post">
                
                <div class="max-w-md mx-auto">
                  <div>
                    <h1 class="text-2xl font-semibold">Login</h1>
                  </div>
                  <div class="divide-y divide-gray-200">
                    <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                      <div class="relative">
                        <input autocomplete="off" id="email" name="email" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600 bg-transparent" placeholder="Email" />
                        <label for="email" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Email </label>
                      </div>

                      <div class="relative">
                        <input autocomplete="off" id="password" name="password" type="password" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600 bg-transparent" placeholder="Password" />
                        <label for="password" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Password</label>
                      </div>
                      
                      <div class="relative">
                        <input type="submit" value="Iniciar Sesion"
                            class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
        
                      </div>
                    </div>
                  </div>
                </div>
          
            </form>
            <div class="w-full flex justify-center">
              <span>
                <h1 class="underline text-blue-400 text-xl hover:cursor-pointer hover:text-blue-600">
                    Registrarse
                </h1>
              </span>
            </div>
      
          </div>
        </div>
      </div>
    @endsection

