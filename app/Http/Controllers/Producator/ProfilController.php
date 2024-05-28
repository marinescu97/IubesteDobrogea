<?php

namespace App\Http\Controllers\Producator;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ProfilController extends Controller
{
    public function afiseazaProfil(): View
    {
    	$judet = DB::table('producator')
    				->where('producator.id', Auth::user()->id)
    				->join('judet', 'producator.judet', '=', 'judet.id')
    				->value('judet.nume');
    	$localitate = DB::table('producator')
    				->where('producator.id', Auth::user()->id)
    				->join('localitate', 'producator.localitate', '=', 'localitate.id')
    				->value('localitate.nume');
    	return view('producator.profil', compact('judet', 'localitate'));
    }
}
