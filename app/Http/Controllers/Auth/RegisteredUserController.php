<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Judet;
use App\Models\Localitate;
use App\Models\Producator;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $judet = Judet::get();
        return view('auth.register', compact('judet'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nume' => ['required', 'string', 'max:50'],
            'prenume' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'email', 'max:50', 'unique:producator'],
            'telefon' => ['required', 'string', 'max:10'],
            'adresa' => 'required',
            'judet' => 'required',
            'localitate' => 'required',
            'parola' => ['required', 'string', 'min:8', 'confirmed'],
            'avatar' => 'mimes:jpeg,jpg,png,gif|max:10000',
        ],[
            'required' => 'Campul :attribute este obligatoriu.',
            'max' => 'Campul :attribute trebuie sa contina maxim :max caractere.',
            'string' => 'Campul :attribute trebuie sa contina un sir de caractere caractere.',
            'unique' => 'Acest email exista deja.',
            'parola.min' => 'Parola trebuie sa contina minim 8 caractere.',
            'avatar.mimes' => 'Imaginea trebuie sa contina extensia jpg,jpeg,png sau gif.',
            'confirmed' => 'Cele 2 parole nu se potrivesc'
        ]);

        $user = Producator::create([
            'nume' => $request['nume'],
            'prenume' => $request['prenume'],
            'email' => $request['email'],
            'telefon' => $request['telefon'],
            'adresa' => $request['adresa'],
            'judet' => $request['judet'],
            'localitate' => $request['localitate'],
            'descriere' => $request['descriere'],
            'parola' => Hash::make($request['parola']),
            'created_at' => now(),
        ]);

        if(request()->hasFile('avatar')){
            $avatar = request()->file('avatar')->getClientOriginalName();
            request()->file('avatar')->storeAs('public/profil' . '/' .$avatar, '');
            $user->update(['avatar'=>$avatar]);
        }

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('producator.profil', absolute: false));
    }

    public function afiseazaLocalitati($id): JsonResponse
    {
        $localitati = Localitate::where('judet',$id)->pluck('nume','id');
        return response()->json($localitati);
    }
}
