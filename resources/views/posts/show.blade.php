@extends('layouts.layout')

@section('content')
    <div class="row">
        <?php
        $i = 2;
        ?>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>{{ $post->title }}</h2>
                </div>
                <div class="card-body">
                    <div class="card-img card-img__max"
                        style="background-image: url({{ $post->img ?? asset('img/0' . $i . '.jpg') }})"></div>
                        <div class="card-author">Автор: {{ $post->name }}</div>
                        <div class="card-author">Пост создан: {{ $post->created_at }}</div>
                        <a href="{{ route('post.index') }}" class="btn btn-outline-primary">На главную</a>
                </div>
            </div>
        </div>
        <?php
        $i++;
        ?>
    </div>
@endsection
