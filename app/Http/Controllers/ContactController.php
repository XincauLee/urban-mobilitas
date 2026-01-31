<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;
use App\Rules\Recaptcha; // Wajib ada

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
            'g-recaptcha-response' => ['required', new Recaptcha], // Memanggil class Recaptcha
        ]);

        // Hapus field captcha agar tidak error saat insert ke database
        unset($validated['g-recaptcha-response']);

        // Simpan ke database
        ContactMessage::create($validated);

        return back()->with('success', 'Pesan Anda berhasil dikirim!');
    }
}
