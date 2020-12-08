<?php

namespace App\Controllers;

use App\Models\Contact;

class ContactController extends CoreController
{
    public function contact()
    {
        $this->show('contact');
    }

    public function contactCreate()
    {
        $nom = isset($_POST['nom']) ? $_POST['nom'] : false;
        $prenom = isset($_POST['prenom']) ? $_POST['prenom'] : false;
        $societe = isset($_POST['societe']) ? $_POST['societe'] : false;
        $email = isset($_POST['email']) ? $_POST['email'] : false;
        $objet = isset($_POST['objet']) ? $_POST['objet'] : false;
        $message = isset($_POST['message']) ? $_POST['message'] : false;

        $newContact = new Contact();
        $newContact->setNom($nom);
        $newContact->setPrenom($prenom);
        $newContact->setSociete($societe);
        $newContact->setEmail($email);
        $newContact->setObjet($objet);
        $newContact->setMessage($message);

        $newContact->save();
        global $router;
        header('Location: ' . $router->generate('contact'));
        exit;   
    }
}