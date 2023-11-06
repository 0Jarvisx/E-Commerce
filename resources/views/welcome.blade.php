@extends('layouts.app')

@section('contenido')
    @extends('layouts.header')
    @foreach ($categorias as $categoria)
        <div>
            <h1>
                {{$categoria->name}}
            </h1>
        </div>
    @endforeach
@endsection