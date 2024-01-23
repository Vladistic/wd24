<?php

namespace App\Controllers;

use App\Models\TableModel;

class Tasks extends BaseController
{
    public function getTasks()
    {
        $table = new TableModel();
        $data['tasks'] = $table->getTasks();
        $data['personen']=$table->getPersonen();
        $data['boards']=$table->getBoards();

        echo view('templates/header');
        echo view('templates/tasks', $data);
        echo view('templates/footer');
    }
}
