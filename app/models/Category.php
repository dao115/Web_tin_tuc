<?php
namespace App\Models;

class Category extends BaseModel
{
    protected $table = 'danhmuc';

    // Lấy tất cả khóa học
    public function getCategorys()
    {
        $sql = "SELECT * FROM $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    // Lấy khóa học theo ID
    public function getCategoryById($id)
    {
        $sql = "SELECT * FROM $this->table WHERE id = ?";
        return $this->loadRow($sql,[$id]);
    }

    // Thêm khóa học mới
    public function addCategory($name)
    {
        $sql = "INSERT INTO $this->table (name) VALUES (?)";
        $this->setQuery($sql);
        return $this->execute([$name]);
    }

    // Cập nhật khóa học
    public function updateCategory($id, $name)
    {
       

        $sql = "UPDATE $this->table 
                SET name=?
                WHERE id=?";

        $this->setQuery($sql);
        return $this->execute([$name, $id]);
    }


    // Xóa khóa học
    public function deleteCategory($id)
    {
        $sql = "DELETE FROM $this->table WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute([$id]);
    }
}
?>