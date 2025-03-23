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
            background-color: #f4f6f9;
            font-family: 'Arial', sans-serif;
        }
        .navbar {
            background-color: #004085 !important;
            padding: 15px;
        }
        .navbar-brand img {
            width: 150px;
            height: auto;
        }
        .navbar-nav .nav-item .nav-link {
            color: white !important;
            font-weight: bold;
            transition: color 0.3s;
        }
        .navbar-nav .nav-item .nav-link:hover {
            color: #f8d210 !important;
        }
        .card {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }
        .card:hover {
            transform: scale(1.05);
        }
        footer {
            background: #333;
            color: white;
            padding: 20px 0;
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
                <div class="ms-3">
                    <a href="#" class="btn btn-outline-light">Đăng ký</a>
                    <a href="{{ BASE_URL }}login" class="btn btn-outline-warning">Đăng nhập</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h2 class="mb-4 text-primary text-center">Sản phẩm mới</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="https://source.unsplash.com/400x250/?laptop" class="card-img-top" alt="Sản phẩm 1">
                    <div class="card-body">
                        <h5 class="card-title">Laptop cao cấp</h5>
                        <p class="card-text">Laptop mới với hiệu năng mạnh mẽ, phù hợp cho công việc và giải trí.</p>
                        <a href="#" class="btn btn-primary">Xem chi tiết</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://source.unsplash.com/400x250/?smartphone" class="card-img-top" alt="Sản phẩm 2">
                    <div class="card-body">
                        <h5 class="card-title">Smartphone thế hệ mới</h5>
                        <p class="card-text">Điện thoại thông minh với camera sắc nét và hiệu suất vượt trội.</p>
                        <a href="#" class="btn btn-primary">Xem chi tiết</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://source.unsplash.com/400x250/?headphones" class="card-img-top" alt="Sản phẩm 3">
                    <div class="card-body">
                        <h5 class="card-title">Tai nghe không dây</h5>
                        <p class="card-text">Chất lượng âm thanh đỉnh cao, kết nối ổn định và thời gian sử dụng lâu dài.</p>
                        <a href="#" class="btn btn-primary">Xem chi tiết</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="text-center py-4 mt-5">
        <p>&copy; 2025 Trang Tin Tức. Bản quyền thuộc về chúng tôi.</p>
        <p>
            <a href="#" class="text-white me-3"><i class="fab fa-facebook"></i></a>
            <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
            <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
        </p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
