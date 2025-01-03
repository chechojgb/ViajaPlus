<?php
namespace App\Livewire;

use Livewire\Attributes\Url;
use App\Models\City;
use App\Models\Country;
use Livewire\Component;

class SearchFly extends Component
{
    #[Url(history: true)]
    public $searchOrigen = '';
    #[Url(history: true)]
    public $searchDestino = ''; 
    public $results = [];
    public $selectedOrigen;
    public $errorMessage;
    public $showDropdownOrigen = false;

    public function updatedSearchOrigen($value)
    {
        $this->showDropdownOrigen = strlen($value) >= 2;
        $this->search();
    }

    public function search()
    {
        $this->results = [];
        $this->errorMessage = null;

        if (strlen($this->searchOrigen) >= 2) {
            $country = Country::where('name', 'like', '%' . $this->searchOrigen . '%')->first();
            if ($country) {
                $this->results = $country->cities; 
            } else {
                $city = City::where('name', 'like', '%' . $this->searchOrigen . '%')->first();
                if ($city) {
                    $this->results = collect([$city]); 
                }
            }
        }

        if (empty($this->results)) {
            $this->errorMessage = 'No se encontraron resultados.';
        }
    }

    public function selectOrigen($value)
    {
        $this->searchOrigen = $value;
        $this->showDropdownOrigen = false;
        
        $this->emit('refreshInput', $value);

    }

    public function render()
    {
        return view('livewire.search-fly');
    }
}