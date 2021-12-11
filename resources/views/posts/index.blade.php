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

        @foreach ($posts as $post)
            <div class="col-4">
                <div class="card">
                    <div class="card-header">
                        <h2>{{ $post->short_title }}</h2>
                    </div>
                    <div class="card-body">
                        {{-- <div>post_id: {{ $post->post_id }}</div> --}}
                        <?php
                        $k = rand(1, 5);
                        // echo 'k: ' . $k;
                        ?>
                        <div class="card-img"
                            style="background-image: url({{ asset('img/' . $post->img . '.jpg') }})"></div>
                        <div class="card-author">Автор: {{ $post->name }}</div>
                        <a href="{{ route('post.show', ['id' => $post->post_id]) }}"
                            class="btn btn-outline-primary">Посмотреть пост</a>
                        {{-- <a href="#" class="btn btn-outline-primary">Button</a>
                        <a href="" class="btn btn-info">Info</a> --}}
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    @if (!isset($_GET['search']))
        {{ $posts->links() }} // for pagination working
    @endif
@endsection
