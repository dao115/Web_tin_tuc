<?php
namespace App\Models;

class Course extends BaseModel
{
    protected $table = 'khoahoc';

    // Lấy tất cả khóa học
    public function getCourses()
    {
        $sql = "SELECT * FROM $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    // Lấy khóa học theo ID
    public function getCourseById($id)
    {
        $sql = "SELECT * FROM $this->table WHERE id = ?";
        return $this->loadRow($sql,[$id]);
    }

    // Thêm khóa học mới
    public function addCourse($name, $image, $price, $phone, $email, $category, $descriipt, $lecturer, $course_duration)
    {
        $sql = "INSERT INTO $this->table (name, image, price, phone, email, category, descriipt, lecturer, course_duration) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $this->setQuery($sql);
        return $this->execute([$name, $image, $price, $phone, $email, $category, $descriipt, $lecturer, $course_duration]);
    }

    // Cập nhật khóa học
    public function updateCourse($id, $name, $image, $price, $phone, $email, $category, $descriipt, $lecturer, $course_duration)
    {
        // Đảm bảo nếu ngày tháng rỗng, gán NULL thay vì chuỗi rỗng ''
        $course_duration = !empty($course_duration) ? $course_duration : null;

        $sql = "UPDATE $this->table 
                SET name=?, image=?, price=?, phone=?, email=?, category=?, descriipt=?, lecturer=?, course_duration=? 
                WHERE id=?";

        $this->setQuery($sql);
        return $this->execute([$name, $image, $price, $phone, $email, $category, $descriipt, $lecturer, $course_duration, $id]);
    }


    // Xóa khóa học
    public function deleteCourse($id)
    {
        $sql = "DELETE FROM $this->table WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute([$id]);
    }
}
?>