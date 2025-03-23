<?php
namespace App\Controllers;
use App\Models\UserModel;

class UserController extends BaseController
{
    public $user;

    public function __construct()
    {
        $this->user = new UserModel();
    }

    public function index()
    {
        $users = $this->user->getuser();

        return $this->render('user.list', compact('users'));
    }

    public function adduser()
    {
        return $this->render('user.add');
    }

    public function postuser()
    {
        // validate form
        if (isset($_POST['gui'])) {
            $error = [];
            // rỗng
            if (empty($_POST['name'])) {
                $error[] = "Bạn vui lòng nhập tên";
            }
            if (empty($_POST['phone'])) {
                $error[] = "Bạn vui lòng nhập SĐT";
            }
            if (count($error) >= 1) {
                flash('errors', $error, 'add-user');
            } else {
                $check = $this->user->adduser(null, $_POST['name'], $_POST['phone']);
                if ($check) {
                    flash('success', "Thêm thành công", 'list-user');
                }
            }
        }

    }

    public function detail($id)
    {
        $users = $this->user->detailuser($id);
        return $this->render('user.edit', compact('users'));
    }

    public function edituser($id)
    {
        // validate form
        if (isset($_POST['gui'])) {
            $error = [];
            // rỗng
            if (empty($_POST['name'])) {
                $error[] = "Bạn vui lòng nhập tên";
            }
            if (empty($_POST['phone'])) {
                $error[] = "Bạn vui lòng nhập SĐt";
            }
            if (count($error) >= 1) {
                flash('errors', $error, 'detail-user/' . $id);
            } else {
                $check = $this->user->updateuser($id, $_POST['name'], $_POST['phone']);
                if ($check) {
                    flash('success', "Sửa thành công", 'list-user');
                }
            }
        }

    }
    public function delete($id)
    {
      $this->user->deleteuser($id);
      header("Location:" . BASE_URL . 'list-user');
    }

}


?>