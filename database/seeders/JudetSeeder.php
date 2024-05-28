<?php
namespace Database\Seeders;

use App\Models\Judet;
use Illuminate\Database\Seeder;


class JudetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
      Judet::insert([
          'nume'     => 'Constanta',
      ]);
      Judet::insert([
          'nume'     => 'Tulcea',
      ]);
    }
}
