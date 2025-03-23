<?php
namespace App\Models;

class User extends BaseModel
{
    protected $table = "users";

    // Tìm user theo email
    public function findByEmail($email)
    {
        $sql = "SELECT * FROM users WHERE email = ?";
        return $this->loadRow($sql, [$email]);
    }


    // Tìm user theo ID
    public function findById($id)
    {
        return $this->loadRow(["SELECT * FROM $this->table WHERE id = ?", [$id]]);
    }

    // Kiểm tra đăng nhập
    public function checkLogin($email, $password)
    {
        $user = $this->findByEmail($email);

        if ($user && $password == $user->password) {
            return (object) [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'role' => $user->role
            ];
        }
        return false;
    }
}
