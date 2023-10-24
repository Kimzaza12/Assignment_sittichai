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
            <div class="col-lg-12 ">
                <h2>Edit Post</h2>

                <div>
                    <a href="{{ route('index') }}" class="btn btn-primary ">back</a>
                </div>

                @if (session('status'))
                    <div>
                        {{ session('status') }}
                    </div>
                @endif

                <form action="{{ route('update', $assig2->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 mt-3">
                                <div class="form-group">
                                    <strong>Username</strong>
                                    <input type="text" name="username" value="{{ $assig2->username }}"
                                        class=" form-control" placeholder="Input username">
                                    @error('username')
                                        <div class=" alert alert-danger ">{{ $mg }}</div>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-md-12 mt-3">
                                <div class="form-group ">
                                    <strong>Post</strong>
                                    <input type="text" name="post" value="{{ $assig2->post }}"
                                        class=" form-control" placeholder="Input post">
                                    @error('username')
                                        <div class=" alert alert-danger ">{{ $mg }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <button class="btn btn-primary mt-5">submit</button>
                            </div>

                        </div>

                    </div>
                </form>
            </div>

        </div>
    </div>

</body>

</html>
