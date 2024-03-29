<?php

namespace App\Controllers;

use App\Models\TableModel;

class Home extends BaseController
{
    public function index()
    {
        $table = new TableModel();
        $data['boards'] = $table->getBoards();

        echo view('templates/header');
        echo view('templates/boards', $data);
        echo view('templates/footer');
    }
}
