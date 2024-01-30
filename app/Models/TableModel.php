<?php
namespace App\Models;
use CodeIgniter\Model;
use CodeIgniter\Database\RawSql;

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
        $result=$this->db->query('SELECT spalten.*, boards.Board FROM spalten JOIN boards ON spalten.BoardsId = boards.Id');
        return $result->getResultArray();
    }
    public function postSpalten_New()
    {
        $builder=$this->db->table('spalten');
        //$this->spalten = $this->db->table('spalten');
        //$this->spalten->insert($data);
        $builder->set($_POST);
    }
    public function delSpalte($id)
    {
        $builder=$this->db->table('tasks');
        $builder->where('spaltenid',$id);
        $builder->delete();
        $builder=$this->db->table('spalten');
        $builder->where('id',$id);
        $builder->delete();
    }
    public function get1Spalte($id):array
    {
        if ($id !=0){
            $sql="SELECT spalten.* FROM spalten WHERE spalten.Id = ".$id;
            $result=$this->db->query($sql);
            return $result->getRowArray();
        }
        return [];

    }
}

