<?php

namespace App\Controllers;

use App\Models\TableModel;

class Test extends BaseController
{
    public function getTesting()
    {


        echo view('templates/header');
        echo view('templates/test');
        echo view('templates/footer');
    }
    public function postTesting()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Mit $_POST kannst du auf die Daten zugreifen, die durch das POST-Formular übermittelt wurden
            $username = $_POST["username"];
            $password = $_POST["password"];

            // Hier kannst du die erhaltenen Daten weiter verarbeiten
            echo "Benutzername: " . $username . "<br>";
            echo "Passwort: " . $password;
        }

    }
}
