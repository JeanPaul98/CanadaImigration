<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\InscriptionMailable;

use Illuminate\Http\Request;

class ContactezNousController extends Controller
{
    //
    public function sendInscriptionEmail()
    {
        $data = [
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
        ];

        Mail::to($data['email'])->send(new InscriptionMailable($data));

        // Retourner une réponse ou effectuer d'autres actions après l'envoi de l'e-mail
    }
}
