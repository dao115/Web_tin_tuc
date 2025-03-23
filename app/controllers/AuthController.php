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
