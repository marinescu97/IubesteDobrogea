<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

/**
 * @method validate(Request $request, string[] $array, string[] $array1)
 */
class ContactController extends Controller
{
    public function afiseazaFormular(): View
    {
        return view('contact');
    }
    public function adaugare(Request $request): RedirectResponse
    {
        $request->validate([
            'nume' => 'required|string|max:25',
            'prenume' => 'required|string|max:50',
            'email' => 'string|max:50',
            'mesaj' => 'string|required'
        ],[
            'required' => 'Campul este obligatoriu.',
            'max' => 'Campul trebuie sa contina maxim :max caractere.',
            'string' => 'Campul trebuie sa contina un sir de caractere.',
        ]);

        Contact::create([
            'nume' => $request['nume'],
            'prenume' => $request['prenume'],
            'email' => $request['email'],
            'mesaj' => $request['mesaj'],
            'created_at' => now()
        ]);

        return back()->with('success','Mesajul a fost trimis cu succes!');
    }
}
