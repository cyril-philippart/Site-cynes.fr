<?php

namespace App\Controllers;

use App\Models\Contact;
use App\Models\Home;

class ContactController extends CoreController
{
    public function contact()
    {
        $allElement = Home::findAll();
        $this->show('contact', [
            'allElement' => $allElement
        ]);
    }

    public function contactCreate()
    {
        $nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_STRING);
        $prenom = filter_input(INPUT_POST, 'prenom', FILTER_SANITIZE_STRING);
        $societe = filter_input(INPUT_POST, 'societe', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $objet = filter_input(INPUT_POST, 'objet', FILTER_SANITIZE_STRING);
        $message= filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

        if ($nom != false || $prenom != false || $email != false || $objet != false || $message != false)
        {
            $messageValidation = 'Votre message à bien été envoyé';
        }

        $newContact = new Contact();
        $newContact->setNom($nom);
        $newContact->setPrenom($prenom);
        $newContact->setSociete($societe);
        $newContact->setEmail($email);
        $newContact->setObjet($objet);
        $newContact->setMessage($message);

        if(!empty($messageValidation))
        {
            $newContact->save();
            $this->show('contact', [
                'messageValidation' => $messageValidation
            ]);  
        } 
    }
}