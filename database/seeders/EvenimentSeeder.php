<?php
namespace Database\Seeders;

use App\Models\Eveniment;
use Illuminate\Database\Seeder;

class EvenimentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Eveniment::insert([
            'titlu'     => 'FESTIVAL CULINAR TRADITIONAL',
            'data' => '2024-07-13',
            'ora' => '12:00:00',
            'judet' => '1',
            'localitate' => '1',
            'created_at' => '2024-05-12 18:49:35'
        ]);
        Eveniment::insert([
            'titlu'     => 'Zilele Dobrogei',
            'data' => '2024-09-15',
            'ora' => '08:00:00',
            'judet' => '1',
            'localitate' => '1',
            'created_at' => '2024-06-21 15:01:17'
        ]);
        Eveniment::insert([
            'titlu'     => 'Targul de Paine',
            'data' => '2024-08-11',
            'ora' => '10:00:00',
            'judet' => '1',
            'localitate' => '187',
            'created_at' => '2024-05-03 15:19:14'
        ]);
    }
}
