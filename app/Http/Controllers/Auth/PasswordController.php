<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Mail;
use App\Mail\PasswordChangedMail;


class PasswordController extends Controller
{

    public function edit()
    {
        return view('auth.change-password');
    }

    /**
     * Update the user's password.
     */
    public function update(Request $request): RedirectResponse
    {
        $validated = $request->validateWithBag('updatePassword', [
            'password' => ['required', 'confirmed', Password::defaults()],
        ]);

        $user = $request->user();

        // Guardar nueva contraseña
        $user->update([
            'password' => Hash::make($validated['password']),
        ]);

        // Enviar correo
        Mail::to($user->email)->send(new PasswordChangedMail($user, $validated['password']));

        return redirect()->route('password.edit')->with('status', 'Contraseña actualizada correctamente.');
    }
}
