<?php

use Phroute\Phroute\RouteCollector;

$url = !isset($_GET['url']) ? "/" : $_GET['url'];
try {
    $router = new RouteCollector();

    // filter check đăng nhập
    $router->filter('auth', function () {
        if (!isset($_SESSION['auth']) || empty($_SESSION['auth'])) {
            header('location: ' . BASE_URL . 'login');
            die;
        }
    });

    // khu vực cần quan tâm -----------
    // bắt đầu định nghĩa ra các đường dẫn
    $router->get('/', [App\Controllers\HomeController::class, 'index']);  // Trang chủ
    $router->get('login', [App\Controllers\AuthController::class, 'index']);

    $router->post('login_post', [App\Controllers\AuthController::class, 'login_post']);
    // $router->post('login_post', function (){
    //     echo '111';
    // });


    //định nghĩa đường dẫn trỏ đến user Controller
    $router->get('list-user', [App\Controllers\UserController::class, 'index']);
    $router->get('add-user', [App\Controllers\UserController::class, 'adduser']);
    $router->post('post-user', [App\Controllers\UserController::class, 'postuser']);
    $router->get('detail-user/{id}', [App\Controllers\UserController::class, 'detail']);
    $router->post('edit-user/{id}', [App\Controllers\UserController::class, 'edituser']);
    $router->get('delete-user/{id}', [App\Controllers\UserController::class, 'delete']);
    $router->get('list-course', [App\Controllers\CourseController::class, 'index']);
    $router->get('add-course', [App\Controllers\CourseController::class, 'create']);
    $router->post('store-course', [App\Controllers\CourseController::class, 'store']);
    $router->get('edit-course/{id}', [App\Controllers\CourseController::class, 'edit']);
    $router->post('update-course/{id}', [App\Controllers\CourseController::class, 'update']);
    $router->get('delete-course/{id}', [App\Controllers\CourseController::class, 'delete']);
    $router->get('list-category', [App\Controllers\CategoryController::class, 'index']);
    $router->get('add-category', [App\Controllers\CategoryController::class, 'create']);
    $router->post('store-category', [App\Controllers\CategoryController::class, 'store']);
    $router->get('edit-category/{id}', [App\Controllers\CategoryController::class, 'edit']);
    $router->post('update-category/{id}', [App\Controllers\CategoryController::class, 'update']);
    $router->get('delete-category/{id}', [App\Controllers\CategoryController::class, 'delete']);
    $router->get('list-time',[App\Controllers\TimeController::class,'index']);
    $router->get('add-time',[App\Controllers\TimeController::class,'add']);
    $router->post('store-time',[App\Controllers\TimeController::class,'store']);



    // khu vực cần quan tâm -----------
    //$router->get('test', [App\Controllers\userController::class, 'index']);

    # NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
    $dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

    $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

    // Print out the value returned from the dispatched function
    echo $response;
} catch (Exception $e) {
    var_dump($e->getMessage());
    die;
}


?>