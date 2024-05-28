<?php

namespace App\Http\Controllers;

use App\Models\Judet;
use App\Models\Localitate;
use App\Models\Producator;
use App\Models\Produs;
use Illuminate\View\View;

class ProdusController extends Controller
{
    public function afiseazaProdus($id): View
    {
        $produs = Produs::find($id);
        $producator = Producator::where('id',$produs->producator)->first();
        $localitate = Localitate::where('id', $producator->localitate)->first();
        $judet = Judet::where('id', $producator->judet)->first();
        return view('produs', compact('produs','producator','localitate','judet'));
    }
}
