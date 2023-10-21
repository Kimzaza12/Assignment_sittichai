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

    <div class="container mt-2 px-10 py-10">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Sittichai Laravel 10.x</h2>
            </div>

            <div>
                <a href="{{ route('admin.create') }}" class="btn btn-success mt-10 my-10">Create post</a>
            </div>
            @if ($mg = Session::get('success'))
                <div class=" alert alert-success">
                    <p>{{ $mg }}</p>
                </div>
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
                            <form action="{{ route('admin.destroy', $ment->id) }}" method="POST">
                                <a href="{{ route('admin.edit', $ment->id) }}" class="btn   btn-warning ">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button class=" btn  btn-danger ">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>

        </div>
    </div>

</body>

</html>
