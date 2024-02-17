<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function store(Request $request)
    {
        $message = new Message;

        $message->name = $request->name;
        $message->email = $request->email;
        $message->subject = $request->subject;
        $message->message = $request->message;

        $message->save();

        // Redirigez l'utilisateur vers la page de contact avec un message de succès
        return back()->with('success', 'Votre message a été envoyé avec succès!');
    }
}
