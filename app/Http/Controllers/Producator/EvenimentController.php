<?php

namespace App\Http\Controllers\Producator;

use App\Http\Controllers\Controller;
use App\Models\DetaliiEveniment;
use App\Models\Eveniment;
use App\Models\Judet;
use App\Models\Localitate;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class EvenimentController extends Controller
{
    public function index(): View
    {
        $judet = Judet::get();
        return view('producator.adaugare_eveniment', compact('judet'));
    }

    public function afiseazaLocalitati($id): JsonResponse
    {
        $localitati = Localitate::where('judet',$id)->pluck('nume','id');
        return response()->json($localitati);
    }
    public function adaugare(Request $request){
        $validator = Validator::make($request->all(), [
            'titlu' => 'required|string|max:70',
            'data' => 'required|after:today',
            'ora' => 'required',
            'imagine.*' => 'image'
        ], [
            'required' => 'Campul :attribute este obligatoriu.',
            'titlu.max' => 'Campul :attribute trebuie sa contina maxim :max caractere.',
            'titlu.string' => 'Campul :attribute trebuie sa contina un sir de caractere caractere.',
            'data.after' => 'Data trebuie sa inceapa de maine.',
            'imagine.*.image' => 'Fisierele trebuie sa fie imagini.',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)
            ->withInput();
        } else {
            $eveniment = new Eveniment;
            $eveniment->titlu=$request->input('titlu');
            $eveniment->data=$request->input('data');
            $eveniment->ora=$request->input('ora');
            $eveniment->judet=$request->input('judet');
            $eveniment->localitate=$request->input('localitate');
            $eveniment->save();
            $last=$eveniment->id;

            if($fisiere=$request->file('imagine')){
                foreach($fisiere as $fisier){
                    $nume=$fisier->getClientOriginalName();
                    $nume= time().'_'.$nume;
                    $fisier->move('storage/evenimente',$nume);
                }
            }

            $imagine = $request->file('imagine');
            $descriere = $request->descriere;

             for($count = 0; $count < count($imagine); $count++) {
                for($i=0; $i < count($descriere); $i++) {
                $nume=$imagine[$count]->getClientOriginalName();
                $nume= time().'_'.$nume;
                $data = array(
                    'imagine' => $nume,
                    'descriere'  => $descriere[$count],
                    'eveniment' => $last,
                    'created_at' => now()
                   );
                 }

                $insert_data[] = $data;
             }

              DetaliiEveniment::insert($insert_data);
              return back()->with('success', 'Evenimentul a fost adaugat cu succes!');
        }
    }
}
