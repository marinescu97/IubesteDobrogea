<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function listaMesaje(): View
    {
        $mesaje = Contact::get();
        return view('admin.listamesaje', compact('mesaje'));
    }
    public function stergereMesaj($id): RedirectResponse
    {
        Contact::where('id', $id)->delete();
            return back()->with('success','Mesajul a fost sters cu succes');
    }
}
