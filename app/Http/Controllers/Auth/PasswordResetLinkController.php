<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\ForgotPasswordMail;
use App\Models\Producator;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;
use Illuminate\Support\Str;


class PasswordResetLinkController extends Controller
{
    /**
     * Display the password reset link request view.
     */
    public function create(): View
    {
        return view('auth.password.email');
    }

    /**
     * Handle an incoming password reset link request.
     */
    public function store(Request $request): RedirectResponse
    {
        $utilizator = Producator::where('email', $request->email)->first();

        if ($utilizator !== null) {
            $utilizator->remember_token = Str::random(40);
            $utilizator->save();

            DB::table('resetare_parola')->insert([
                'email' => $utilizator->email,
                'token' => $utilizator->remember_token,
                'created_at' => now(),
            ]);

            Mail::to($utilizator->email)->send(new ForgotPasswordMail($utilizator));

            return redirect()->back()->with('success', 'Link-ul a fost trimis cu succes!');
        } else {
            return redirect()->back()->with('error', 'Acest email nu a fost gasit!');
        }
    }
}
