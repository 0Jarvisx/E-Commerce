@extends('layouts.app')

@section('contenido')
    @extends('layouts.header')
    <div class="w-full h-[680px] flex items-center justify-center">
        <div class="block w-full overflow-x-auto max-w-xl border">
            <table class="items-center w-full bg-transparent border-collapse">
                <thead>
                    <tr>
                        <th
                            class="px-4 bg-gray-50 text-gray-700 align-middle py-3 text-xs font-semibold text-left uppercase border-l-0 border-r-0 whitespace-nowrap">
                            id</th>
                        <th
                            class="px-4 bg-gray-50 text-gray-700 align-middle py-3 text-xs font-semibold text-left uppercase border-l-0 border-r-0 whitespace-nowrap">
                            name</th>
                        <th
                            class="px-4 bg-gray-50 text-gray-700 align-middle py-3 text-xs font-semibold text-left uppercase border-l-0 border-r-0 whitespace-nowrap">
                            descripcion</th>
                        <th
                            class="px-4 bg-gray-50 text-gray-700 align-middle py-3 text-xs font-semibold text-left uppercase border-l-0 border-r-0 whitespace-nowrap">
                            Actions</th>
                        <th
                            class="px-4 bg-gray-50 text-gray-700 align-middle py-3 text-xs font-semibold text-left uppercase border-l-0 border-r-0 whitespace-nowrap min-w-140-px">
                        </th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @foreach ($categorias as $categoria)
                        <tr class="text-gray-500">
                            <th class="border-t-0 px-4 align-middle text-sm font-normal whitespace-nowrap p-4 text-left">
                                {{ $categoria->id }}</th>
                            <td
                                class="border-t-0 px-4 align-middle text-xs font-medium text-gray-900 whitespace-nowrap p-4">
                                {{ $categoria->name }}</td>
                            <td
                                class="border-t-0 px-4 align-middle text-xs font-medium text-gray-900 whitespace-nowrap p-4">
                                {{ $categoria->descripcion }}</td>
                           
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
