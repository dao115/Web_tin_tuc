<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>@yield('title', 'Trang Tin Tức')</title>
    <style>
        .sidebar {
            min-height: 100vh;
            background-color: #343a40;
            color: #fff;
        }
        .sidebar a {
            color: #ddd;
            text-decoration: none;
        }
        .sidebar a:hover {
            background-color: #495057;
            color: #fff;
        }
        .active-link {
            background-color: #495057;
            font-weight: bold;
        }
        .header-right {
            display: flex;
            align-items: center;
            justify-content: flex-end;
        }
        .header-right .dropdown-menu {
            min-width: 200px;
        }
        .header-right .icon {
            margin-left: 20px;
            cursor: pointer;
        }
        .icon:hover {
            color: #007bff;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-3 col-lg-2 d-md-block sidebar p-3">
                <h4 class="text-center py-2">Danh Mục</h4>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active-link" href="{{ BASE_URL }}">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ BASE_URL }}news">Tin mới</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ BASE_URL }}category">Danh mục</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ BASE_URL }}about">Giới thiệu</a>
                    </li>
                </ul>
            </nav>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <header class="d-flex justify-content-between align-items-center py-3 mb-3 border-bottom">
                    <h1 class="h2">Trang Tin Tức</h1>
                    <div class="header-right">
                        <div class="icon">
                            <i class="fas fa-bell"></i>
                        </div>
                    </div>
                </header>
                <div class="content">
                    @yield('content')
                </div>
                <footer class="text-center py-3">
                    <span>Tin Tức 24h</span>
                </footer>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
