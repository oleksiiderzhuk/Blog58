@extends('layouts.layout')

@section('content')
    <div class="row">

        {{-- <div>post_id: {{ $post->post_id }}</div> --}}

        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>{{ $post->title }}</h2>
                </div>
                <div class="card-body">
                    <?php 
                        if (preg_match('~^\d{2}$~', $post->img)) {
                            $post->img = '/img/' . $post->img . '.jpg';
                        }
                    ?>
                    
                    <div class="card-img card-img__max"
                        style="background-image: url({{ $post->img }})"></div>
                    <div class="card-author">Автор: {{ $post->name }}</div>
                    <div class="card-date">Пост создан: {{ $post->created_at->diffForHumans() }}</div>
                    <div class="card-btn">
                        <a href="{{ route('post.index') }}" class="btn btn-outline-primary">На главную</a>
                        <a href="{{ route('post.edit', ['id'=>$post->post_id]) }}" class="btn btn-outline-success">Редактировать</a>
                        <a href="{{ route('post.destroy', ['id'=>$post->post_id]) }}" class="btn btn-outline-danger">Удалить</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
