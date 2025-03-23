<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{BASE_URL}}store-time" method="post">
       <div>
        <label >Tên ca</label>
        <input type="text" name="tenca" id="tenca" required>
       </div>
       <div>
        <label >TThời gian</label>
        <input type="text" name="thoigian" id="thoigian" required>
       </div>
       <button type="submit" name="gui">Thêm</button>
    </form>
</body>
</html>