<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Mahasiswa - {{ ucfirst($campus) }}</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <style>
        body {
            background-color: #f8f9fa;
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
        <h1 class="text-center mb-4">Daftar Mahasiswa - {{ ucfirst($campus) }}</h1>
        <div class="card shadow-sm">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>NIM</th>
                                <th>Nama</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $item)
                                <tr>
                                    <td>{{ $item['nim'] }}</td>
                                    <td>{{ $item['name'] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="{{ route('campus') }}" class="btn btn-primary">Kembali ke Daftar Kampus</a>
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