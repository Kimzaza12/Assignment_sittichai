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
            <div class="col-lg-12 text-center mb-3">

                <h2>Register</h2>

            </div>
            <div class="col-lg-12  d-flex justify-content-center">
                <div class="blog " style="max-width: 600px">

                    <form action="{{ route('registo') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="username" placeholder="Input name"
                                value="">
                        </div>

                        <div class="mb-3">
                            <label for="password">password</label>
                            <input type="text" class="form-control" name="password" placeholder="Input password"
                                value="">
                        </div>

                        <div class="mb-3">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" placeholder="Input email"
                                value="">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>

                        <a href="{{ route('login') }}" class="btn  btn-danger  ">back</a>


                    </form>

                </div>
            </div>
        </div>
    </div>

</body>

</html>
