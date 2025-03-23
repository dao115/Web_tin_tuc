@extends('layout.main')

@section('content')
<div class="container mt-4">
    <!-- Hiển thị thông báo lỗi -->
    @if(isset($_SESSION['errors']) && isset($_GET['msg']))
    <div class="alert alert-danger">
        <ul>
            @foreach($_SESSION['errors'] as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <!-- Hiển thị thông báo thành công -->
    @if(isset($_SESSION['success']) && isset($_GET['msg']))
    <div class="alert alert-success">
        {{ $_SESSION['success'] }}
    </div>
    @endif

    <form action="{{ route('edit-user/'.$users->id) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="ten" class="form-label">Tên giảng viên</label>
            <input type="text" name="name" id="ten" class="form-control" value="{{ $users->name }}" required>
        </div>

        <div class="mb-3">
            <label for="gia" class="form-label">SĐT</label>
            <input type="text" name="phone" id="phone" class="form-control" value="{{ $users->phone }}" required>
        </div>

        <button type="submit" name="gui" class="btn btn-primary">Cập nhật thông tin</button>
    </form>
</div>
@endsection
