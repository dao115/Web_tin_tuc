<?php
namespace App\Models;

class UserModel extends BaseModel
{
    protected $table = "giangvien";

    public function getuser()
    {
        $sql = "SELECT * FROM $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function adduser($id, $name, $phone)
    {
        $sql = "INSERT INTO $this->table VALUES (?, ?, ?)";
        $this->setQuery($sql);
        return $this->execute([$id, $name, $phone]);
    }

    public function detailuser($id)
    {
        $sql = "SELECT * FROM $this->table WHERE id = ?";
        return $this->loadRow($sql,[$id]);
    }

    public function updateuser($id, $name, $phone)
    {
        $sql = "UPDATE $this->table SET name= ?, phone = ? WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute([$name, $phone, $id]);
    }
    public function deleteuser($id)
    {
        $sql = "DELETE FROM $this->table WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute([$id]);
    }
}


?>