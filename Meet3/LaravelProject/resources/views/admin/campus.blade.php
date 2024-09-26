<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Kampus</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .campus-card {
            transition: transform 0.3s;
        }
        .campus-card:hover {
            transform: translateY(-5px);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
        <div class="container">
            <a class="navbar-brand" href="#">Sistem Informasi Kampus</a>
        </div>
    </nav>

    <div class="container">
        <h1 class="text-center mb-4">Daftar Kampus</h1>
        <div class="row">
            @foreach ($locations as $item)
            <div class="col-md-4 mb-4">
                <div class="card campus-card shadow-sm">
                    <img class="card-img-top" src="{{ asset('images/kampus_' . str_replace(' ', '_', strtolower($item)) . '.png') }}" alt="Gambar {{ ucfirst($item) }}">
                    <div class="card-body">
                        <h4 class="card-title">{{ ucfirst($item) }}</h4>
                        <a href="{{ route('campus.student', ['campus' => $item]) }}" class="btn btn-primary btn-block">Lihat Daftar Mahasiswa</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <footer class="bg-light mt-4 py-3">
        <div class="container text-center">
            <p class="mb-0">&copy; 2024 Sistem Informasi Kampus. All rights reserved.</p>
        </div>
    </footer>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>