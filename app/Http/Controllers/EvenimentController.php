<?php

namespace App\Http\Controllers;

use App\Models\Anunt;
use App\Models\DetaliiEveniment;
use App\Models\Eveniment;
use App\Models\Judet;
use App\Models\Localitate;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class EvenimentController extends Controller
{
    public function afiseazaEveniment($id): View
    {
        $eveniment = Eveniment::find($id);
        $judet = Judet::where('id', $eveniment->judet)->first();
        $localitate = Localitate::where('id', $eveniment->localitate)->first();
        $detaliu = DetaliiEveniment::where('eveniment', $id)->first();
        $count = DetaliiEveniment::where('eveniment', $id)->count();
        $detalii = DB::table('detalii_eveniment')
            ->where('eveniment', $id)
            ->skip(1)
            ->take($count)
            ->get();
        $anunturi = Anunt::where('eveniment', $id)
            ->join('producator', 'anunt_eveniment.producator', '=', 'producator.id')
            ->select('anunt_eveniment.*', 'producator.nume as nume', 'producator.prenume as prenume', 'producator.email as email', 'producator.telefon as telefon', 'producator.adresa as adresa', 'producator.avatar as avatar', 'producator.descriere as descriere', 'producator.judet as judet', 'producator.localitate as localitate')
            ->get();
        return view('eveniment', compact('eveniment', 'detaliu', 'detalii', 'anunturi', 'judet', 'localitate'));
    }

    public function stergereAnunt($id)
    {
        Anunt::where('id', $id)->delete();
        return back()->with('success','Anuntul a fost sters cu succes!');
    }
}
