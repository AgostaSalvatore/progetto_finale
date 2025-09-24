<?php

namespace Database\Seeders;

use App\Models\SoftwareHouse;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SoftwareHousesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $softwareHouses = [
            [
                'name'         => 'Nintendo',
                'founded_year' => 1889,
                'country'      => 'Giappone',
                'website'      => 'https://www.nintendo.com',
                'description'  => 'Storica azienda giapponese, creatrice di Mario, Zelda e Pokémon.',
                'logo'         => 'nintendo.png'
            ],
            [
                'name'         => 'Capcom',
                'founded_year' => 1979,
                'country'      => 'Giappone',
                'website'      => 'https://www.capcom.com',
                'description'  => 'Nota per Resident Evil, Monster Hunter, Street Fighter.',
                'logo'         => 'capcom.png'
            ],
            [
                'name'         => 'Ubisoft',
                'founded_year' => 1986,
                'country'      => 'Francia',
                'website'      => 'https://www.ubisoft.com',
                'description'  => "Produttrice di Assassin's Creed, Far Cry e Just Dance.",
                'logo'         => 'ubisoft.png'
            ],
            [
                'name'         => 'Rockstar Games',
                'founded_year' => 1998,
                'country'      => 'Stati Uniti',
                'website'      => 'https://www.rockstargames.com',
                'description'  => 'Famosa per GTA, Red Dead Redemption e Max Payne.',
                'logo'         => 'rockstar.png'
            ],
            [
                'name'         => 'Square Enix',
                'founded_year' => 2003,
                'country'      => 'Giappone',
                'website'      => 'https://www.square-enix.com',
                'description'  => 'Conosciuta per Final Fantasy, Dragon Quest e Kingdom Hearts.',
                'logo'         => 'square_enix.png'
            ],
            [
                'name'         => 'Valve',
                'founded_year' => 1996,
                'country'      => 'Stati Uniti',
                'website'      => 'https://www.valvesoftware.com',
                'description'  => 'Creatrice di Half-Life, Portal e gestore di Steam.',
                'logo'         => 'valve.png'
            ],
        ];

        foreach ($softwareHouses as $softwareHouseData) {
            $newSoftwareHouse = new SoftwareHouse();

            $newSoftwareHouse->name         = $softwareHouseData['name'];
            $newSoftwareHouse->founded_year = $softwareHouseData['founded_year'];
            $newSoftwareHouse->country      = $softwareHouseData['country'];
            $newSoftwareHouse->website      = $softwareHouseData['website'];
            $newSoftwareHouse->description  = $softwareHouseData['description'];
            $newSoftwareHouse->logo         = $softwareHouseData['logo'];

            $newSoftwareHouse->save();
        }
    }
}
