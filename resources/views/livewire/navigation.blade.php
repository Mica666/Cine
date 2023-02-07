<div>
<nav class="bg-gray-800 z-50" x-data="{open:false}">
    <div class=" mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
      <div class="relative flex h-16 items-center justify-between">
        <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">

          <!-- Botones del menu mobil-->
          <button x-on:click="open=true" type="button" class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
            <span class="sr-only"></span>
            <!--
              Icono cuando el menú está cerrado.

              Menú abierto: "oculto", Menú cerrado: "bloquear"
            -->
            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <!--
            Icono cuando el menú está abierto.

              Menú abierto: "bloquear", Menú cerrado: "oculto"
            -->
            <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      
      <!-- logo y nombre-->
      <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
        <a href="/" class="flex flex-shrink-0 items-center">
          <img class="block h-8 w-auto lg:hidden" src="https://cdn-icons-png.flaticon.com/128/705/705062.png" alt="Your Company">
          <h1 class="text text-2xl text-white leading-7 font-bold">Tickets Universe</h1>
        </a>

          <!-- menu -->
          <div class="hidden sm:ml-6 sm:block">
            <div class="flex 2xl space-x-4">
              <a href="/" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Inicio</a>

              <a href="/Cartelera" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm   font-medium">Carteleras</a>

              <a href="/Horario" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Horarios</a>

              <a href="/Beneficio" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Beneficios</a>

              <a href="/Combo" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Combos</a>

              <a href="/Comentario" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Contactanos</a>

             

            </div>
          </div>
        </div>

    @auth
            <!-- Profil-->
          <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
            <div class="relative ml-3" x-data="{ open: false }">
              <div>
                <button x-on:click="open = true " type="button" class="flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                  <span class="sr-only"></span>

                  @if (Auth::user()->profile_photo_path)
                <img class="h-10 w-10 rounded-full" src=" /storage/{{Auth::user()->profile_photo_path }}"  alt="">
                   
                @else
                  <img class="h-8 w-8 rounded-full" src=" {{auth()->user()->profile_photo_url }}" alt="">
                @endif

                </button>
              </div>

              <!--
              Menú desplegable, mostrar/ocultar según el estado del menú.
              -->
              <div x-show="open" x-on:click.away="open=false" class="absolute right-0 z-50 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                <a href="{{ route('profile.show') }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Mi perfil</a>
                @can('admin.Beneficio.index')
                <a href="{{ route('admin.home') }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Administrador</a>
                @endcan
                <form method="POST" action="{{ route('logout') }}" x-data>
                @csrf
                <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2"  @click.prevent="$root.submit();">Cerrar sesion</a> 
                </form>
              </div>
            </div>
          </div>
        @else
        <a href="{{ route('login') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Entrar</a>
        
        <a href="{{ route('register') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Registrarse</a>

          @endauth
        </div>
      </div>

      <!-- Menu desplegable-->
      <div class="sm:hidden" x-show="open" x-on:click.away="open=false" id="mobile-menu">
        <div class="space-y-1 px-2 pt-2 pb-3">

          <a  href="/" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Inicio</a>

          <a href="/Cartelera" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Peliculas</a>

          <a href="/Horario" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Horarios</a>

          <a href="/Beneficio" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Beneficios</a>
        
          <a href="/Combo" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Combos</a>
        
          <a href="/Entrada" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Contactanos</a>

        </div>
      </div>
</nav>
</div>
