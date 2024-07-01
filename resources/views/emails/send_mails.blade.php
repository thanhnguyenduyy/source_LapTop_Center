<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @if (session('success'))
    <div class="alert alert-success">
        {{Session('success')}}
    </div>
    @endif
    <h3>Laptop-Centre</h3>
    <p>Chúng tôi đã nhận được mail của bạn</p>
    <p>Sẽ liên hệ với bạn sau khi đọc tin nhắn này !</p>
</body>

</html>