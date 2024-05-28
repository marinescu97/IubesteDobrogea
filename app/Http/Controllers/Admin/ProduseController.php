<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategorieProdus;
use App\Models\Judet;
use App\Models\Localitate;
use App\Models\Producator;
use App\Models\Produs;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProduseController extends Controller
{
    public function index(Request $request): View
    {
        $judete = Judet::get();
        $categorie= CategorieProdus::get();
        $fjudet = $request->input('judet');
        $fcategorie=$request->input('categorie');
        $flocalitate = $request->input('localitate');
        $ordonare = $request->input('ordonare');

        if (!empty($ordonare))
        {
            if (!empty($fcategorie))
            {
                if (!empty($fjudet))
                {
                    if(!empty($flocalitate))
                    {
                        $produse = Produs::join('producator', 'producator.id', '=', 'produs.producator')
                                    ->join('categorie_produs', 'categorie_produs.id', '=', 'produs.categorie')
                                    ->join('judet', 'producator.judet', '=', 'judet.id')
                                    ->join('localitate', 'producator.localitate', '=', 'localitate.id')
                                    ->select('produs.*', 'producator.nume as nproducator', 'producator.prenume as pproducator', 'categorie_produs.nume as categorieprod','judet.nume as judet','localitate.nume as localitate','producator.adresa as adresa')
                                    ->where([['judet.id', $fjudet],['localitate.id',$flocalitate],['categorie_produs.id',$fcategorie]])
                                    ->orderBy($ordonare)
                                    ->paginate(6);
                    }else
                    {
                        $produse = Produs::join('producator', 'producator.id', '=', 'produs.producator')
                                    ->join('categorie_produs', 'categorie_produs.id', '=', 'produs.categorie')
                                    ->join('judet', 'producator.judet', '=', 'judet.id')
                                    ->join('localitate', 'producator.localitate', '=', 'localitate.id')
                                    ->select('produs.*', 'producator.nume as nproducator', 'producator.prenume as pproducator', 'categorie_produs.nume as categorieprod','judet.nume as judet','localitate.nume as localitate','producator.adresa as adresa')
                                    ->where([['judet.id', $fjudet],['categorie_produs.id',$fcategorie]])
                                    ->orderBy($ordonare)
                                    ->paginate(6);
                    }
                } else {
                    $produse = Produs::join('producator', 'producator.id', '=', 'produs.producator')
                                    ->join('categorie_produs', 'categorie_produs.id', '=', 'produs.categorie')
                                    ->join('judet', 'producator.judet', '=', 'judet.id')
                                    ->join('localitate', 'producator.localitate', '=', 'localitate.id')
                                    ->select('produs.*', 'producator.nume as nproducator', 'producator.prenume as pproducator', 'categorie_produs.nume as categorieprod','judet.nume as judet','localitate.nume as localitate','producator.adresa as adresa')
                                    ->where('categorie_produs.id',$fcategorie)
                                    ->orderBy($ordonare)
                                    ->paginate(6);
                }

            } else
            {
                if (!empty($fjudet))
                {
                    if(!empty($flocalitate))
                    {
                        $produse = Produs::join('producator', 'producator.id', '=', 'produs.producator')
                        ->join('categorie_produs', 'categorie_produs.id', '=', 'produs.categorie')
                        ->join('judet', 'producator.judet', '=', 'judet.id')
                        ->join('localitate', 'producator.localitate', '=', 'localitate.id')
                        ->select('produs.*', 'producator.nume as nproducator', 'producator.prenume as pproducator', 'categorie_produs.nume as categorieprod','judet.nume as judet','localitate.nume as localitate','producator.adresa as adresa')
                        ->where([['judet.id', $fjudet],['localitate.id',$flocalitate]])
                        ->orderBy($ordonare)
                        ->paginate(6);
                    }else
                    {
                        $produse = Produs::join('producator', 'producator.id', '=', 'produs.producator')
                        ->join('categorie_produs', 'categorie_produs.id', '=', 'produs.categorie')
                        ->join('judet', 'producator.judet', '=', 'judet.id')
                        ->join('localitate', 'producator.localitate', '=', 'localitate.id')
                        ->select('produs.*', 'producator.nume as nproducator', 'producator.prenume as pproducator', 'categorie_produs.nume as categorieprod','judet.nume as judet','localitate.nume as localitate','producator.adresa as adresa')
                        ->where('judet.id', $fjudet)
                        ->orderBy($ordonare)
                        ->paginate(6);
                    }
                } else {
                    $produse = Produs::join('producator', 'producator.id', '=', 'produs.producator')
                        ->join('categorie_produs', 'categorie_produs.id', '=', 'produs.categorie')
                        ->join('judet', 'producator.judet', '=', 'judet.id')
                        ->join('localitate', 'producator.localitate', '=', 'localitate.id')
                        ->select('produs.*', 'producator.nume as nproducator', 'producator.prenume as pproducator', 'categorie_produs.nume as categorieprod','judet.nume as judet','localitate.nume as localitate','producator.adresa as adresa')
                        ->orderBy($ordonare)
                        ->paginate(6);
                }
            }

        } else
        {
            if (!empty($fcategorie))
            {
                if (!empty($fjudet))
                {
                    if(!empty($flocalitate))
                    {
                        $produse = Produs::join('producator', 'producator.id', '=', 'produs.producator')
                        ->join('categorie_produs', 'categorie_produs.id', '=', 'produs.categorie')
                        ->join('judet', 'producator.judet', '=', 'judet.id')
                        ->join('localitate', 'producator.localitate', '=', 'localitate.id')
                        ->select('produs.*', 'producator.nume as nproducator', 'producator.prenume as pproducator', 'categorie_produs.nume as categorieprod','judet.nume as judet','localitate.nume as localitate','producator.adresa as adresa')
                        ->where([['judet.id', $fjudet],['localitate.id',$flocalitate],['categorie_produs.id',$fcategorie]])
                        ->orderBy('created_at', 'DESC')
                        ->paginate(6);
                    }else
                    {
                        $produse = Produs::join('producator', 'producator.id', '=', 'produs.producator')
                        ->join('categorie_produs', 'categorie_produs.id', '=', 'produs.categorie')
                        ->join('judet', 'producator.judet', '=', 'judet.id')
                        ->join('localitate', 'producator.localitate', '=', 'localitate.id')
                        ->select('produs.*', 'producator.nume as nproducator', 'producator.prenume as pproducator', 'categorie_produs.nume as categorieprod','judet.nume as judet','localitate.nume as localitate','producator.adresa as adresa')
                        ->where([['judet.id', $fjudet],['categorie_produs.id',$fcategorie]])
                        ->orderBy('created_at', 'DESC')
                        ->paginate(6);
                    }
                } else {
                    $produse = Produs::join('producator', 'producator.id', '=', 'produs.producator')
                        ->join('categorie_produs', 'categorie_produs.id', '=', 'produs.categorie')
                        ->join('judet', 'producator.judet', '=', 'judet.id')
                        ->join('localitate', 'producator.localitate', '=', 'localitate.id')
                        ->select('produs.*', 'producator.nume as nproducator', 'producator.prenume as pproducator', 'categorie_produs.nume as categorieprod','judet.nume as judet','localitate.nume as localitate','producator.adresa as adresa')
                        ->where('categorie_produs.id',$fcategorie)
                        ->orderBy('created_at', 'DESC')
                        ->paginate(6);
                }

            } else
            {
                if (!empty($fjudet))
                {
                    if(!empty($flocalitate))
                    {
                        $produse = Produs::join('producator', 'producator.id', '=', 'produs.producator')
                        ->join('categorie_produs', 'categorie_produs.id', '=', 'produs.categorie')
                        ->join('judet', 'producator.judet', '=', 'judet.id')
                        ->join('localitate', 'producator.localitate', '=', 'localitate.id')
                        ->select('produs.*', 'producator.nume as nproducator', 'producator.prenume as pproducator', 'categorie_produs.nume as categorieprod','judet.nume as judet','localitate.nume as localitate','producator.adresa as adresa')
                        ->where([['judet.id', $fjudet],['localitate.id',$flocalitate]])
                        ->orderBy('created_at', 'DESC')
                        ->paginate(6);
                    }else
                    {
                        $produse = Produs::join('producator', 'producator.id', '=', 'produs.producator')
                        ->join('categorie_produs', 'categorie_produs.id', '=', 'produs.categorie')
                        ->join('judet', 'producator.judet', '=', 'judet.id')
                        ->join('localitate', 'producator.localitate', '=', 'localitate.id')
                        ->select('produs.*', 'producator.nume as nproducator', 'producator.prenume as pproducator', 'categorie_produs.nume as categorieprod','judet.nume as judet','localitate.nume as localitate','producator.adresa as adresa')
                        ->where('judet.id', $fjudet)
                        ->orderBy('created_at', 'DESC')
                        ->paginate(6);
                    }
                } else {
                    $produse = Produs::join('producator', 'producator.id', '=', 'produs.producator')
                        ->join('categorie_produs', 'categorie_produs.id', '=', 'produs.categorie')
                        ->join('judet', 'producator.judet', '=', 'judet.id')
                        ->join('localitate', 'producator.localitate', '=', 'localitate.id')
                        ->select('produs.*', 'producator.nume as nproducator', 'producator.prenume as pproducator', 'categorie_produs.nume as categorieprod','judet.nume as judet','localitate.nume as localitate','producator.adresa as adresa')
                        ->orderBy('created_at', 'DESC')
                        ->paginate(6);
                }

            }
        }

        return view('admin.produse',compact('judete','produse','categorie'));
    }

    public function stergereProdus($id): RedirectResponse
    {
        Produs::where('id', $id)->delete();
        return back()->with('success','Produsul a fost sters cu succes');
    }

    public function afiseazaLocalitati($id): JsonResponse
    {
        $localitati = Localitate::where('judet',$id)->pluck('nume','id');
        return response()->json($localitati);
    }

    public function getModalData($id): View
    {
        $produs = Produs::findOrFail($id);
        $producator = Producator::where('id',$produs->producator)->first();
        $localitate = Localitate::where('id', $producator->localitate)->first();
        $judet = Judet::where('id', $producator->judet)->first();
        $img=explode('|', $produs->imagini);
        $imagine = $img[0];

        return view('admin.produsModal', compact('produs','producator', 'localitate', 'judet', 'imagine'));
    }
}
