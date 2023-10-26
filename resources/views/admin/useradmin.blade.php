<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
        <div class="container-fluid ">
            <a class="navbar-brand" href="{{ route('useradmin') }}">Laraval kim</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav  ">


                    <li class="nav-item ">
                        <a class="nav-link active " aria-current="page" href="{{ route('useradmin') }}">User</a>
                    </li>



                    <li class="nav-item ">
                        <a class="nav-link " href="{{ route('index') }}">Admin</a>
                    </li>

                </ul>
            </div>


            <ul class="navbar-nav  ">

                <li class="nav-item ">
                    <a class="nav-link " href="{{ route('login') }}">Logout</a>
                </li>


            </ul>





        </div>
    </nav>

    <div class="container mt-5 ">
        <div class="row">

            <div class="col-lg-12 text-center">
                <h2>List of posts from admin</h2>
            </div>

            <div class="container text-center mt-4">
                <div class="row row-cols-3 ">

                    @foreach ($assignmentuser as $ument)
                        <div class="box mt-5 pt-2 text-start  ms-sm-2 "
                            style="background-color: #2989f7 ; max-width: 400px; border-radius: 10px;">

                            <div class="col fw-bold fs-4 ps-3 mb-3 text-white ">
                                {{ $ument->username }}
                            </div>
                            <div class="col mb-5  ps-3 text-white">
                                {{ $ument->post }}
                            </div>

                        </div>
                    @endforeach
                </div>

            </div>

            <div class="list  mt-5">
                {!! $assignmentuser->links('pagination::bootstrap-5') !!}
            </div>




        </div>
    </div>



</body>

</html>
