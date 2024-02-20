<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">OK</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Berita</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Umum</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>


        <div class="row mt-3">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <center>

                            <h3 class="card-title">{{ $post->title }}</h3>
                        </center>
                        <ul class="list-group">
                            <li class="list-group-item">tanggal : {{ $post->created_at }}</li>
                        </ul>
                        <hr>

                        <p class="card-text">{{ $post->body, 0, 80 }} ...
                        </p>
                        <a href="{{ route('home.index') }}" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>



</html>
