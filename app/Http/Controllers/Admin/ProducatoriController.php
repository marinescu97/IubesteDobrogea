<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Producator;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ProducatoriController extends Controller
{
    public function index(Request $request): View
    {
        $fjudet = $request->input('judet');
        $flocalitate = $request->input('localitate');
        $ordonare = $request->input('ordonare');

        if(!empty($ordonare))
        {
            if(!empty($fjudet))
            {
                if(!empty($flocalitate))
                {
                    $producatori = Producator::where('admin', '0')
                                    ->where('judet', $fjudet)
                                    ->where('localitate', $flocalitate)
                                    ->select("producator.*",
                                    DB::raw("(SELECT judet.nume FROM judet
                                                WHERE judet.id = producator.judet
                                                GROUP BY judet.nume) as judet"),
                                    DB::raw("(SELECT localitate.nume FROM localitate
                                                WHERE localitate.id = producator.localitate
                                                GROUP BY localitate.nume) as localitate"))
                                    ->orderBy($ordonare)
                                    ->paginate(6);
                }else
                {
                    $producatori = Producator::where('admin', '0')
                                    ->where('judet', $fjudet)
                                    ->select("producator.*",
                                                DB::raw("(SELECT judet.nume FROM judet
                                                            WHERE judet.id = producator.judet
                                                            GROUP BY judet.nume) as judet"),
                                                DB::raw("(SELECT localitate.nume FROM localitate
                                                            WHERE localitate.id = producator.localitate
                                                            GROUP BY localitate.nume) as localitate"))
                                    ->orderBy($ordonare)
                                    ->paginate(6);
                }
            }else
            {
                $producatori = Producator::where('admin', '0')
                                    ->select("producator.*",
                                    DB::raw("(SELECT judet.nume FROM judet
                                                WHERE judet.id = producator.judet
                                                GROUP BY judet.nume) as judet"),
                                    DB::raw("(SELECT localitate.nume FROM localitate
                                                WHERE localitate.id = producator.localitate
                                                GROUP BY localitate.nume) as localitate"))
                                    ->orderBy($ordonare)
                                    ->paginate(6);
            }
        }else
        {
            if(!empty($fjudet))
            {
                if(!empty($flocalitate))
                {
                    $producatori = Producator::where('admin', '0')
                                    ->where('judet', $fjudet)
                                    ->where('localitate', $flocalitate)
                                    ->select("producator.*",
                                    DB::raw("(SELECT judet.nume FROM judet
                                                WHERE judet.id = producator.judet
                                                GROUP BY judet.nume) as judet"),
                                    DB::raw("(SELECT localitate.nume FROM localitate
                                                WHERE localitate.id = producator.localitate
                                                GROUP BY localitate.nume) as localitate"))
                                    ->orderBy('created_at', 'DESC')
                                    ->paginate(6);
                }else
                {
                    $producatori = Producator::where('admin', '0')
                                    ->where('judet', $fjudet)
                                    ->select("producator.*",
                                                DB::raw("(SELECT judet.nume FROM judet
                                                            WHERE judet.id = producator.judet
                                                            GROUP BY judet.nume) as judet"),
                                                DB::raw("(SELECT localitate.nume FROM localitate
                                                            WHERE localitate.id = producator.localitate
                                                            GROUP BY localitate.nume) as localitate"))
                                    ->orderBy('created_at','desc')
                                    ->paginate(6);
                }
            }else
            {
                $producatori = Producator::where('admin', '0')
                                    ->select("producator.*",
                                    DB::raw("(SELECT judet.nume FROM judet
                                                WHERE judet.id = producator.judet
                                                GROUP BY judet.nume) as judet"),
                                    DB::raw("(SELECT localitate.nume FROM localitate
                                                WHERE localitate.id = producator.localitate
                                                GROUP BY localitate.nume) as localitate"))
                                    ->orderBy('created_at', 'DESC')
                                    ->paginate(6);
            }
        }
        return view('admin.producatori',compact('producatori'));
    }

    public function stergere($id): RedirectResponse
    {
        Producator::where('id', $id)->delete();
        return back()->with('success','Producatorul a fost sters cu succes');
    }
}
