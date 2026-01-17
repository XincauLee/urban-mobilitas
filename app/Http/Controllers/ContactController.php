<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ContactMessage;

class ContactController extends Controller
{
    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        ContactMessage::create($validated);
        return back()->with('success', 'Pesan Anda berhasil dikirim!');
    }
}