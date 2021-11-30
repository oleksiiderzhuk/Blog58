<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Document</title>
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
                        <a class="nav-link" aria-current="page" href="/">Создать пост</a>
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
        <div class="row">
            <?php
            $i = 0;
            ?>
            @foreach ($posts as $post)
                <?php
                $i++;
                ?>
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">
                            <h2>{{ $post->short_title }}</h2>
                        </div>
                        <div class="card-body">
                            <div class="card-img"
                                style="background-image: url({{ $post->img ?? asset('img/02.jpg') }})"></div>
                            <div class="card-author">Автор: {{ $post->name }}</div>
                            <a href="" class="btn btn-outline-primary">Посмотреть пост</a>
                            <a href="#" class="btn btn-outline-primary">qqq</a>
                            <a href="" class="btn btn-info">Info</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        @if (!isset($_GET['search']))
            {{ $posts->links() }} // for pagination working
        @endif
    </div>

</body>

</html>
