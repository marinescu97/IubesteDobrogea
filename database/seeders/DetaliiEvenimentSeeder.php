<?php
namespace Database\Seeders;

use App\Models\DetaliiEveniment;
use Illuminate\Database\Seeder;

class DetaliiEvenimentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DetaliiEveniment::insert([
            'imagine'     => 'festivalculinar.jpg',
            'descriere'     => 'Evenimentul isi propune sa aduca in fata publicului cele mai renumite bunatati din toate colturile tarii. Acesta va avea loc in judetul Constanta, Aleea Crinilor nr.2.Toti vizitatorii vor servi pranzul si cina in natura pentru ca vor avea incepand de la aperitive (preparate traditionale din carne si lapte), friptura si mancare la ceaun din pui, prepelita porc, berbecut, peste si fructe de mare, pana la placinta cu branza si gogosi.',
            'eveniment'     => '1',
            'created_at'     => '2024-05-12 18:49:35',
        ]);
        DetaliiEveniment::insert([
            'imagine'     => '1599145277_zileledobrogei.jpg',
            'descriere'     => 'Va invitam sa cumparati si sa consumati produse realizate in Dobrogea! In perioada 14 - 17 noiembrie, la Pavilionul Expozitional Constanta, sarbatorim "Zilele Dobrogei", expozitie de produse traditionale, gastronomie si vinuri din Dobrogea, eveniment organizat pentru a marca 140 de ani de la revenirea Dobrogei la Patria Mama.',
            'eveniment'     => '2',
            'created_at'     => '2024-06-21 15:01:17',
        ]);
        DetaliiEveniment::insert([
            'imagine'     => 'zileledobrogei1.jpg',
            'descriere'     => 'In fiecare an, Dobrogea isi sarbatoreste ziua la 14 noiembrie, marcand, astfel, reunirea cu Romania, in urma Razboiului de Independenta dintre anii 1877 – 1878 ( sau razboiul ruso-turc).

            Dorim sa marcam aceasta frumoasa aniversare printr-un eveniment expozitional, in cadrul caruia sa incurajam mai buna promovare, cumpararea si consumul de produse dobrogene.

            Expozitia cu vanzare, organizata de Camera de Comert, Industrie, Navigatie si Agricultura Constanta, in parteneriat cu Consiliul judetean Constanta si Primaria Constanta, cu sprijinul Consiliului Judetean Tulcea si al Asociatiei de Management al Destinatiei Turistice Delta-Dunarii, va reuni producatori de produse alimentare si nealimentare, precum si mestesugari si artizani din Regiunea istorica Dobrogea.

            Tododata, vor putea fi vizionate ateliere mestesugaresti, expozitii de fotografii si spectacole de muzica si dansuri.',
            'eveniment'     => '2',
            'created_at'     => '2024-06-21 15:01:17',
        ]);
        DetaliiEveniment::insert([
            'imagine'     => '1599146354_targuldepaine.jpg',
            'descriere'     => 'Primaria organizeaza in perioada 28-30 septembrie 2018, in Parcul Central, cea de-a XVII-a editie a "Targului de paine", un festival dedicat traditiilor si obiceiurilor legate de producerea painii, de la culesul spicelor de grau, pana la coacerea painii traditionale. In cadrul evenimentului vor fi prezentate o serie de demonstratii practice de realizare a painii la cel mai vechi cuptor de paine, testul, precum si la cuptoare traditionale pe vatra, cei prezenti putand degusta, gratuit, mostre din aceste produse.


            Peste 40 de producatori si mesteri traditionali vor expune, spre vanzare, diverse produse de panificatie, dar si alte bunuri, specifice unui inceput de toamna in gospodaria traditionala romaneasca. Mesterii populari vor aduce o serie de obiecte specifice gospodariei sau de artizanat traditional: ceramica, linguri si alte cioplituri in lemn, oua incondeiate, imbracaminte.

            Festivalul va cuprinde o serie de expozitii tematice intitulate generic "Drumul painii", care vor prezenta publicului prezent unelte agricole folosite in ultimul secol si produse de panificatie specifice unor momente din viata taranului roman, completate de momente artistice legate de traditii stravechi ale secerisului, dansuri traditionale si spectacole folclorice.',
            'eveniment'     => '3',
            'created_at'     => '2024-05-03 15:19:14',
        ]);
    }
}
