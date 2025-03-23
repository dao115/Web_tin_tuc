<?php
namespace App\Controllers;

use App\Models\User;

class AuthController extends BaseController
{
    // Hiển thị form đăng nhập
    public function index()
    {
        return $this->render('client.login');
    }

    // Xử lý đăng nhập
    public function login_post()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        if (empty($email) || empty($password)) {
            return $this->render('client.login');
        }

        $userModel = new User();
        $user = $userModel->checkLogin($email, $password);

        if (!$user) {
            echo "ko";
        }

        $_SESSION['user'] = $user;

        header('Location:'.BASE_URL.'list-course');
        exit;
    }

    // Xử lý đăng ký
    public function register_post()
    {
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        if (empty($fullname) || empty($email) || empty($password) || empty($confirm_password)) {
            return $this->render('client.register', ['error' => 'Vui lòng điền đầy đủ thông tin.']);
        }

        if ($password !== $confirm_password) {
            return $this->render('client.register', ['error' => 'Mật khẩu xác nhận không khớp.']);
        }

        $userModel = new User();
        $existingUser = $userModel->findByEmail($email);
        if ($existingUser) {
            return $this->render('client.register', ['error' => 'Email đã tồn tại.']);
        }

        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $userModel->create([ 'fullname' => $fullname, 'email' => $email, 'password' => $hashedPassword ]);

        header('Location:'.BASE_URL.'login');
        exit;
    }

    // Xử lý đăng xuất
    public function logout()
    {
        if (isset($_SESSION['user'])) {
            unset($_SESSION['user']);
            session_destroy();
        }
        return $this->redirect('/');
    }
}
