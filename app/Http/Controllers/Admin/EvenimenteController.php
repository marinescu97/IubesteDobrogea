<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Anunt;
use App\Models\DetaliiEveniment;
use App\Models\Eveniment;
use App\Models\Judet;
use App\Models\Localitate;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class EvenimenteController extends Controller
{
    public function index(): View
    {
        $jsonData = Storage::get('language.json');
        $data = json_decode($jsonData, true);

        $judet = Judet::get();
        $evenimente = Eveniment::select("eveniment.*",
                                    DB::raw("(SELECT judet.nume FROM judet
                                                WHERE judet.id = eveniment.judet
                                                GROUP BY judet.nume) as judet"),
                                    DB::raw("(SELECT localitate.nume FROM localitate
                                                WHERE localitate.id = eveniment.localitate
                                                GROUP BY localitate.nume) as localitate"))
                                    ->orderBy('created_at', 'DESC')
                                    ->get();

        return view('admin.evenimente', compact('evenimente','judet'), ['data'=>$data]);
    }

    public function stergereEveniment($id): RedirectResponse
    {
        Eveniment::where('id', $id)->delete();

        return back()->with('success','Evenimentul a fost sters cu succes');
    }

    public function getModalData($id): View
    {

        $eveniment = Eveniment::find($id);
        $judet = Judet::where('id', $eveniment->judet)->first();
        $localitate = Localitate::where('id', $eveniment->localitate)->first();
        $detaliu = DetaliiEveniment::where('eveniment', $id)->first();
        $count = DetaliiEveniment::where('eveniment',$id)->count();
        $detalii = DB::table('detalii_eveniment')
            ->where('eveniment', $id)
            ->skip(1)
            ->take($count)
            ->get();
        $anunturi = Anunt::where('eveniment', $id)
            ->join('producator', 'anunt_eveniment.producator', '=', 'producator.id')
            ->select('anunt_eveniment.*', 'producator.nume as nume','producator.prenume as prenume','producator.email as email','producator.telefon as telefon','producator.adresa as adresa','producator.avatar as avatar','producator.descriere as descriere','producator.judet as judet','producator.localitate as localitate')
            ->get();

        return view('admin.evenimentModal', compact('detaliu', 'eveniment', 'judet', 'localitate', 'detalii', 'anunturi'));
    }
}
