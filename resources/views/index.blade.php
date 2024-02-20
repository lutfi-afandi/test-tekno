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

        <div class="row">
            <div class="col-md-12">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="data:image/jpeg;base64,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"
                                class="d-block w-100" style="max-height: 360px" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="data:image/jpeg;base64,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"
                                class="d-block w-100" style="max-height: 360px" alt="...">
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-8">
                <div class="row">
                    @forelse ($data['posts'] as $post)
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $post->title }}</h5>
                                    <p class="card-text">{{ substr($post->body, 0, 80) }} ...
                                        <a href="home/detail/{{ $post->id }}" class="card-link">baca
                                            selengkapnya</a>
                                    </p>

                                    <p>Kategori : {{ $post->nama }}</p>
                                </div>
                            </div>
                        </div>
                    @empty
                        <tr>
                            <td class="text-center text-mute" colspan="4">Postingan belum tersedia</td>
                        </tr>
                    @endforelse
                </div>

            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <ul>
                            @foreach ($data['category'] as $cat)
                                <li><a href="category/list/{{ $cat->id }}">{{ $cat->nama }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>



</html>
