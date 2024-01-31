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
    public function postSpalten_edit()
    {
        $builder=$this->db->table('spalten');
        $builder->set('SortId',$_POST['sortId']);
        $builder->set('Spalte',$_POST['spalte']);
        $builder->set('Spaltenbeschreibung',$_POST['spaltenbeschreibung']);
        $builder->where('Id',$_POST['Id']);
        $builder->where('BoardsId', $_POST['boardsId']);
        $builder->update();

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

    public function postSpalten_New()
    {
        $builder=$this->db->table('spalten');
        $builder->set('SortId',$_POST['sortId']);
        $builder->set('Spalte',$_POST['spalte']);
        $builder->set('Spaltenbeschreibung',$_POST['spaltenbeschreibung']);
        $builder->set('BoardsId',$_POST['boardsId']);
        $builder->insert();
    }

    public function postBoard_New()
    {
        $builder=$this->db->table('boards');
        $builder->set('Board',$_POST['Board']);
        $builder->insert();
    }

    public function postBoard_edit()
    {
        $builder=$this->db->table('boards');
        $builder->set('Board',$_POST['Board']);
        $builder->where('Id',$_POST['Id']);
        $builder->update();

    }

    public function delBoard($id)
    {
        $cols=$this->getSpalten();

        $builder=$this->db->table('tasks');

        foreach ($cols as $col){
            if ($col['BoardsId']==$id){
                $builder->where('spaltenid', $col['Id']);
            }
        }
        $builder->delete();
        $builder=$this->db->table('spalten');
        $builder->where('boardsId',$id);
        $builder->delete();
        $builder=$this->db->table('boards');
        $builder->where('id',$id);
        $builder->delete();
    }

    public function get1Board(int $id): ?array
    {
        if ($id !=0){
            $sql="SELECT boards.* FROM boards WHERE boards.Id = ".$id;
            $result=$this->db->query($sql);
            return $result->getRowArray();
        }
        return [];
    }
}

