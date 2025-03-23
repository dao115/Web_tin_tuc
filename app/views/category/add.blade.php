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

    <form id="courseForm" action="{{ BASE_URL }}store-category" method="post" enctype="multipart/form-data">
        <div class="form-group mb-3">
            <label for="">Tên danh mục</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="nhập tên khóa học" >
        </div>
        
        <button type="submit" name="gui" class="btn btn-primary">Gửi</button>
    </form>
</div>
@endsection


