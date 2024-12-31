<?php

namespace App\Livewire;

use Livewire\Component;

class TabSwitcher extends Component
{
    public $activeTab = 'vuelos'; // Pestaña por defecto

    // Método para cambiar la pestaña activa
    public function changeTab($tab)
    {
        $this->activeTab = $tab;
    }

    public function render()
    {
        return view('livewire.tab-switcher'); // Asegúrate de que apunte a la vista correcta
    }
}
