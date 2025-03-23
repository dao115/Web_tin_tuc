@extends('layout.main')

@section('content')
<div class="container mt-4">
    <h2>Thêm Sản Phẩm</h2>
    @if (isset($_SESSION['errors']) && isset($_GET['msg']))
        <div class="alert alert-danger">
            <ul>
                @foreach ($_SESSION['errors'] as $error )
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if(isset($_SESSION['success']) && isset($_GET['msg']))
        <div class="alert alert-success">
            {{ $_SESSION['success'] }}
        </div>
    @endif

    <form id="courseForm" action="{{ BASE_URL }}store-course" method="post" enctype="multipart/form-data">
        <div class="form-group mb-3">
            <label for="">Tên khóa học</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="nhập tên khóa học" >
        </div>
        <div class="form-group mb-3">
            <label for="imageUpload">Chọn ảnh</label>
            <input type="file" name="image" id="imageUpload" class="form-control" accept="image/*">
        </div>
        
        <div class="form-group mb-3">
            <label for="">Giá</label>
            <input type="number" name="price" id="price" class="form-control" placeholder="nhập giá khóa học" >
        </div>
        <div class="form-group mb-3">
            <label for="">Số điện thoại</label>
            <input type="number" name="phone" id="phone" class="form-control" placeholder="nhập số điện thoại" >
        </div>
        <div class="form-group mb-3">
            <label for="category">Chọn danh mục</label>
            <select name="category" id="category" class="form-control">
                <option value="">-- Chọn danh mục --</option>
                <option value="1">Font</option>
                <option value="2">Back</option>
            </select>
        </div>
        
        <div class="form-group mb-3">
            <label for="">Email</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="nhập email" >
        </div>
        <div class="form-group mb-3">
            <label for="">Mô tả</label>
            <input type="text" name="descriipt" id="descriipt" class="form-control" placeholder="nhập mô tả" >
        </div>
        <div class="form-group mb-3">
            <label for="">Giảng viên</label>
            <input type="text" name="lecturer" id="lecturer" class="form-control" placeholder="nhập giảng viên" >
        </div>
        <div class="form-group mb-3">
            <label for="">Thời gian học</label>
            <input type="date" name="course_duration" id="course_duration" class="form-control" placeholder="nhập thời gian" >
        </div>
        <button type="submit" name="gui" class="btn btn-primary">Gửi</button>
    </form>
</div>
@endsection


