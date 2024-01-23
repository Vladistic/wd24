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
}
