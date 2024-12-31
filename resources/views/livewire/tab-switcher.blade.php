
    <div class="p-6 bg-white dark:bg-gray-800 shadow-md rounded-lg max-w-4xl mx-auto mt-10 mb-16">
        <div class="flex items-center justify-between border-b pb-4 mb-4">
            <div class="flex space-x-4">
                <button wire:click="changeTab('vuelos')" 
                        class="text-sm font-medium {{ $activeTab == 'vuelos' ? 'text-blue-600 border-b-2 border-blue-600' : 'text-gray-500 hover:text-blue-600' }}">
                    Vuelos
                </button>
                <button wire:click="changeTab('paquetes')" 
                        class="text-sm font-medium {{ $activeTab == 'paquetes' ? 'text-blue-600 border-b-2 border-blue-600' : 'text-gray-500 hover:text-blue-600' }}">
                    Paquetes
                </button>
                <button wire:click="changeTab('alojamientos')" 
                        class="text-sm font-medium {{ $activeTab == 'alojamientos' ? 'text-blue-600 border-b-2 border-blue-600' : 'text-gray-500 hover:text-blue-600' }}">
                    Alojamientos
                </button>
                <button wire:click="changeTab('carros')" 
                        class="text-sm font-medium {{ $activeTab == 'carros' ? 'text-blue-600 border-b-2 border-blue-600' : 'text-gray-500 hover:text-blue-600' }}">
                    Carros
                </button>
                <button wire:click="changeTab('asistencia')" 
                        class="text-sm font-medium {{ $activeTab == 'asistencia' ? 'text-blue-600 border-b-2 border-blue-600' : 'text-gray-500 hover:text-blue-600' }}">
                    Asistencia en viaje
                </button>
                <button wire:click="changeTab('upgrade')" 
                        class="text-sm font-medium {{ $activeTab == 'upgrade' ? 'text-blue-600 border-b-2 border-blue-600' : 'text-gray-500 hover:text-blue-600' }}">
                    Upgrade
                </button>
            </div>
        </div>

        <div>
            <!-- Mostrar el contenido dependiendo de la pestaña activa -->
            <div class="tab-content">
                @if ($activeTab == 'vuelos')
                    <x-searching.fly />
                @elseif ($activeTab == 'paquetes')
                    <x-searching.packages />
                @elseif ($activeTab == 'alojamientos')
                    <!-- Aquí va el componente de alojamientos -->
                @elseif ($activeTab == 'carros')
                    <!-- Aquí va el componente de carros -->
                @elseif ($activeTab == 'asistencia')
                    <!-- Aquí va el componente de asistencia -->
                @elseif ($activeTab == 'upgrade')
                    <!-- Aquí va el componente de upgrade -->
                @endif
            </div>
        </div>
    </div>

