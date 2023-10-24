<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('user') }}">Laraval kim</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{ route('user') }}">User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('login') }}">Admin</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5 ">
        <div class="row">
            <div class="col-lg-12  d-flex justify-content-center">
                <div class="blog " style="max-width: 600px" >
                    
                    <form action="{{ route('index')}}" method="GET" enctype="multipart/form-data">
                        
                        <div class="mb-3">
                            <label for="name" class="form-label" >Name</label>
                            <input type="text" class="form-control" id="name"   placeholder="Input name" name="uname" >
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label" >Password</label>
                            <input type="password" class="form-control" id="Password" placeholder="Input password" name="ps">
                        </div>
                    
                        <button type="submit" class="btn btn-primary">Submit</button>

                    </form>

                </div>
            </div>
        </div>
    </div>
</body>

</html>
