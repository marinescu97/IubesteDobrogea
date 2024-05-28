<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producator;

class ProducatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Producator::insert([
            'nume'     => 'admin',
            'prenume' => 'admin',
            'email'    => 'admin@admin.com',
            'telefon' => '0764521689',
            'adresa' => 'Aleea Liliacului nr. 4',
            'admin' => '1',
            'judet' => '1',
            'localitate' => '1',
            'parola' => bcrypt('rootadmin'),
            'created_at' => '2024-05-23 14:33:59'
        ]);
        Producator::insert([
            'nume'     => 'Popescu',
            'prenume'    => 'Andreea',
            'adresa'    => 'Ale Liliacului nr.4',
            'email'    => 'popescuandreea@yahoo.com',
            'telefon'    => '0784657354',
            'judet' => '1',
            'localitate' => '2',
            'admin' => '0',
            'parola' => bcrypt('popescuandreea'),
            'created_at' => '2024-05-23 14:42:56'
        ]);
        Producator::insert([
            'nume' => 'Andrei',
            'prenume' => 'Alina',
            'email' => 'andreialina@yahoo.com',
            'telefon' => '0764521987',
            'adresa' => 'Aleea Crinului, nr.2',
            'judet' => '1',
            'localitate' => '33',
            'admin' => '0',
            'parola' => bcrypt('andreialina'),
            'descriere' => '',
            'avatar' => 'AndreiAlina.jpg',
            'created_at' => '2024-05-23 14:45:59'
        ]);
        Producator::insert([
            'nume' => 'Draghici',
            'prenume' => 'Victor',
            'email' => 'draghicivictor@yahoo.com',
            'telefon' => '0734521689',
            'adresa' => 'Aleea Balcic, nr.13',
            'judet' => '1',
            'localitate' => '70',
            'admin' => '0',
            'parola' => bcrypt('draghicivictor'),
            'descriere' => '',
            'avatar' => 'DraghiciVictor.jpg',
            'created_at' => '2024-05-23 14:51:25'
        ]);
        Producator::insert([
            'nume' => 'Serban',
            'prenume' => 'Marian',
            'email' => 'serbanmarian@yahoo.com',
            'telefon' => '0724568974',
            'adresa' => 'Aleea Trandafirilor, nr.23',
            'judet' => '1',
            'localitate' => '20',
            'admin' => '0',
            'parola' => bcrypt('serbanmarian'),
            'descriere' => '',
            'avatar' => 'SerbanMarian.jpg',
            'created_at' => '2024-05-23 14:55:15'
        ]);
        Producator::insert([
            'nume' => 'Vlad',
            'prenume' => 'Stefan',
            'email' => 'vladstefan@yahoo.com',
            'telefon' => '0764215897',
            'adresa' => 'Aleea Liliacului, nr.3',
            'judet' => '1',
            'localitate' => '50',
            'admin' => '0',
            'parola' => bcrypt('vladstefan'),
            'descriere' => '',
            'avatar' => 'VladStefan.jpg',
            'created_at' => '2024-05-23 14:24:41'
        ]);
        Producator::insert([
            'nume' => 'Dragomir',
            'prenume' => 'Andreea',
            'email' => 'dragomirandreea@yahoo.com',
            'telefon' => '0764521689',
            'adresa' => 'Aleea Cristalului, nr.12',
            'judet' => '1',
            'localitate' => '15',
            'admin' => '0',
            'parola' => bcrypt('dragomirandreea'),
            'descriere' => '',
            'avatar' => 'default.jpg',
            'created_at' => '2024-05-23 14:34:13'
        ]);
        Producator::insert([
            'nume' => 'Druga',
            'prenume' => 'Sorin',
            'email' => 'drugasorin@yahoo.com',
            'telefon' => '0734521687',
            'adresa' => 'Aleea Gorunului, nr.25',
            'judet' => '1',
            'localitate' => '60',
            'admin' => '0',
            'parola' => bcrypt('drugasorin'),
            'descriere' => '',
            'avatar' => 'DrugaSorin.jpg',
            'created_at' => '2024-05-23 14:13:51'
        ]);
        Producator::insert([
            'nume' => 'Munteanu',
            'prenume' => 'Ioan',
            'email' => 'munteanuioan@yahoo.com',
            'telefon' => '0764521987',
            'adresa' => 'Aleea Icar, nr.14',
            'judet' => '1',
            'localitate' => '67',
            'admin' => '0',
            'parola' => bcrypt('munteanuioan'),
            'descriere' => '',
            'avatar' => 'default.jpg',
            'created_at' => '2024-05-23 14:45:31'
        ]);
        Producator::insert([
            'nume' => 'Dragomir',
            'prenume' => 'Andrei-Alexandru',
            'email' => 'dragomiralexandru@yahoo.com',
            'telefon' => '0764521689',
            'adresa' => 'Aleea Crinului, nr.20',
            'judet' => '1',
            'localitate' => '90',
            'admin' => '0',
            'parola' => bcrypt('dragomiralexandru'),
            'descriere' => '',
            'avatar' => 'DragomirAlexandru.jpg',
            'created_at' => '2024-05-23 15:33:59'
        ]);
        Producator::insert([
            'nume' => 'Ivan',
            'prenume' => 'Diana',
            'email' => 'ivandiana@yahoo.com',
            'telefon' => '0724567216',
            'adresa' => 'Aleea Inului, nr.3',
            'judet' => '1',
            'localitate' => '80',
            'admin' => '0',
            'parola' => bcrypt('ivandiana'),
            'descriere' => '',
            'avatar' => 'default.jpg',
            'created_at' => '2024-05-21 12:33:59'
        ]);
        Producator::insert([
            'nume' => 'Rusu',
            'prenume' => 'Catalin',
            'email' => 'rusucatalin@yahoo.com',
            'telefon' => '0742165824',
            'adresa' => 'Aleea Zambilei, nr.4',
            'judet' => '1',
            'localitate' => '58',
            'admin' => '0',
            'parola' => bcrypt('rusucatalin'),
            'descriere' => '',
            'avatar' => 'RusuCatalin.jpg',
            'created_at' => '2024-05-14 12:45:42'
        ]);
        Producator::insert([
            'nume' => 'Bogdan',
            'prenume' => 'Ioana',
            'email' => 'bogdanioana@yahoo.com',
            'telefon' => '0754682166',
            'adresa' => 'Aleea Nicoresti, nr.10',
            'judet' => '1',
            'localitate' => '45',
            'admin' => '0',
            'parola' => bcrypt('bogdanioana'),
            'descriere' => '',
            'avatar' => 'default.jpg',
            'created_at' => '2024-05-22 12:21:54'
        ]);
        Producator::insert([
            'nume' => 'Marin',
            'prenume' => 'Serban',
            'email' => 'marinserban@yahoo.com',
            'telefon' => '0764521987',
            'adresa' => 'Aleea Castanului, nr.3',
            'judet' => '1',
            'localitate' => '190',
            'admin' => '0',
            'parola' => bcrypt('marinserban'),
            'descriere' => '',
            'avatar' => 'default.jpg',
            'created_at' => '2024-05-14 16:33:59'
        ]);
        Producator::insert([
            'nume' => 'Ionita',
            'prenume' => 'Cristina',
            'email' => 'ionitacristina@yahoo.com',
            'telefon' => '0746589745',
            'adresa' => 'Aleea Poienitei, nr.14',
            'judet' => '1',
            'localitate' => '23',
            'admin' => '0',
            'parola' => bcrypt('ionitacristina'),
            'descriere' => '',
            'avatar' => 'default.jpg',
            'created_at' => '2024-05-07 14:33:59'
        ]);
        Producator::insert([
            'nume' => 'Manole',
            'prenume' => 'Gheorghe',
            'email' => 'manolegheorghe@yahoo.com',
            'telefon' => '0734658974',
            'adresa' => 'Aleea Zambilei, nr.15',
            'judet' => '1',
            'localitate' => '87',
            'admin' => '0',
            'parola' => bcrypt('manolegheorghe'),
            'descriere' => '',
            'avatar' => 'default.jpg',
            'created_at' => '2024-05-20 18:43:26'
        ]);
        Producator::insert([
            'nume' => 'Tomescu',
            'prenume' => 'Irina',
            'email' => 'tomescuirina@yahoo.com',
            'telefon' => '0754689754',
            'adresa' => 'Aleea Sagetii, nr.7',
            'judet' => '1',
            'localitate' => '49',
            'admin' => '0',
            'parola' => bcrypt('tomescuirina'),
            'descriere' => '',
            'avatar' => 'default.jpg',
            'created_at' => '2024-05-20 15:32:16'
        ]);
    }



}
