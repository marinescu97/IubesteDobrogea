<?php

namespace App\Http\Controllers\Producator;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AnuntController extends Controller
{

    public function adaugareAnunt(Request $request): RedirectResponse
    {
        $imagini=array();
        if($fisiere=$request->file('imagini')){
            foreach($fisiere as $fisier){
                $nume=$fisier->getClientOriginalName();
                $nume= time().'_'.$nume;
                $fisier->move('storage/imaginianunt',$nume);
                $imagini[]=$nume;
            }
        }
         DB::table('anunt_eveniment')->insert([
            'anunt' => $request->input('anunt'),
            'imagini'=>  implode("|",$imagini),
            'producator' => Auth::user()->id,
            'eveniment' => $request->input('eveniment'),
            'created_at' => now(),
        ]);
        return back()->with('success','Comentariul a fost adaugat cu succes!');
    }
}
