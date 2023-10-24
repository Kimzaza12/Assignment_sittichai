<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>admin</title>
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
    <div class="container mt-5 px-10 py-10">
        <div class="row">

            <div class="col-lg-12 text-center">
                <h2>Manage admin</h2>
            </div>

            <div>
                <a href="{{ route('create') }}" class="btn btn-success mb-3 my-10">Create post</a>
            </div>

            @if ($mg = Session::get('success'))

                <div class=" alert alert-success">
                    <p>{{ $mg }}</p>
                </div>

                <script>
                    setTimeout(function() {
                        window.location.href = "{{ route('index') }}";
                    }, 2000);
                </script>
                
            @endif

            <table class="table table-hover">
                <tr>
                    <th>No.</th>
                    <th>Username</th>
                    <th>Post</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach ($assignment as $ment)
                    <tr>
                        <td>{{ $ment->id }}</td>
                        <td>{{ $ment->username }}</td>
                        <td>{{ $ment->post }}</td>

                        <td>
                            <a href="{{ route('edit', $ment->id) }}" class="btn   btn-warning ">Edit</a>
                            <a href="{{ route('delete', $ment->id) }}" class="btn   btn-danger  ">DELETE</a>
                        </td>


                    </tr>
                @endforeach
            </table>
            <div class="list  mt-5">
                {!! $assignment->links('pagination::bootstrap-5') !!}
            </div>
        </div>
    </div>

</body>

</html>
