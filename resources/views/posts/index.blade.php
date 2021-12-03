@extends('layouts.layout')

@section('content')
    @if (isset($_GET['search']))
        @if (count($posts) > 0))
            <h2>По запросу <?= $_GET['search'] ?> </h2>
            <p class="lead">найдено {{ count($posts) }} постов</p>

        @else
            <h2>По запросу <?= $_GET['search'] ?> ничего не найдено</h2>
            <a href="{{ route('post.index') }}" class="btn btn-outline-primary">Отобразить все посты</a>
        @endif
    @endif

    <div class="row">
        <?php
        $i = 2;
        ?>
        @foreach ($posts as $post)

            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <h2>{{ $post->short_title }}</h2>
                    </div>
                    <div class="card-body">
                        <div class="card-img"
                            style="background-image: url({{ $post->img ?? asset('img/0' . $i . '.jpg') }})"></div>
                        <div class="card-author">Автор: {{ $post->name }}</div>
                        <a href="" class="btn btn-outline-primary">Посмотреть пост</a>
                        <a href="#" class="btn btn-outline-primary">Button</a>
                        <a href="" class="btn btn-info">Info</a>
                    </div>
                </div>
            </div>
            <?php
            $i++;
            ?>
        @endforeach
    </div>

    @if (!isset($_GET['search']))
        {{ $posts->links() }} // for pagination working
    @endif
@endsection
