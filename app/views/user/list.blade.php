@extends('layout.main')

@section('content')
<div class="container mt-4">
    <div class="mb-3">
        <a href="{{ route('add-user')}}" class="btn btn-primary">Thêm sản phẩm</a>
    </div>

    <table class="table table-striped table-hover">
        <thead>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </thead>
        <tbody>
            @foreach ($users as $user )
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{$user->phone}}</td>
                <td>
                    <a href="{{route('detail-user/'.$user->id)}}" class="btn btn-warning btn-sm">Sủa</a>
                    <a href="{{route('delete-user/'.$user->id)}}" class="btn btn-danger btn-sm">Xóa</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection