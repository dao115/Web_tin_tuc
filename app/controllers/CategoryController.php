<?php
namespace App\Controllers;
use App\Models\Category;
class CategoryController extends BaseController{
    protected $categoryModel;
    public function __construct(){
        $this->categoryModel = new Category();
    }
    public function index()
    {
      $categorys = $this->categoryModel->getCategorys();
      return $this->render('category.list', compact('categorys'));
    }
    public function create()
    {
      return $this->render('category.add');
  
    }
    public function store(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $name=$_POST['name'];
        }
        $this->categoryModel->addCategory($name);
        header('Location:'.BASE_URL.'list-category');
        exit;
        
    }
    public function edit($id)
    {
      $category = $this->categoryModel->getCategoryById($id);
      return $this->render('category.edit', compact('category'));
    }
    public function update($id)
    {
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        session_start();
        $_SESSION['errors'] = [];
        $_SESSION['success'] = '';
        $name = $_POST['name'];
        
        if (!empty($_SESSION['errors'])) {
          header("Location: " . BASE_URL . "update-category/$id?msg=error");
          exit;
        }
  
       
        $this->categoryModel->updateCategory($id, $name);
        header("Location:" . BASE_URL . 'list-category');
      }
    }
    public function delete($id)
  {
    $this->categoryModel->deleteCategory($id);
    header("Location:" . BASE_URL . 'list-category');
  }
}