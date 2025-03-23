<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .navbar-nav .nav-item .nav-link:hover {
            color: #007bff !important;
        }
        .login_bt ul {
            list-style: none;
            display: flex;
            gap: 10px;
            padding-left: 0;
            margin-bottom: 0;
        }
        .login_bt ul li a {
            text-decoration: none;
            padding: 5px 10px;
            border-radius: 5px;
            transition: all 0.3s;
        }
        .login_bt ul li a:hover {
            background: #007bff;
            color: white;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="https://tse2.mm.bing.net/th?id=OIP.wSpP6-E35RzeH9qJGjVsagHaHa&pid=Api" width="100" height="50" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="#">Trang chủ</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Tin Tức</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Tin Mới</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Tin Đã Lưu</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Giới Thiệu</a></li>
                </ul>
                <div class="ms-3 login_bt">
                    <ul>
                        <li><a href="#" class="btn btn-outline-primary">Đăng ký</a></li>
                        <li><a href="{{BASE_URL}}login" class="btn btn-outline-success">Đăng nhập</a></li>
                        <li><a href="#" class="btn btn-outline-dark"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="https://tse1.mm.bing.net/th?id=OIP.xUVQgYQZylsp5mkqRyJi-QHaEK&pid=Api&P=0&h=220" height="200px" class="card-img-top" alt="Sản phẩm 1">
                    <div class="card-body">
                        <h5 class="card-title">Sản phẩm 1</h5>
                        <p class="card-text">Mô tả ngắn về sản phẩm 1.</p>
                        <a href="#" class="btn btn-primary">Xem chi tiết</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://vnn-imgs-f.vgcloud.vn/2019/12/28/22/nhung-buc-anh-khoa-hoc-an-tuong-nhat-trong-nam-2019-8.jpg" height="200px" class="card-img-top" alt="Sản phẩm 2">
                    <div class="card-body">
                        <h5 class="card-title">Sản phẩm 2</h5>
                        <p class="card-text">Mô tả ngắn về sản phẩm 2.</p>
                        <a href="#" class="btn btn-primary">Xem chi tiết</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://mega.com.vn/media/news/2605_hinh-nen-cong-nghe-pc28.jpg" height="200px" class="card-img-top" alt="Sản phẩm 3">
                    <div class="card-body">
                        <h5 class="card-title">Sản phẩm 3</h5>
                        <p class="card-text">Mô tả ngắn về sản phẩm 3.</p>
                        <a href="#" class="btn btn-primary">Xem chi tiết</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
