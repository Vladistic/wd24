<?php

namespace App\Controllers;

use App\Models\TableModel;

class Spalten extends BaseController
{
    public function getSpalten()
    {
        $table = new TableModel();
        $data['spalten'] = $table->getSpalten();

        echo view('templates/header');
        echo view('templates/spalten', $data);
        echo view('templates/footer');
    }
    public function getEdit(int $id)
    {
        $table = new TableModel();
        $data['spalte'] = $table->get1Spalte($id);
        $data['boards'] = $table->getBoards();
        $data['spalten'] = $table->getSpalten();

        echo view('templates/header');
        echo view('templates/ced', $data);
        echo view('templates/footer');
    }
    public function getDelete($id)
    {
        $table = new TableModel();

        $table->delSpalte($id);
        $this->getSpalten();
    }
    public function postEdit()
    {
        $rules =[
            'sortId' => 'required|integer',
            'spalte' => 'required',
            'spaltenbeschreibung'=>'required'
        ];
        if ($this->validateData($_POST, $rules)){

            var_dump($_POST);
            $table = new TableModel();
            $table->postSpalten_edit();
            $this->getSpalten();
        } else{
            return view('templates/header')
                . view('templates/err_spalten')
                . view('templates/footer');
        }

        /*var_dump($_POST);
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Mit $_POST kannst du auf die Daten zugreifen, die durch das POST-Formular übermittelt wurden
            $id = $_POST["Id"];
            //$boardsId = $_POST["boardsId"];
            $sortId=$_POST["sortId"];
            $spalte=$_POST["spalte"];
            $spaltenbeschreibung=$_POST["spaltenbeschreibung"];

            // Hier kannst du die erhaltenen Daten weiter verarbeiten
            echo "id: " . $id . "<br>";
            //echo "boardsId: " . $boardsId . "<br>";
            echo "sortId: " . $sortId . "<br>";
            echo "spalte: " . $spalte . "<br>";
            echo "spaltenbeschreibung: " . $spaltenbeschreibung . "<br>";

        }*/
    }
    public function postNew()
    {
        $table = new TableModel();
        $table->postSpalten_New();
        $this->getSpalten();
    }


}
