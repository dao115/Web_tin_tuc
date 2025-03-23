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
        <a href="{{BASE_URL}}add-category" class="btn btn-primary">Thêm khóa học</a>
    </div>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên danh mục</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categorys as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                
                <td>
                    <a href="{{BASE_URL}}edit-category/{{$category->id}}" class="btn btn-warning btn-sm">Sửa</a>
                    <a href="{{BASE_URL}}delete-category/{{$category->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
