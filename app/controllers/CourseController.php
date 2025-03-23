<?php
namespace App\Controllers;

use App\Models\Course;

class CourseController extends BaseController
{
  protected $courseModel;

  public function __construct()
  {
    $this->courseModel = new Course();
  }

  // Hiển thị danh sách khóa học
  public function index()
  {
    $courses = $this->courseModel->getCourses();
    return $this->render('course.list', compact('courses'));

  }

  // Hiển thị form thêm khóa học
  public function create()
  {
    return $this->render('course.add');

  }

  // Xử lý thêm khóa học
  public function store()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      session_start();
      $_SESSION['errors'] = [];
      $name = $_POST['name'];
      $price = $_POST['price'];
      $phone = $_POST['phone'];
      $email = $_POST['email'];
      $category = $_POST['category'];
      $description = $_POST['descriipt'];
      $lecturer = $_POST['lecturer'];
      $course_duration = $_POST['course_duration'];
      if (empty($name))
        $_SESSION['errors'][] = 'Tên khóa học không được để trống';
      if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        $_SESSION['errors'][] = 'Email không hợp lệ';
      if (!preg_match('/^\d{10,11}$/', $phone))
        $_SESSION['errors'][] = 'Số điện thoại không hợp lệ';
      if (!is_numeric($price) || $price < 0)
        $_SESSION['errors'][] = 'Giá tiền không hợp lệ';

      if (!empty($_SESSION['errors'])) {
        header("Location: " . BASE_URL . "add-course?msg=error");
        exit;
      }

      // var_dump($_POST);
      // die();
      // Xử lý upload ảnh
      $image = '';
      if (!empty($_FILES['image'])) {


        $image = time() . '_' . $_FILES['image']['name'];

        $upload_dir = __DIR__ . '/../../public/uploads/';
        if (!is_dir($upload_dir)) {
          mkdir($upload_dir, 0777, true);
        }

        $fileDesnition = $upload_dir . $image;

        move_uploaded_file($_FILES['image']['tmp_name'], $fileDesnition);


      }
      $this->courseModel->addCourse($name, $image, $price, $phone, $email, $category, $description, $lecturer, $course_duration);
      $_SESSION['success'] = 'Thêm khóa học thành công';
      header("Location: " . BASE_URL . "list-course?msg=success");
    }
  }

  // Hiển thị form chỉnh sửa
  public function edit($id)
  {
    $course = $this->courseModel->getCourseById($id);
    return $this->render('course.edit', compact('course'));
  }

  // Xử lý cập nhật khóa học
  public function update($id)
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      session_start();
      $_SESSION['errors'] = [];
      $_SESSION['success'] = '';
      $name = $_POST['name'];
      $price = $_POST['price'];
      $phone = $_POST['phone'];
      $email = $_POST['email'];
      $category = $_POST['category'];
      $description = $_POST['descriipt'];
      $lecturer = $_POST['lecturer'];
      $course_duration = $_POST['course_duration'];
      if (empty($name))
        $_SESSION['errors'][] = 'Tên khóa học không được để trống';
      if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        $_SESSION['errors'][] = 'Email không hợp lệ';
      if (!preg_match('/^\d{10,11}$/', $phone))
        $_SESSION['errors'][] = 'Số điện thoại không hợp lệ';
      if (!is_numeric($price) || $price < 0)
        $_SESSION['errors'][] = 'Giá tiền không hợp lệ';

      if (!empty($_SESSION['errors'])) {
        header("Location: " . BASE_URL . "update-course/$id?msg=error");
        exit;
      }

      // Xử lý upload ảnh
      $image = $_POST['old_image'];
      $upload_dir = __DIR__ . '/../../public/uploads/';

      // Kiểm tra và tạo thư mục nếu chưa tồn tại
      if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0777, true);
      }

      $image = $_POST['old_image']; // Giữ lại ảnh cũ nếu không có ảnh mới

      if (!empty($_FILES['image']['name'])) {
        $image = time() . '_' . basename($_FILES['image']['name']);
        $fileDestination = $upload_dir . $image;

        if (!move_uploaded_file($_FILES['image']['tmp_name'], $fileDestination)) {
          die("Lỗi khi di chuyển file!");
        }
      }


      $this->courseModel->updateCourse($id, $name, $image, $price, $phone, $email, $category, $description, $lecturer, $course_duration);
      header("Location:" . BASE_URL . 'list-course');
    }
  }

  // Xóa khóa học
  public function delete($id)
  {
    $this->courseModel->deleteCourse($id);
    header("Location:" . BASE_URL . 'list-course');
  }
}
?>