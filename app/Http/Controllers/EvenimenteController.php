<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class EvenimenteController extends Controller
{
    public function afiseazaEvenimente(): View
    {
        $eveniment = DB::table("eveniment")
            ->select("eveniment.*",
                DB::raw("(SELECT judet.nume FROM judet
                                WHERE judet.id = eveniment.judet
                                GROUP BY judet.nume) as judet"),
                DB::raw("(SELECT localitate.nume FROM localitate
                                WHERE localitate.id = eveniment.localitate
                                GROUP BY localitate.nume) as localitate"))
            ->paginate(8);
        return view('evenimente', compact('eveniment'));
    }
    function fetch_data(Request $request)
    {
     if($request->ajax())
     {
        $eveniment = DB::table("eveniment")
            ->select("eveniment.*",
                DB::raw("(SELECT judet.nume FROM judet
                                WHERE judet.id = eveniment.judet
                                GROUP BY judet.nume) as judet"),
                DB::raw("(SELECT localitate.nume FROM localitate
                                WHERE localitate.id = eveniment.localitate
                                GROUP BY localitate.nume) as localitate"))
            ->paginate(8);
        return view('layouts.evenimentepag', compact('eveniment'));
     }
    }

    public function search(Request $request): View
    {
        $query = $request->input('query');
        $eveniment = DB::table("eveniment")
            ->where('titlu', 'like', "%$query%")
            ->select("eveniment.*",
                DB::raw("(SELECT judet.nume FROM judet
                                WHERE judet.id = eveniment.judet
                                GROUP BY judet.nume) as judet"),
                DB::raw("(SELECT localitate.nume FROM localitate
                                WHERE localitate.id = eveniment.localitate
                                GROUP BY localitate.nume) as localitate"))
            ->paginate(8);
        return view('layouts.evenimentepag', compact('eveniment'));
    }
}
