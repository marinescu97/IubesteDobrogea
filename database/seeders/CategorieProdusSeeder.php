<?php

namespace Database\Seeders;

use App\Models\CategorieProdus;
use Illuminate\Database\Seeder;

class CategorieProdusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        CategorieProdus::insert([
            'nume'     => 'Fructe si legume',
        ]);
        CategorieProdus::insert([
            'nume'     => 'Oua si produse lactate',
        ]);
        CategorieProdus::insert([
            'nume'     => 'Preparate din carne',
        ]);
        CategorieProdus::insert([
            'nume'     => 'Peste si derivate din peste',
        ]);
        CategorieProdus::insert([
            'nume'     => 'Produse de patiserie si dulciuri',

        ]);
        CategorieProdus::insert([
            'nume'     => 'Miere si produse apicole',

        ]);
        CategorieProdus::insert([
            'nume'     => 'Conserve si siropuri',

        ]);
        CategorieProdus::insert([
            'nume'     => 'Fructe de padure',

        ]);
        CategorieProdus::insert([
            'nume'     => 'Sucuri naturale',

        ]);
        CategorieProdus::insert([
            'nume'     => 'Ciuperci',

        ]);
        CategorieProdus::insert([
            'nume'     => 'Plante medicinale',

        ]);
        CategorieProdus::insert([
            'nume'     => 'Gemuri si dulceturi',

        ]);
        CategorieProdus::insert([
            'nume'     => 'Altele',

        ]);
    }
}
