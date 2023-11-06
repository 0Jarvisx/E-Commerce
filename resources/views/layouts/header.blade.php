<header class="p-5 border-b bg-gray-200 shadow">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-3xl font-black">
            <a @auth href="{{ route('registrado', ['user' => $user])}}" @endauth  @guest href="{{route('welcome')}}" @endguest class="text-3xl font-black">Max</a>
        </h1>

        @auth
            <nav class="flex gap-1 items-center">
                @if ($user->role_id === 2)
                    
                <a class="flex flex-col items-center mx-2" href="">
                    <img src="{{ asset('img/carrito-de-compras.svg') }}" alt="Carrito" class="w-6 h-6">
                    <span class="font-medium uppercase text-gray-600">Carrito</span>
                </a>
                @else
                <a class="flex flex-col items-center mx-2" href="{{route('dashboard', ['user' => $user])}}">
                    <img src="{{ asset('img/hogar.svg') }}" alt="Login" class="w-6 h-6">
                    <span class="font-medium uppercase text-gray-600">Dashboard</span>
                </a>
                @endif
                {{-- Arreglar el diseño  --}}
                <form method="POST" action="{{ route('logout') }}">
                    @csrf {{-- token de autenticacion --}}
                    <button class="flex flex-col items-center mx-2" type="submit">

                        <img src="{{ asset('img/salida.svg') }}" alt="Login" class="w-6 h-6">
                        <span class="font-medium uppercase text-gray-600">Cerrar Sesión</span>

                    </button>
                </form>
            </nav>
        @endauth
        @guest
            <nav class="flex gap-1 items-center">
                <a class="flex flex-col items-center mx-2" href="{{ route('login') }}">
                    <img src="{{ asset('img/usuario.svg') }}" alt="Login" class="w-6 h-6">
                    <span class="font-medium uppercase text-gray-600">Login</span>
                </a>
                <a class="flex flex-col items-center mx-2" href="{{ route('register') }}">
                    <img src="{{ asset('img/agregar-usuario.svg') }}" alt="Nueva Cuenta" class="w-6 h-6">
                    <span class="font-medium uppercase text-gray-600">Registrarse</span>
                </a>
            </nav>
        @endguest



    </div>
</header>
