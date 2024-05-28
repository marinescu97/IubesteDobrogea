<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Producator;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class NewPasswordController extends Controller
{
    /**
     * Display the password reset view.
     */
    public function create(Request $request): View
    {
        return view('auth.reset-password', ['token' => $request->token]);
    }

    /**
     * Handle an incoming new password request.
     *
     * @throws ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $utilizator = Producator::where('remember_token', $request->token)->first();

        if (!empty($utilizator)) {
            if ($request->password === $request->confirmPassword){
                $utilizator->parola = bcrypt($request->password);
                $utilizator->remember_token = Str::random(40);
                $utilizator->save();
                return redirect()->back()->with('success', 'Parola a fost schimbata cu succes');
            } else{
                return redirect()->back()->with('error', 'Parolele nu se potrivesc!');
            }
        } else {
            abort(404);
        }
    }
}
