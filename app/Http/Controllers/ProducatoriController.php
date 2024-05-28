<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ProducatoriController extends Controller
{
    public function afiseazaProducatori(): View
    {
        $utilizator = DB::table("producator")->where('admin', '0')
          ->select("producator.*",
                    DB::raw("(SELECT judet.nume FROM judet
                                WHERE judet.id = producator.judet
                                GROUP BY judet.nume) as judet"),
                    DB::raw("(SELECT localitate.nume FROM localitate
                                WHERE localitate.id = producator.localitate
                                GROUP BY localitate.nume) as localitate"))
          ->paginate(12);

        return view('producatori', ['utilizator' => $utilizator]);
    }
    function fetch_data(Request $request)
    {
     if($request->ajax())
     {
      $utilizator = DB::table("producator")->where('admin', '0')
                    ->select("producator.*",
                    DB::raw("(SELECT judet.nume FROM judet
                                WHERE judet.id = producator.judet
                                GROUP BY judet.nume) as judet"),
                    DB::raw("(SELECT localitate.nume FROM localitate
                                WHERE localitate.id = producator.localitate
                                GROUP BY localitate.nume) as localitate"))
                    ->paginate(12);
      return view('layouts.producatorpag', compact('utilizator'))->render();
     }
    }

    public function search(Request $request): View
    {
        $query = $request->input('query');
        $utilizator = DB::table("producator")->where('admin', '0')
            ->where('nume', 'like', "%$query%")
            ->select("producator.*",
                DB::raw("(SELECT judet.nume FROM judet
                                WHERE judet.id = producator.judet
                                GROUP BY judet.nume) as judet"),
                DB::raw("(SELECT localitate.nume FROM localitate
                                WHERE localitate.id = producator.localitate
                                GROUP BY localitate.nume) as localitate"))
            ->paginate(12);
        return view('layouts.producatorpag', compact('utilizator'));
    }
}
