<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produs;

class ProdusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Produs::insert([
            'categorie' => '1',
            'denumire' => 'Dovlecei',
            'descriere' => 'De vanzare dovlecei cantitate mare',
            'producator' => '4',
            'imagini' => '1597049278_dovlecei.jpg|1597049278_dovlecei (2).jpg',
            'created_at' => '2024-05-23 15:20:43'
        ]);
        Produs::insert([
            'categorie' => '6',
            'denumire' => 'Miere de albine',
            'descriere' => 'Producator miere adevarata, garantat 100% naturala.',
            'producator' => '5',
            'imagini' => '1597049256_miere (12).jpg|1597049256_miere (11).jpg|1597049256_miere.jpg',
            'created_at' => '2024-05-23 15:10:26'
        ]);
        Produs::insert([
            'categorie' => '1',
            'denumire' => 'Mere rosii',
            'descriere' => '',
            'producator' => '5',
            'imagini' => '1597049220_mere.jpg|1597049220_mere (3).jpg|1597049220_mere (2).jpg',
            'created_at' => '2024-05-23 15:23:15'
        ]);
        Produs::insert([
            'categorie' => '1',
            'denumire' => 'Afine',
            'descriere' => 'Producem afine de cultură fără insecticide, pesticide, ierbicide sau alte subsanțe care rimează cu ”ucide”.',
            'producator' => '5',
            'imagini' => '1597049196_afine (2).jpg|1597049196_afine (3).jpg|1597049196_afine (5).jpg|1597049196_afine (4).jpg|1597049196_afine.jpg',
            'created_at' => '2024-05-23 15:32:36'
        ]);
        Produs::insert([
            'categorie' => '2',
            'denumire' => 'Oua de gaina',
            'descriere' => 'Oua de la gaini crescute in sistem free range, a doua categorie de calitate dupa cele bio. Gainile se plimba in aer liber, au parte de soare, iarba cat vad cu ochii,hrană pentru toate ciocurile, se oua la cuibar si se odihnesc pe stinghii, totul ca să-şi îndeplinească targetul şi să cotcodăcească de fericire măcar o dată pe zi.
            Pentru a obtine carne si oua de calitate in microferma noastra pasarile sunt furajate corect din primele zile de viata ale puilor pana la stadiul de adult, folosindu-se furaje 100% naturale bazate pe cereale romanesti nefiind folosite chimicale, hormoni de crestere, sau diverse fainuri de origine animala aflate la limita legii si avand o calitate nutritionala indoielnica. Un rol important il joaca si aerisirea, curatarea si dezinsectia.',
            'producator' => '11',
            'imagini' => '1597049174_oua (2).jpg|1597049174_oua (3).jpg|1597049174_oua.jpg',
            'created_at' => '2024-05-21 12:42:31'
        ]);
        Produs::insert([
            'categorie' => '2',
            'denumire' => 'Telemea de vaca',
            'descriere' => '',
            'producator' => '11',
            'imagini' => '1597049149_branza (2).jpg|1597049149_branza (3).jpg|1597049149_branza (4).jpg|1597049149_branza (5).jpg|1597049149_branza (6).jpg|1597049149_branza.jpg',
            'created_at' => '2024-05-21 12:56:35'
        ]);
        Produs::insert([
            'categorie' => '2',
            'denumire' => 'Lapte de capra',
            'descriere' => 'In momentul de fata avem cateva caprite de la care producem lapte proaspat, branza proaspata si telemea maturata.',
            'producator' => '11',
            'imagini' => '1597049117_capra (2).jpg|1597049117_capra.jpg',
            'created_at' => '2024-05-21 12:02:38'
        ]);
        Produs::insert([
            'categorie' => '6',
            'denumire' => 'Miere salcam',
            'descriere' => 'Miere de salcâm
            Capaceala -  20 lei/ borcan de 800g
            Fagure+miere - 40 lei /borcan de 800g
            Miere polifloră - 20 lei /kg
            Casoleta cu fagure - 10 lei',
            'producator' => '8',
            'imagini' => '1597049088_miere (8).jpg|1597049088_miere (10).jpg|1597049088_miere (11).jpg',
            'created_at' => '2024-05-23 14:20:43'
        ]);
        Produs::insert([
            'categorie' => '13',
            'denumire' => 'Boboci si gaste',
            'descriere' => 'Vand boboci in diferite marimi si gaste de consum, 20lei kg ( taiat si curatat).',
            'producator' => '17',
            'imagini' => '1597048980_boboci.jpg',
            'created_at' => '2024-05-20 15:52:18'
        ]);
        Produs::insert([
            'categorie' => '12',
            'denumire' => 'Dulceata',
            'descriere' => 'Dulceata Prune 10 ron /314 ml
            Dulceață Mure 15 ron/314 ml
            Dulceata caise 12 ron/314 ml
            Dulceata de zmeura 20 ron /314 ml NU ESTE GEM!
            Dulceata de nuci verzi 15 ron/314 ml
            Dulceata Visine,Trandafiri,Cireșe 15 ron/314 ml
            Dulceata Flori de Soc,Salcam,Mac 18 ron/314 ml
            Dulceata Fructe Soc 15 ron/314 ml',
            'producator' => '16',
            'imagini' => '1597048878_dulceata (2).jpg|1597048878_dulceata (3).jpg|1597048878_dulceata (4).jpg|1597048878_dulceata (5).jpg|1597048878_dulceata.jpg',
            'created_at' => '2024-05-20 18:54:12'
        ]);
        Produs::insert([
            'categorie' => '2',
            'denumire' => 'Lapte de vaca',
            'descriere' => 'Daca esti in cautarea unui lapte de vaca autentic, proaspat si de cea mai buna calitate, ai ajuns la locul potrivit! Oferim lapte de vaca direct de la ferma noastra, unde animalele sunt ingrijite cu drag si atentie, hranite cu furaje naturale si pasunate in aer liber.',
            'producator' => '11',
            'imagini' => 'lapte-de-vaca.jpg',
            'created_at' => '2024-05-21 15:43:59'
        ]);
        Produs::insert([
            'categorie' => '5',
            'denumire' => 'Produse de patiserie proaspete si delicioase',
            'descriere' => 'Oferim o gama variata de bunatati de patiserie, preparate cu ingrediente de cea mai buna calitate si cu multa dragoste. Fiecare produs este facut manual, garantand astfel un gust autentic si o prospetime de neegalat.',
            'producator' => '17',
            'imagini' => 'patiserie.jpg',
            'created_at' => '2024-05-20 15:32:16'
        ]);
        Produs::insert([
            'categorie' => '11',
            'denumire' => 'Plante medicinale',
            'descriere' => 'Oferim plante medicinale cultivate natural, fara pesticide sau alte substante chimice, menite sa iti imbunatateasca starea de bine si sa contribuie la un stil de viata sanatos.',
            'producator' => '6',
            'imagini' => 'Plante-Medicinale.jpg',
            'created_at' => '2024-05-21 14:23:59'
        ]);
    }
}
