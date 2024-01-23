<?php
namespace App\Models;
use CodeIgniter\Model;

class TableModel extends Model
{
    public function getBoards(): array
    {
        $result=$this->db->query('SELECT * FROM boards');
        return $result->getResultArray();
    }
    public function getTasks(): array
    {
        $result=$this->db->query('SELECT * FROM tasks');
        return $result->getResultArray();
    }
    public function getPersonen(): array
    {
        $result=$this->db->query('SELECT * FROM personen');
        return $result->getResultArray();
    }

    public function getSpalten():array
    {
        $result=$this->db->query('SELECT * FROM spalten');
        return $result->getResultArray();
    }

}

