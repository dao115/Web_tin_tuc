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
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
            color: #343a40;
        }
        .navbar {
            background: linear-gradient(135deg,rgb(49, 70, 92), #6610f2);
            padding: 15px;
        }
        .navbar-brand img {
            width: 120px;
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
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s ease-in-out;
            background: #ffffff;
        }
        .card:hover {
            transform: scale(1.05);
        }
        .card-title {
            color: #007bff;
            font-weight: bold;
        }
        .btn-primary {
            background: linear-gradient(135deg, #007bff, #6610f2);
            border: none;
        }
        footer {
            background: #343a40;
            color: white;
            padding: 20px 0;
        }
        .featured-news {
            background-color: #e3f2fd;
            padding: 20px;
            border-radius: 10px;
        }
        .navbar {
            background: linear-gradient(135deg, rgb(49, 70, 92), #6610f2);
            padding: 15px;
        }
        .video-container {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-bottom: 20px;
        }
        .video-container video {
            width: 300px;
            height: 200px;
            border-radius: 10px;
        }
        .video-text {
            flex: 1;
            font-size: 18px;
            color: #343a40;
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
    <div class="container mt-4">
        <div class="featured-news mb-4">
            <h2 class="text-primary">Tin Nổi Bật</h2>
            <p><strong>Điểm tin 21h: Phó Cục thuế TP HCM bị bắt; Ba quan chức 26 lần nhận hối lộ từ AIC</strong></p>
            <a href="#" class="btn btn-primary">Đọc ngay</a>
        </div>
    <div class="container mt-5">
        <h2 class="mb-4 text-primary text-center">Tin Nổi Bật</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="https://www.startpage.com/av/proxy-image?piurl=https%3A%2F%2Ftse2.mm.bing.net%2Fth%3Fid%3DOIP.u9NVQKvhbGvGZesQBN4h9wHaD3%26pid%3DApi&sp=1742732028T32a39cc2a2c4a886e71cd31add2169777ec8cfe3be7b149b49a1c26bc5777528" class="card-img-top" alt="Tin 1">
                    <div class="card-body">
                        <h5 class="card-title">Bản Tin Mới Nhất</h5>
                        <p class="card-text">Cập nhật những thông tin nóng hổi trong ngày.</p>
                        <a href="#" class="btn btn-primary">Xem chi tiết</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://www.startpage.com/av/proxy-image?piurl=https%3A%2F%2Ftse2.mm.bing.net%2Fth%3Fid%3DOIP.qduqyLmMHYyrSdaMDe1g7wHaEo%26pid%3DApi&sp=1742732283T1b12a06b6b48e400d2b08031bb9c259ad772003eb440efe731de407aac5788b1" class="card-img-top" alt="Tin 2">
                    <div class="card-body">
                        <h5 class="card-title">Công Nghệ Mới</h5>
                        <p class="card-text">Những cải tiến công nghệ mới nhất bạn không thể bỏ lỡ.</p>
                        <a href="#" class="btn btn-primary">Xem chi tiết</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://www.startpage.com/av/proxy-image?piurl=https%3A%2F%2Ftse4.mm.bing.net%2Fth%3Fid%3DOIP.Rz78hI0asmdULF7QOD3uKQHaEf%26pid%3DApi&sp=1742732317T16953286669beec52a8ba80c55304c9355dff7d1cb69ddf75699563c04df4f16" class="card-img-top" alt="Tin 3">
                    <div class="card-body">
                        <h5 class="card-title">Giải Trí Hôm Nay</h5>
                        <p class="card-text">Những tin tức giải trí hấp dẫn nhất trong ngày.</p>
                        <a href="#" class="btn btn-primary">Xem chi tiết</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <h2 class="mb-4 text-primary text-center">Tin thể Thao</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="https://www.startpage.com/av/proxy-image?piurl=https%3A%2F%2Ftse2.mm.bing.net%2Fth%3Fid%3DOIP.u9NVQKvhbGvGZesQBN4h9wHaD3%26pid%3DApi&sp=1742732028T32a39cc2a2c4a886e71cd31add2169777ec8cfe3be7b149b49a1c26bc5777528" class="card-img-top" alt="Tin 1">
                    <div class="card-body">
                        <h5 class="card-title">Bản Tin Mới Nhất</h5>
                        <p class="card-text">Cập nhật những thông tin nóng hổi trong ngày.</p>
                        <a href="#" class="btn btn-primary">Xem chi tiết</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://www.startpage.com/av/proxy-image?piurl=https%3A%2F%2Ftse2.mm.bing.net%2Fth%3Fid%3DOIP.qduqyLmMHYyrSdaMDe1g7wHaEo%26pid%3DApi&sp=1742732283T1b12a06b6b48e400d2b08031bb9c259ad772003eb440efe731de407aac5788b1" class="card-img-top" alt="Tin 2">
                    <div class="card-body">
                        <h5 class="card-title">Công Nghệ Mới</h5>
                        <p class="card-text">Những cải tiến công nghệ mới nhất bạn không thể bỏ lỡ.</p>
                        <a href="#" class="btn btn-primary">Xem chi tiết</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://www.startpage.com/av/proxy-image?piurl=https%3A%2F%2Ftse4.mm.bing.net%2Fth%3Fid%3DOIP.Rz78hI0asmdULF7QOD3uKQHaEf%26pid%3DApi&sp=1742732317T16953286669beec52a8ba80c55304c9355dff7d1cb69ddf75699563c04df4f16" class="card-img-top" alt="Tin 3">
                    <div class="card-body">
                        <h5 class="card-title">Giải Trí Hôm Nay</h5>
                        <p class="card-text">Những tin tức giải trí hấp dẫn nhất trong ngày.</p>
                        <a href="#" class="btn btn-primary">Xem chi tiết</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <<div class="container mt-4">
        <div class="video-container">
            <video autoplay loop muted>
                <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                Trình duyệt của bạn không hỗ trợ video.
            </video>
            <div class="video-text">
                <h2>Tin Nổi Bật Hôm Nay</h2>
                <p>Cập nhật những thông tin mới nhất về thời sự, kinh tế, và xã hội.</p>
            </div>
        </div>
    </div>
    <footer class="text-center py-4 mt-5">
        <p>&copy; 2025 Trang Tin Tức. Bản quyền thuộc về chúng tôi.</p>
        <p>
            <a href="https://www.facebook.com/jr.nhism" class="text-white me-3"><i class="fab fa-facebook"></i></a>
            <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
            <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
        </p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
