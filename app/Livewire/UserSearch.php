<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\Attributes\Url;

class UserSearch extends Component
{
    public $search = '';
 
    public function render()
    {
        // Realiza la búsqueda solo si la longitud de la búsqueda es mayor o igual a 3
        $users = strlen($this->search) >= 3 
                ? User::search($this->search)->get() 
                : [];

        return view('livewire.user-search', compact('users'));
    }
}
