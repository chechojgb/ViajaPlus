<div class="p-6 bg-white dark:bg-gray-800 shadow-md rounded-lg max-w-4xl mx-auto mt-10 mb-16">
    <div class="flex items-center justify-between border-b pb-4 mb-4">
        <div class="flex space-x-4">
            <button wire:click="changeTab('flights')" 
                    class="text-sm font-medium {{ $activeTab == 'flights' ? 'text-blue-600 border-b-2 border-blue-600' : 'text-gray-500 hover:text-blue-600' }}">
                Flights
            </button>
            <button wire:click="changeTab('packages')" 
                    class="text-sm font-medium {{ $activeTab == 'packages' ? 'text-blue-600 border-b-2 border-blue-600' : 'text-gray-500 hover:text-blue-600' }}">
                Packages
            </button>
            <button wire:click="changeTab('accommodations')" 
                    class="text-sm font-medium {{ $activeTab == 'accommodations' ? 'text-blue-600 border-b-2 border-blue-600' : 'text-gray-500 hover:text-blue-600' }}">
                Accommodations
            </button>
            <button wire:click="changeTab('cars')" 
                    class="text-sm font-medium {{ $activeTab == 'cars' ? 'text-blue-600 border-b-2 border-blue-600' : 'text-gray-500 hover:text-blue-600' }}">
                Cars
            </button>
            <button wire:click="changeTab('assistance')" 
                    class="text-sm font-medium {{ $activeTab == 'assistance' ? 'text-blue-600 border-b-2 border-blue-600' : 'text-gray-500 hover:text-blue-600' }}">
                Travel Assistance
            </button>
            <button wire:click="changeTab('upgrade')" 
                    class="text-sm font-medium {{ $activeTab == 'upgrade' ? 'text-blue-600 border-b-2 border-blue-600' : 'text-gray-500 hover:text-blue-600' }}">
                Upgrade
            </button>
        </div>
    </div>

    <div>
        <!-- Show content depending on the active tab -->
        <div class="tab-content">
            @if ($activeTab == 'flights')
                <x-searching.fly />
            @elseif ($activeTab == 'packages')
                <x-searching.packages />
            @elseif ($activeTab == 'accommodations')
                <!-- Accommodation component goes here -->
            @elseif ($activeTab == 'cars')
                <!-- Cars component goes here -->
            @elseif ($activeTab == 'assistance')
                <!-- Assistance component goes here -->
            @elseif ($activeTab == 'upgrade')
                <!-- Upgrade component goes here -->
            @endif
        </div>
    </div>
</div>
