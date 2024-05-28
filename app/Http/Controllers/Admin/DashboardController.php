<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategorieProdus;
use App\Models\Eveniment;
use App\Models\Judet;
use App\Models\Producator;
use App\Models\Produs;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

/**
 * @method middleware(string[] $array)
 */
class DashboardController extends Controller
{

    public function index(): View
    {
        $nrproducatori = Producator::where("admin", "0")->get()->count();
        $nrproduse = Produs::get()->count();
        $nrevenimente = Eveniment::get()->count();
        $categorie = CategorieProdus::join('produs', 'produs.categorie', '=', 'categorie_produs.id')
                        ->select('categorie_produs.id','categorie_produs.nume', DB::raw('COUNT(categorie_produs.id) AS total'))
                        ->groupBy('categorie_produs.id','categorie_produs.nume')
                        ->get();
        $judet = Judet::join('producator', 'producator.judet', '=', 'judet.id')
                        ->where('producator.admin', 0)
                        ->select('judet.id','judet.nume', DB::raw('COUNT(judet.id) AS total'))
                        ->groupBy('judet.id','judet.nume')
                        ->get();
        $luna = now()->subMonth();
            $evenimente = Eveniment::select(DB::raw('MONTH(eveniment.created_at) AS luna'), DB::raw('COUNT(eveniment.id) AS numar'))
                        ->groupBy('luna')
                        ->get();
        return view('admin.dashboard', compact('categorie','judet','nrproducatori','nrproduse','nrevenimente','luna','evenimente'));
    }
}
