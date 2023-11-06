@extends('layouts.app')

@section('contenido')
    @extends('layouts.header')
    <div class="w-full h-[680px] flex items-center justify-center">

        <div class="w-10/12 justify-center">

            <div class="flex flex-row">

                <div
                    class="group relative bg-no-repeat bg-red-200 border hover:bg-red-300 hover:cursor-pointer border-red-300 rounded-xl w-7/12 mr-2 p-6">
                    <a href="">
                        <p class="text-5xl text-indigo-900"><strong> Productos </strong><br>Agregar - Editar - Eliminar</p>
                        <span id="cantidad"
                            class="bg-red-300 text-xl text-white inline-block rounded-full mt-12 px-8 py-2 group-hover:bg-red-200"><strong>
                                Cantidad: {{ $productos->count() }}</strong></span>

                    </a>
                </div>

                <div
                    class="group bg-no-repeat bg-orange-200 border border-orange-300 hover:bg-orange-300 hover:cursor-pointer rounded-xl w-5/12 ml-2 p-6">
                    <a href="">
                        <p class="text-indigo-900"><strong class="text-5xl">Usuarios</strong></p>
                        <p class="mt-4 text-2xl text-indigo-900">Agregar - Editar - Eliminar</p>
                        <span id="cantidad"
                            class="bg-orange-300 text-xl text-white inline-block rounded-full mt-12 px-8 py-2 group-hover:bg-orange-200"><strong>
                                Cantidad: {{ $usuarios->count() }}</strong></span>

                    </a>
                </div>
            </div>
            <div class="flex flex-row h-64 mt-6">
                <div
                    class="group relative bg-no-repeat bg-red-200 border hover:bg-red-300 hover:cursor-pointer border-red-300 rounded-xl px-6 py-4 w-4/12">
                    <a href="">
                        <p class="text-indigo-900"><strong class="text-5xl">Categorias</strong></p>
                        <p class="mt-4 text-2xl text-indigo-900">Agregar - Editar - Eliminar</p>
                        <span id="cantidad"
                            class="bg-red-300 text-xl text-white inline-block rounded-full mt-12 px-8 py-2 group-hover:bg-red-200"><strong>
                                Cantidad: {{ $categorias->count() }}</strong></span>

                    </a>
                </div>
                <div
                    class="group relative bg-no-repeat bg-red-200 border hover:bg-red-300 hover:cursor-pointer border-red-300 rounded-xl mx-6 px-6 py-4 w-4/12">
                    <a href="">
                        <p class="text-indigo-900"><strong class="text-5xl">Ordenes</strong></p>
                        <p class="mt-4 text-2xl text-indigo-900">Agregar - Editar - Eliminar</p>
                        <span id="cantidad"
                            class="bg-red-300 text-xl text-white inline-block rounded-full mt-12 px-8 py-2 group-hover:bg-red-200"><strong>
                                Cantidad: {{ $ordens->count() }}</strong></span>

                    </a>
                </div>
                <div class="bg-red-200 rounded-xl shadow-lg px-6 py-4 w-4/12">
                    c
                </div>
            </div>
        </div>
    </div>
@endsection
