{{-- <div>
    <input type="text" wire:model.live="search" placeholder="Buscar usuarios..." class="form-control"> --}}

<div class="flex flex-wrap items-center space-x-4 mt-4">

    
    <div>
        <!-- Campo Origen -->
        <label for="origen" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Origen</label>
        <input type="text" id="origen" name="origen" placeholder="Ciudad de origen" wire:model.live="searchOrigen"
            class="mt-1 block w-40 p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
    
        @if (strlen($searchOrigen) >= 2)
            <ul class="overflow-y-auto max-h-32 mt-2 bg-white rounded-md shadow-lg">
                @forelse ($searchFlyOrigen as $destination)
                <li wire:key="{{ $destination->id }}" class="py-2.5 px-5 text-sm font-medium text-gray-900 hover:bg-gray-100 rounded-lg cursor-pointer" wire:click="$set('searchOrigen', '{{ $destination->name }}')">{{ $destination->name }}</li>
                    
                @empty
                    <li>No se encontraron resultados.</li>
                @endforelse
            </ul>
            
        @endif
    </div>
    
    <!-- Campo Destino -->
    <div>
        <label for="destino" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Destino</label>
        <input type="text" id="destino" name="destino" placeholder="Ciudad de destino" wire:model.live="searchDestino"
            class="mt-1 block w-40 p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
    
        @if (strlen($searchDestino) >= 2)
            <ul class="overflow-y-auto max-h-32 mt-2 bg-white rounded-md shadow-lg">
                @forelse ($searchFlyDestino as $destination)
                    <li wire:key="{{ $destination->id }}" class="py-2.5 px-5 text-sm font-medium text-gray-900 hover:bg-gray-100 rounded-lg cursor-pointer" wire:click="$set('searchOrigen', '{{ $destination->name }}')">{{ $destination->name }}</li>
                @empty
                    <li>No se encontraron resultados.</li>
                @endforelse
            </ul>
        @endif
    </div>
    
    

    <!-- Fecha Ida -->
    <div>
        <label for="fecha-ida" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Ida</label>
        <input type="date" id="fecha-ida" name="fecha-ida"
            class="mt-1 block w-40 p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
    </div>

    <!-- Fecha Vuelta -->
    <div>
        <label for="fecha-vuelta" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Vuelta</label>
        <input type="date" id="fecha-vuelta" name="fecha-vuelta"
            class="mt-1 block w-40 p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
    </div>

    <!-- Botón de búsqueda -->
    <div class="mt-4 sm:mt-0">
        <button type="submit"
            class="px-6 py-2 text-white bg-pink-600 hover:bg-pink-700 rounded-md shadow-md focus:ring-2 focus:ring-pink-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800">
            Buscar
        </button>
    </div>
</div>




