<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{route('masuk')}}">
        @csrf
        <lable>Email: </lable>
        <input type="email" name="email">
        <lable>Password: </lable>
        <input type="password" name="password">
        <button type="submit">Login</button>
    </form>
            @if ($errors->any())
              <h1 style="color: red;"> {{$errors->first()}}</h1>
            @endif
</body>
</html>