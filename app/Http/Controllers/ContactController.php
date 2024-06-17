<?php

// app/Http/Controllers/ContactController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;


class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact');
    }

    public function submitForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Contact::create([
            'email' => $request->email,
            'message' => $request->message,
        ]);

        return redirect()->back()->with('success', 'Message envoyé avec succès!');
    }

    public function showMessages()
    {
        $contacts = Contact::all();
        return view('admin.messages', compact('contacts'));
    }

    public function index()
    {
        // Vérifier si l'utilisateur est connecté
        if (!auth()->check()) {
            // Utilisateur non connecté, rediriger vers la page de connexion
            return redirect()->route('login');
        }

        // Utilisateur connecté, récupérer tous les contacts
        $contacts = Contact::all();

        // Passer les contacts à la vue 'messages'
        return view('messages', compact('contacts'));
    }
}
