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
        $User = "kim";
        $arr  = array("User","Admin");
    ?>

        <h1>Welcome Admin : {{$User}}</h1>

        <a href="/user">ser</a>
        <a href="/admin">Admin</a>

</body>
</html>