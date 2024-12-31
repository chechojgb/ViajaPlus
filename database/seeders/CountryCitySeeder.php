<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountryCitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $data = [
            [
                'country' => ['name' => 'Colombia', 'iso_code' => 'CO'],
                'cities' => ['Bogotá', 'Medellín', 'Cali', 'Barranquilla', 'Cartagena']
            ],
            [
                'country' => ['name' => 'Estados Unidos', 'iso_code' => 'US'],
                'cities' => ['Nueva York', 'Los Ángeles', 'Chicago', 'Houston', 'Miami']
            ],
            [
                'country' => ['name' => 'Brasil', 'iso_code' => 'BR'],
                'cities' => ['São Paulo', 'Río de Janeiro', 'Brasilia', 'Salvador', 'Fortaleza']
            ],
            [
                'country' => ['name' => 'Canadá', 'iso_code' => 'CA'],
                'cities' => ['Toronto', 'Vancouver', 'Montreal', 'Calgary', 'Ottawa']
            ],
            [
                'country' => ['name' => 'Alemania', 'iso_code' => 'DE'],
                'cities' => ['Berlín', 'Múnich', 'Hamburgo', 'Colonia', 'Frankfurt']
            ],
            [
                'country' => ['name' => 'España', 'iso_code' => 'ES'],
                'cities' => ['Madrid', 'Barcelona', 'Valencia', 'Sevilla', 'Bilbao']
            ],
            [
                'country' => ['name' => 'Argentina', 'iso_code' => 'AR'],
                'cities' => ['Buenos Aires', 'Córdoba', 'Rosario', 'Mendoza', 'La Plata']
            ],
            [
                'country' => ['name' => 'México', 'iso_code' => 'MX'],
                'cities' => ['Ciudad de México', 'Guadalajara', 'Monterrey', 'Cancún', 'Puebla']
            ],
            [
                'country' => ['name' => 'Francia', 'iso_code' => 'FR'],
                'cities' => ['París', 'Lyon', 'Marsella', 'Toulouse', 'Niza']
            ],
            [
                'country' => ['name' => 'Italia', 'iso_code' => 'IT'],
                'cities' => ['Roma', 'Milán', 'Nápoles', 'Turín', 'Florencia']
            ],
            [
                'country' => ['name' => 'Reino Unido', 'iso_code' => 'GB'],
                'cities' => ['Londres', 'Manchester', 'Birmingham', 'Edimburgo', 'Liverpool']
            ],
            [
                'country' => ['name' => 'Japón', 'iso_code' => 'JP'],
                'cities' => ['Tokio', 'Osaka', 'Yokohama', 'Nagoya', 'Kioto']
            ],
            [
                'country' => ['name' => 'China', 'iso_code' => 'CN'],
                'cities' => ['Pekín', 'Shanghái', 'Guangzhou', 'Shenzhen', 'Chengdu']
            ],
            [
                'country' => ['name' => 'Australia', 'iso_code' => 'AU'],
                'cities' => ['Sídney', 'Melbourne', 'Brisbane', 'Perth', 'Adelaida']
            ],
            [
                'country' => ['name' => 'India', 'iso_code' => 'IN'],
                'cities' => ['Nueva Delhi', 'Mumbai', 'Bangalore', 'Hyderabad', 'Chennai']
            ],
            [
                'country' => ['name' => 'Chile', 'iso_code' => 'CL'],
                'cities' => ['Santiago', 'Valparaíso', 'Concepción', 'Antofagasta', 'Temuco']
            ],
            [
                'country' => ['name' => 'Perú', 'iso_code' => 'PE'],
                'cities' => ['Lima', 'Arequipa', 'Trujillo', 'Cusco', 'Chiclayo']
            ],
            [
                'country' => ['name' => 'Sudáfrica', 'iso_code' => 'ZA'],
                'cities' => ['Johannesburgo', 'Ciudad del Cabo', 'Durban', 'Pretoria', 'Port Elizabeth']
            ],
            [
                'country' => ['name' => 'Venezuela', 'iso_code' => 'VE'],
                'cities' => ['Caracas', 'Maracaibo', 'Valencia', 'Barquisimeto', 'Maracay']
            ],
            [
                'country' => ['name' => 'Ecuador', 'iso_code' => 'EC'],
                'cities' => ['Quito', 'Guayaquil', 'Cuenca', 'Ambato', 'Santo Domingo']
            ],
            [
                'country' => ['name' => 'Rusia', 'iso_code' => 'RU'],
                'cities' => ['Moscú', 'San Petersburgo', 'Novosibirsk', 'Ekaterimburgo', 'Kazan']
            ],
            [
                'country' => ['name' => 'Corea del Sur', 'iso_code' => 'KR'],
                'cities' => ['Seúl', 'Busan', 'Incheon', 'Daegu', 'Daejeon']
            ],
            [
                'country' => ['name' => 'Indonesia', 'iso_code' => 'ID'],
                'cities' => ['Yakarta', 'Surabaya', 'Bandung', 'Medan', 'Semarang']
            ],
            [
                'country' => ['name' => 'Egipto', 'iso_code' => 'EG'],
                'cities' => ['El Cairo', 'Alejandría', 'Giza', 'Shubra El-Kheima', 'Puerto Saíd']
            ],
            [
                'country' => ['name' => 'Pakistán', 'iso_code' => 'PK'],
                'cities' => ['Karachi', 'Lahore', 'Islamabad', 'Faisalabad', 'Peshawar']
            ],
            [
                'country' => ['name' => 'Filipinas', 'iso_code' => 'PH'],
                'cities' => ['Manila', 'Cebú', 'Dávao', 'Zamboanga', 'Quezón City']
            ],
            [
                'country' => ['name' => 'Turquía', 'iso_code' => 'TR'],
                'cities' => ['Estambul', 'Ankara', 'Izmir', 'Bursa', 'Adana']
            ],
            [
                'country' => ['name' => 'Arabia Saudita', 'iso_code' => 'SA'],
                'cities' => ['Riad', 'Yeda', 'Meca', 'Medina', 'Dammam']
            ],
            [
                'country' => ['name' => 'Suecia', 'iso_code' => 'SE'],
                'cities' => ['Estocolmo', 'Gotemburgo', 'Malmö', 'Upsala', 'Västerås']
            ],
            [
                'country' => ['name' => 'Noruega', 'iso_code' => 'NO'],
                'cities' => ['Oslo', 'Bergen', 'Trondheim', 'Stavanger', 'Drammen']
            ],
            [
                'country' => ['name' => 'Finlandia', 'iso_code' => 'FI'],
                'cities' => ['Helsinki', 'Espoo', 'Tampere', 'Vantaa', 'Oulu']
            ],
            [
                'country' => ['name' => 'Nueva Zelanda', 'iso_code' => 'NZ'],
                'cities' => ['Auckland', 'Wellington', 'Christchurch', 'Hamilton', 'Dunedin']
            ],
            [
                'country' => ['name' => 'Tailandia', 'iso_code' => 'TH'],
                'cities' => ['Bangkok', 'Chiang Mai', 'Pattaya', 'Phuket', 'Khon Kaen']
            ],
            [
                'country' => ['name' => 'Malasia', 'iso_code' => 'MY'],
                'cities' => ['Kuala Lumpur', 'George Town', 'Johor Bahru', 'Ipoh', 'Shah Alam']
            ],
            [
                'country' => ['name' => 'Suiza', 'iso_code' => 'CH'],
                'cities' => ['Zúrich', 'Ginebra', 'Basilea', 'Berna', 'Lausana']
            ],
            [
                'country' => ['name' => 'Portugal', 'iso_code' => 'PT'],
                'cities' => ['Lisboa', 'Oporto', 'Braga', 'Coímbra', 'Funchal']
            ],
            [
                'country' => ['name' => 'Grecia', 'iso_code' => 'GR'],
                'cities' => ['Atenas', 'Salónica', 'Patras', 'Heraclión', 'Larisa']
            ],
            [
                'country' => ['name' => 'Países Bajos', 'iso_code' => 'NL'],
                'cities' => ['Ámsterdam', 'Róterdam', 'La Haya', 'Utrecht', 'Eindhoven']
            ],
            [
                'country' => ['name' => 'Dinamarca', 'iso_code' => 'DK'],
                'cities' => ['Copenhague', 'Aarhus', 'Odense', 'Aalborg', 'Esbjerg']
            ],
            [
                'country' => ['name' => 'Polonia', 'iso_code' => 'PL'],
                'cities' => ['Varsovia', 'Cracovia', 'Lodz', 'Wroclaw', 'Poznan']
            ],
            [
                'country' => ['name' => 'Hungría', 'iso_code' => 'HU'],
                'cities' => ['Budapest', 'Debrecen', 'Szeged', 'Miskolc', 'Pécs']
            ],
            [
                'country' => ['name' => 'Chequia', 'iso_code' => 'CZ'],
                'cities' => ['Praga', 'Brno', 'Ostrava', 'Pilsen', 'Olomouc']
            ],
            [
                'country' => ['name' => 'Austria', 'iso_code' => 'AT'],
                'cities' => ['Viena', 'Graz', 'Linz', 'Salzburgo', 'Innsbruck']
            ]
            
        ];

        foreach ($data as $entry) {
            $country = Country::create($entry['country']); // Crea el país
            foreach ($entry['cities'] as $city) {
                City::create([
                    'name' => $city,
                    'country_id' => $country->id, // Relaciona la ciudad con el país
                ]);
            }
        }
    }
}
