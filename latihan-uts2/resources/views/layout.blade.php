<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Library</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    <style>
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .navbar {
            background-color: white;
            box-shadow: 0 2px 4px rgba(0,0,0,.1);
        }

        .navbar-brand img {
            height: 40px;
        }

        .search-form input {
            max-width: 250px;
            border-radius: 4px;
        }

        @media (max-width: 991.98px) {
            .search-form input {
                max-width: 100%;
                margin: 10px 0;
            }
        }

        .footer {
            margin-top: auto;
            padding: 20px 0;
            background-color: #f8f9fa;
            border-top: 1px solid #dee2e6;
        }

        .table img {
            width: 80px;
            height: auto;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="{{ route('book.index') }}">
                <img src="{{ asset('images/logo.png') }}" alt="Logo">
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('book.index') && !request()->genre_id ? 'active' : '' }}" 
                           href="{{ route('book.index') }}">All Books</a>
                    </li>
                    @foreach ($genres ?? [] as $genre)
                    <li class="nav-item">
                        <a class="nav-link {{ request()->genre_id == $genre->id ? 'active' : '' }}" 
                           href="{{ route('book.index', ['genre_id' => $genre->id]) }}">
                           {{ $genre->name }}
                        </a>
                    </li>
                    @endforeach
                </ul>

                <form action="{{ route('book.index') }}" method="GET" class="search-form d-flex">
                    <input type="text" 
                           name="search" 
                           class="form-control" 
                           placeholder="Search books..." 
                           value="{{ request('search') }}">
                </form>
            </div>
        </div>
    </nav>

    <div class="container my-4">
        @yield('content')
    </div>

    <footer class="footer">
        <div class="container text-center">
            <p class="mb-0">&copy; WebProg 2024</p>
        </div>
    </footer>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>