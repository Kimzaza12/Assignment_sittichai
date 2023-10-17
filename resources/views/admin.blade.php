<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <?php 
        $name = "kim";
    ?>

        <h1>Welcome Admin : {{$name}}</h1>

        <a href="{{route('user')}}">User</a>
        <a href="{{route('admin')}}">Admin</a>


</body>
</html>