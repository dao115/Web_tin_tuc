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

    <form action="{{ route('post-user') }}" method="post">
        <div class="form-group mb-3">
            <label for="">Tên giảng viên</label>
            <input type="text" name="name" id="ten" class="form-control" placeholder="nhập tên giảng viên" >
        </div>
        <div class="form-group mb-3">
            <label for="">SĐT</label>
            <input type="text" name="phone" id="gia" class="form-control" placeholder="nhập SĐT giảng viên" >
        </div>
        <button type="submit" name="gui" class="btn btn-primary">Gửi</button>
    </form>
</div>
@endsection