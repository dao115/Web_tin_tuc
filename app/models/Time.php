<?php
namespace App\Models;
class Time extends BaseModel{
    protected $table='cahoc';
    public function getTime(){
        $sql ="SELECT * FROM $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function addTime($name, $tgian){
        $sql ="INSERT INTO $this->table (tenca, thoigian) VALUES (?, ?)";
        $this->setQuery($sql);
        return $this->execute([$name, $tgian]);
    }
    public function updateTime($id, $name, $tgian){
        $sql="UPDATE $this->table SET tenca=?,thoigian=? WHERE $id";
        $this->setQuery($sql);
        return $this->execute([$name, $tgian, $id]);
    }
    
}