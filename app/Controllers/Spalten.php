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
    public function getEdit($id)
    {

        echo view('templates/header');
        echo view('templates/editspalte', $id);
        echo view('templates/footer');
    }
    public function getDelete()
    {
        $this->getSpalten();
    }
}
