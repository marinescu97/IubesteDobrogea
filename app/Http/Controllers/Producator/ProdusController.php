<?php

namespace App\Http\Controllers\Producator;

use App\Http\Controllers\Controller;

use App\Models\CategorieProdus;
use App\Models\Produs;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

/**
 * @method validate(Request $request, string[] $array, string[] $array1)
 */
class ProdusController extends Controller
{
    public function index(): View
    {
        $categorie = CategorieProdus::get();
        return view('producator.adaugare_produs', compact('categorie'));
    }

    public function adaugareProdus(Request $request): RedirectResponse
    {
        $request->validate([
            'denumire' => 'required|string|max:25',
            'categorie' => 'required',
            'descriere' => 'string|nullable',
            'imagini.*' => 'image'
        ],[
            'required' => 'Campul :attribute este obligatoriu.',
            'max' => 'Campul :attribute trebuie sa contina maxim :max caractere.',
            'string' => 'Campul :attribute trebuie sa contina un sir de caractere.',
            'imagini.*.image' => 'Fisierele trebuie sa fie imagini.',
        ]);

        $imagini=array();
        if($fisiere=$request->file('imagini')){
        foreach($fisiere as $fisier){
            $nume=$fisier->getClientOriginalName();
            $nume= time().'_'.$nume;
            $fisier->move('storage/produse',$nume);
            $imagini[]=$nume;
        }
    }
         Produs::create([
            'denumire' => $request['denumire'],
            'categorie' => $request['categorie'],
            'descriere' => $request['descriere'],
            'producator' => Auth::user()->id,
            'imagini'=>  implode("|",$imagini),
            'created_at' => now()
        ]);
        return back()->with('success','Produsul a fost adaugat cu succes!');
    }

    public function stergereProdus($id): RedirectResponse
    {
        Produs::where('id', $id)->delete();
        return back()->with('success','Produsul a fost sters cu succes!');
    }
}
