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
    
    public function render()
    {
        $searchFlyOrigen = collect();  
        $searchFlyDestino = collect(); 

        // Buscar origen (ciudad o país)
        if (strlen($this->searchOrigen) >= 2) {
            $country = Country::where('name', 'like', '%' . $this->searchOrigen . '%')->first();
            if ($country) {
                $searchFlyOrigen = $country->cities; 
            } else {
                $city = City::where('name', 'like', '%' . $this->searchOrigen . '%')->first();
                if ($city) {
                    $searchFlyOrigen = collect([$city]); 
                }
            }
        }

        // Buscar destino (ciudad o país)
        if (strlen($this->searchDestino) >= 2) {
            $country = Country::where('name', 'like', '%' . $this->searchDestino . '%')->first();
            if ($country) {
                $searchFlyDestino = $country->cities; 
            } else {
                $city = City::where('name', 'like', '%' . $this->searchDestino . '%')->first();
                if ($city) {
                    $searchFlyDestino = collect([$city]); 
                }
            }
        }

        return view('livewire.search-fly', compact('searchFlyOrigen', 'searchFlyDestino'));
    }
}
