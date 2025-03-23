<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Tin Tức</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background-color: #eef1f7;
            font-family: 'Arial', sans-serif;
        }
        .navbar {
            background-color: #0056b3 !important;
            padding: 15px;
        }
        .navbar-brand img {
            width: 140px;
            height: auto;
        }
        .navbar-nav .nav-item .nav-link {
            color: white !important;
            font-weight: 600;
        }
        .navbar-nav .nav-item .nav-link:hover {
            color: #ffdd57 !important;
        }
        .news-card img {
            height: 250px;
            object-fit: cover;
        }
        .news-card {
            transition: transform 0.3s ease-in-out;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }
        .news-card:hover {
            transform: scale(1.05);
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
            padding: 7px 12px;
            border-radius: 5px;
            transition: all 0.3s;
        }
        .login_bt ul li a:hover {
            background: #ffdd57;
            color: black;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg shadow">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="https://cdn-icons-png.flaticon.com/512/21/21601.png" alt="Logo">
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
                        <li><a href="#" class="btn btn-outline-light">Đăng ký</a></li>
                        <li><a href="#" class="btn btn-outline-warning">Đăng nhập</a></li>
                        <li><a href="#" class="btn btn-outline-light"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h2 class="mb-4 text-primary text-center">Tin tức mới nhất</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card news-card">
                    <img src="" class="card-img-top" alt="Tin tức 1">
                    <div class="card-body">
                        <h5 class="card-title">Việt Nam giành huy chương vàng Olympic</h5>
                        <p class="card-text">Vận động viên Việt Nam đã xuất sắc giành huy chương vàng tại Olympic 2024.</p>
                        <a href="#" class="btn btn-primary">Đọc tiếp</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card news-card">
                    <img src="" class="card-img-top" alt="Tin tức 2">
                    <div class="card-body">
                        <h5 class="card-title">Công nghệ AI phát triển mạnh mẽ</h5>
                        <p class="card-text">Trí tuệ nhân tạo đang thay đổi cách chúng ta làm việc và giao tiếp.</p>
                        <a href="#" class="btn btn-primary">Đọc tiếp</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card news-card">
                    <img src="" class="card-img-top" alt="Tin tức 3">
                    <div class="card-body">
                        <h5 class="card-title">Giá xăng dầu tăng cao</h5>
                        <p class="card-text">Giá xăng dầu thế giới tăng mạnh, ảnh hưởng đến thị trường Việt Nam.</p>
                        <a href="#" class="btn btn-primary">Đọc tiếp</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
