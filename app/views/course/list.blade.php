@extends('layout.main')

@section('content')
<div class="container mt-4">
@if(isset($_SESSION['success']) && isset($_GET['msg']))
    <div class="alert alert-success">
        {{ $_SESSION['success'] }}
    </div>
@endif
    <h1>Danh sách khóa học</h1>

    <div class="mb-3">
        <a href="{{BASE_URL}}add-course" class="btn btn-primary">Thêm khóa học</a>
    </div>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên khóa học</th>
                <th>Ảnh</th>
                <th>Giá</th>
                <th>SĐT</th>
                <th>Email</th>
                <th>Danh mục</th>
                <th>Mô tả</th>
                <th>Giảng viên</th>
                <th>Thời gian</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($courses as $course)
            <tr>
                <td>{{ $course->id }}</td>
                <td>{{ $course->name }}</td>
                <td>
                    @if (!empty($course->image))
                    <img src="<?= BASE_URL . 'public/uploads/' . $course->image ?>" alt="Ảnh khóa học" width="80">
                    @else
                        Không có ảnh
                    @endif
                </td>
                <td>{{ number_format($course->price, 0, ',', '.') }} VND</td>
                <td>{{ $course->phone }}</td>
                <td>{{ $course->email }}</td>
                <td>{{ $course->category == 1 ? 'Frontend' : 'Backend' }}</td>
                <td>{{ $course->descriipt }}</td>
                <td>{{ $course->lecturer }}</td>
                <td>{{ $course->course_duration }}</td>
                <td>
                    <a href="{{BASE_URL}}edit-course/{{$course->id}}" class="btn btn-warning btn-sm">Sửa</a>
                    <a href="{{BASE_URL}}delete-course/{{$course->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
