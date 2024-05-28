<?php

namespace App\Http\Controllers\Producator;

use App\Http\Controllers\Controller;
use App\Models\Judet;
use App\Models\Localitate;
use App\Models\Producator;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;


class SetariController extends Controller
{
    /**
     * Show the application layout
     */
    public function index(): View
    {
        $judet = DB::table('producator')
                    ->where('producator.id', Auth::user()->id)
                    ->join('judet', 'producator.judet', '=', 'judet.id')
                    ->value('judet.nume');
        $localitate = DB::table('producator')
                    ->where('producator.id', Auth::user()->id)
                    ->join('localitate', 'producator.localitate', '=', 'localitate.id')
                    ->value('localitate.nume');
         $judete = Judet::get();

        if (Auth::user()->admin == 1) {
            return view('admin.profil',compact('judet','localitate','judete'));
        }
        return view('producator.setari',compact('judet','localitate','judete'));
    }

    public function afiseazaLocalitati($id): JsonResponse
    {
        $localitati = Localitate::where('judet',$id)->pluck('nume','id');
        return response()->json($localitati);
    }

    public function setari(Request $request): RedirectResponse
    {
        $request->validate([
            'nume' => ['string', 'max:50'],
            'prenume' => ['string', 'max:50'],
            'email' => ['string', 'email', 'max:50'],
            'telefon' => ['string', 'max:10'],
            'adresa' => ['string', 'max:100'],
            'parola' => ['string', 'min:8', 'confirmed'],
			'avatar' => 'mimes:jpeg,jpg,png,gif|max:200',
			'descriere' => ['string','nullable'],
        ]);

    	Producator::where('id', Auth::user()->id)
            ->update([
            	'nume' => $request['nume'],
            	'prenume' => $request['prenume'],
            	'adresa' => $request['adresa'],
                'judet' => $request['judete'],
                'localitate' => $request['localitati'],
        		'email' => $request['email'],
        		'telefon' => $request['telefon'],
                'descriere' => $request['descriere'],
                'updated_at' => now(),
                ]);

        if(request()->hasFile('avatar')){
            $avatar = request()->file('avatar')->getClientOriginalName();
            request()->file('avatar')->storeAs('public/profil' . '/' .$avatar, '');
            DB::table('producator')
                    ->where('producator.id', Auth::user()->id)
                    ->update(['avatar'=>$avatar]);
        }

         return back()->with('success','Profilul a fost modificat cu succes!');
    }

    public function stergereProducator(): RedirectResponse
    {
        $utilizator = Producator::find(Auth::user()->id);

        Auth::logout();
        $utilizator->delete();
            session()->flash('confirmare', 'Contul a fost sters cu succes!');
            return redirect()->route('acasa');
    }
}
