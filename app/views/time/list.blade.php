<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<a href="{{BASE_URL}}add-time">Thêm</a>
<body>
    <table>
       <thead>
        <tr>
            <th>ID</th>
            <th>Tên</th>
            <th>Tgoiwf gian</th>
            <th>Hành động</th>
        </tr>
       </thead>
       <tbody>
        @foreach ($times as $time)
        <tr>
            <th>{{$time->id}}</th>
            <th>{{$time->tenca}}</th>
            <th>{{$time->thoigian}}</th>
        </tr>
        @endforeach
       </tbody>
    </table>
</body>
</html>