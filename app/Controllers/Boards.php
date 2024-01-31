<?php

namespace App\Controllers;

use App\Models\TableModel;

class Boards extends BaseController
{
    public function getTable_main()
    {
        $table = new TableModel();
        $data['boards'] = $table->getBoards();

        echo view('templates/header');
        echo view('templates/boards', $data);
        echo view('templates/footer');
    }
    public function getEdit(int $id)
    {
        $table = new TableModel();
        $data['board'] = $table->get1Board($id);
        $data['boards'] = $table->getBoards();

        echo view('templates/header');
        echo view('templates/ced_board', $data);
        echo view('templates/footer');
    }
    public function getDelete($id)
    {
        $table = new TableModel();

        $table->delBoard($id);
        $this->getTable_main();
    }
    public function postEdit()
    {
        $table = new TableModel();
        $table->postBoard_edit();
        $this->getTable_main();
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
        $table->postBoard_New();
        $this->getTable_main();
    }
}
