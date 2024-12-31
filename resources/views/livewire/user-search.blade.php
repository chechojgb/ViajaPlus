<div>
    <input type="text" wire:model.live="search" placeholder="Buscar usuarios..." class="form-control">

    <!-- Solo mostrar los resultados si la longitud de la búsqueda es mayor o igual a 3 -->
    @if (strlen($search) >= 3)
        <ul>
            @forelse ($users as $user)
                <li wire:key="{{ $user->id }}">{{ $user->name }}</li>
            @empty
                <li>No se encontraron resultados.</li>
            @endforelse
        </ul>
    @endif
</div>
