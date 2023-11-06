@extends('layouts.app')
{{-- A esta vista le falta la validacion de datos (@error @enderror)  es decir la validacion de datos --}}
@section('contenido')
    <div class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
        <div class="relative py-3 sm:max-w-xl sm:mx-auto">
            <div
                class="absolute inset-0 bg-[radial-gradient(ellipse_at_top_left,_var(--tw-gradient-stops))] from-red-200 to-red-600 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
            </div>
            <div class="relative px-4 py-10 bg-gray-200 shadow-lg sm:rounded-3xl sm:p-20">


                <div class="max-w-md mx-auto">
                    <div>
                        <h1 class="text-2xl font-semibold">Registrarse</h1>
                    </div>
                    <div class="divide-y divide-gray-200">
                        <div class="pt-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="relative p-2">
                                    <input autocomplete="off" id="email" name="email" type="text"
                                        class="peer placeholder-transparent h-10 w-full border-b-2  text-gray-900 focus:outline-none focus:borer-rose-600 bg-transparent  @error('email') border-red-500" @enderror() value="{{ old('email') }}"
                                        placeholder="Email" />
                                    <label for="email"
                                        class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Email
                                    </label>
                                    @error('email')
                                        <p class=" bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                                            {{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="relative p-2">
                                    <input autocomplete="off" id="name" name="name" type="text"
                                        class="peer placeholder-transparent h-10 w-full border-b-2  text-gray-900 focus:outline-none focus:borer-rose-600 bg-transparent  @error('name') border-red-500" @enderror() value="{{ old('name') }}"
                                        placeholder="Nombre" />
                                    <label for="name"
                                        class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Nombre
                                    </label>
                                    @error('name')
                                        <p class=" bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                                            {{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="relative p-2">
                                    <input autocomplete="off" id="apellido" name="apellido" type="text"
                                        class="peer placeholder-transparent h-10 w-full border-b-2  text-gray-900 focus:outline-none focus:borer-rose-600 bg-transparent  @error('apellido') border-red-500" @enderror() value="{{ old('apellido') }}"
                                        placeholder="Email" />
                                    <label for="apellido"
                                        class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Apellido
                                    </label>
                                    @error('apellido')
                                        <p class=" bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                                            Route::get('/Dashboard/{user:name}', [DashboardController::class, 'index'])->name('dashboard');                            {{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="relative hidden">
                                    <input autocomplete="off" id="role_id" name="role_id" type="number"
                                        class="peer placeholder-transparent h-10 w-full border-b-2  text-gray-900 focus:outline-none focus:borer-rose-600 bg-transparent"
                                        placeholder="Rol" value="2" />
                                    <label for="role_id"
                                        class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Rol
                                    </label>
                                </div>

                                <div class="relative hidden">
                                    <input autocomplete="off" id="estado_id" name="estado_id" type="number"
                                        class="peer placeholder-transparent h-10 w-full border-b-2  text-gray-900 focus:outline-none focus:borer-rose-600 bg-transparent"
                                        placeholder="Rol" value="1" />
                                    <label for="estado_id"
                                        class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Rol
                                    </label>
                                </div>

                                <div class="relative p-2">
                                    <input autocomplete="off" id="password" name="password" type="password"
                                        class="peer placeholder-transparent h-10 w-full border-b-2  text-gray-900 focus:outline-none focus:borer-rose-600 bg-transparent @error('password') border-red-500" @enderror() value="{{ old('password') }}"
                                        placeholder="Password" />
                                    <label for="password"
                                        class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Password</label>
                                    @error('password')
                                        <p class=" bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                                            {{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="relative p-2">
                                    <input autocomplete="off" id="password_confirmation" name="password_confirmation"
                                        type="password"
                                        class="peer placeholder-transparent h-10 w-full border-b-2  text-gray-900 focus:outline-none focus:borer-rose-600 bg-transparent"
                                        placeholder="Confirmar Password" />
                                    <label for="password_confirmation"
                                        class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Confirmar
                                        Password</label>
                                </div>


                                <input type="submit" value="Crear Cuenta"
                                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg mt-2">


                            </form>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
