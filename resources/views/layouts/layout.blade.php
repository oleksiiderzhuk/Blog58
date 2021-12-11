<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Blog-Project</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="col-6 navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Главная</a>
                    </li>
                    <li class="nav-item offset-3 active">
                        <a class="nav-link" aria-current="page" href="{{ route('post.create') }}">Создать
                            пост</a>
                    </li>

                    <form class="d-flex" action="{{ route('post.index') }}" method="get">
                        <input class="form-control me-2" name="search" type="search" placeholder="Найти пост..."
                            aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Поиск</button>
                    </form>
            </div>
        </div>
    </nav>


    {{-- construction for automated coding VSCode should install Elm Emmet and Mithril Emmet extensions
     .container>.row>.col-6>.card>.card-header+.card-body --}}
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times; </span>
                </button>
            </div>
        @endif
        @yield('content')
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
