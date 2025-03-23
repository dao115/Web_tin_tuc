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

    <form action="{{ BASE_URL }}update-category/{{ $category->id }}" method="post" enctype="multipart/form-data">
        <div class="form-group mb-3">
            <label for="name">Tên khóa học</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $category->name }}" placeholder="Nhập tên danh mục">
        </div>


        <button type="submit" name="gui" class="btn btn-primary">Cập nhật</button>
    </form>
</div>
@endsection
