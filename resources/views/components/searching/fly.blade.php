<form class="space-y-4">
    <div class="flex flex-wrap items-center space-x-4">
      <!-- Tipo de viaje -->
      <div>
        <label for="tipo-viaje" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Tipo de viaje</label>
        <select 
          id="tipo-viaje" 
          name="tipo-viaje" 
          class="mt-1 block w-40 p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
          <option>Ida y Vuelta</option>
          <option>Solo Ida</option>
        </select>
      </div>

      <!-- Clase de cabina -->
      <div>
        <label for="clase" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Clase</label>
        <select 
          id="clase" 
          name="clase" 
          class="mt-1 block w-40 p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
          <option>Economy</option>
          <option>Business</option>
          <option>First Class</option>
        </select>
      </div>

      <!-- Número de pasajeros -->
      <div>
        <label for="pasajeros" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Pasajeros</label>
        <select 
          id="pasajeros" 
          name="pasajeros" 
          class="mt-1 block w-40 p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
          <option>1 pasajero</option>
          <option>2 pasajeros</option>
          <option>3 pasajeros</option>
        </select>
      </div>

      <!-- Usar millas -->
      <div class="flex items-center space-x-2 mt-4 sm:mt-0">
        <input 
          type="checkbox" 
          id="usar-millas" 
          name="usar-millas" 
          class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
        <label for="usar-millas" class="text-sm font-medium text-gray-700 dark:text-gray-300">Usa tus millas + dinero</label>
      </div>
    </div>

    @livewire('search-fly')
    
  </form>