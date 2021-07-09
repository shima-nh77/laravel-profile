<!doctype html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>register</title>
</head>
<body>
<div class="form-group">
    <form action="{{route('login.verifyOtp',$user)}}" method="post">
        @csrf
        <input type="text" name="otp" class="form-control" placeholder="کد ارسال شده را وارد کنید">
        <button type="submit" class="btn btn-primary btn-sm" >تایید</button>
    </form>
</div>
</body>
</html>

