```php
@extends('layout.main')

@section('content')
<div class="container mt-4">
    <h2>Chỉnh sửa Sản Phẩm</h2>

    @if (isset($_SESSION['errors']) && isset($_GET['msg']))
        <div class="alert alert-danger">
            <ul>
                @foreach ($_SESSION['errors'] as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if(isset($_SESSION['success']) && isset($_GET['msg']))
        <div class="alert alert-success">
            {{ $_SESSION['success'] }}
        </div>
    @endif

    <form action="{{ BASE_URL }}update-course/{{ $course->id }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="old_image" value="{{ $course->image }}">
        <div class="form-group mb-3">
            <label for="name">Tên khóa học</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $course->name }}" placeholder="Nhập tên khóa học">
        </div>

        <div class="form-group mb-3">
            <label for="imageUpload">Chọn ảnh</label>
            <input type="file" name="image" id="imageUpload" class="form-control" accept="image/*">
            @if($course->image)
                <img src="{{ BASE_URL }}public/uploads/{{ $course->image }}" alt="Ảnh cũ" width="100">
            @endif
        </div>

        <div class="form-group mb-3">
            <label for="price">Giá</label>
            <input type="number" name="price" id="price" class="form-control" value="{{ $course->price }}" placeholder="Nhập giá khóa học">
        </div>

        <div class="form-group mb-3">
            <label for="phone">Số điện thoại</label>
            <input type="number" name="phone" id="phone" class="form-control" value="{{ $course->phone }}" placeholder="Nhập số điện thoại">
        </div>

        <div class="form-group mb-3">
            <label for="category">Chọn danh mục</label>
            <select name="category" id="category" class="form-control">
                <option value="">-- Chọn danh mục --</option>
                <option value="1" {{ $course->category == 1 ? 'selected' : '' }}>Font</option>
                <option value="2" {{ $course->category == 2 ? 'selected' : '' }}>Back</option>
            </select>
        </div>

        <div class="form-group mb-3">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $course->email }}" placeholder="Nhập email">
        </div>

        <div class="form-group mb-3">
            <label for="description">Mô tả</label>
            <textarea name="description" id="description" class="form-control" placeholder="Nhập mô tả">{{ $course->description }}</textarea>
        </div>

        <div class="form-group mb-3">
            <label for="lecturer">Giảng viên</label>
            <input type="text" name="lecturer" id="lecturer" class="form-control" value="{{ $course->lecturer }}" placeholder="Nhập giảng viên">
        </div>

        <div class="form-group mb-3">
            <label for="course_duration">Thời gian học</label>
            <input type="date" name="course_duration" id="course_duration" 
       value="{{ isset($course->course_duration) ? date('Y-m-d', strtotime($course->course_duration)) : '' }}">
        </div>

        <button type="submit" name="gui" class="btn btn-primary">Cập nhật</button>
    </form>
</div>
@endsection
```@extends('layout.main')

@section('content')
<div class="container mt-4">
    <h2>Chỉnh sửa Sản Phẩm</h2>

    @if (isset($_SESSION['errors']) && isset($_GET['msg']))
        <div class="alert alert-danger">
            <ul>
                @foreach ($_SESSION['errors'] as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if(isset($_SESSION['success']) && isset($_GET['msg']))
        <div class="alert alert-success">
            {{ $_SESSION['success'] }}
        </div>
    @endif

    <form action="{{ BASE_URL }}update-course/{{ $course->id }}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="old_image" value="{{ $course->image }}">
        <div class="form-group mb-3">
            <label for="name">Tên khóa học</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $course->name }}" placeholder="Nhập tên khóa học">
        </div>

        <div class="form-group mb-3">
            <label for="imageUpload">Chọn ảnh</label>
            <input type="file" name="image" id="imageUpload" class="form-control" accept="image/*">
            <input type="hidden" name="old_image" value="{{ $course->image }}">
            @if($course->image)
                <img src="{{ BASE_URL }}public/uploads/{{ $course->image }}" alt="Ảnh cũ" width="100">
            @endif
        </div>

        <div class="form-group mb-3">
            <label for="price">Giá</label>
            <input type="number" name="price" id="price" class="form-control" value="{{ $course->price }}" placeholder="Nhập giá khóa học">
        </div>

        <div class="form-group mb-3">
            <label for="phone">Số điện thoại</label>
            <input type="number" name="phone" id="phone" class="form-control" value="{{ $course->phone }}" placeholder="Nhập số điện thoại">
        </div>

        <div class="form-group mb-3">
            <label for="category">Chọn danh mục</label>
            <select name="category" id="category" class="form-control">
                <option value="">-- Chọn danh mục --</option>
                <option value="1" {{ $course->category == 1 ? 'selected' : '' }}>Font</option>
                <option value="2" {{ $course->category == 2 ? 'selected' : '' }}>Back</option>
            </select>
        </div>

        <div class="form-group mb-3">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $course->email }}" placeholder="Nhập email">
        </div>

        <div class="form-group mb-3">
            <label for="descriipt">Mô tả</label>
            <input type="text" name="descriipt" id="descriipt" class="form-control" value="{{ $course->descriipt }}" placeholder="Nhập mô tả">
        </div>

        <div class="form-group mb-3">
            <label for="lecturer">Giảng viên</label>
            <input type="text" name="lecturer" id="lecturer" class="form-control" value="{{ $course->lecturer }}" placeholder="Nhập giảng viên">
        </div>

        <div class="form-group mb-3">
            <label for="course_duration">Thời gian học</label>
            <input type="date" name="course_duration" id="course_duration" 
       value="{{ isset($course->course_duration) ? date('Y-m-d', strtotime($course->course_duration)) : '' }}">

        </div>

        <button type="submit" name="gui" class="btn btn-primary">Cập nhật</button>
    </form>
</div>
@endsection
