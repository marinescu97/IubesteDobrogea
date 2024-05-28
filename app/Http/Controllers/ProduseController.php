<?php

namespace App\Http\Controllers;

use App\Models\CategorieProdus;
use App\Models\Produs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ProduseController extends Controller
{
    public function afiseazaProduse(): View
    {
        $produs = Produs::orderBy('created_at','asc')->paginate(8);
        $categorie = CategorieProdus::get();
        return view('produse',compact('produs','categorie'));
    }

    public function fetch_data(Request $request)
    {
         if($request->ajax())
         {
            $produs = Produs::orderBy('created_at','asc')->paginate(8);
            $categorie = CategorieProdus::get();
            return view('layouts.produsepag', compact('produs', 'categorie'))->render();
         }
    }

    public function search(Request $request): View
    {
        $query = $request->input('query');
        $produs = DB::table("produs")->where('denumire', 'like', "%$query%")
            ->orderBy('created_at')
            ->paginate(8);
        $categorie = CategorieProdus::get();
        return view('layouts.produsepag', compact('produs', 'categorie'));
    }

    public function producatorproduse($id): View
    {
        $produs = Produs::where('producator', $id)->paginate(8);
        $categorie = CategorieProdus::get();
        return view('produse', compact('produs', 'categorie'));
    }
    public function categorieproduse($id): View
    {
        $produs = Produs::where('categorie', $id)->paginate(8);
        $categorie = CategorieProdus::get();
        return view('produse', compact('produs', 'categorie'));
    }
}
