@extends('layouts.layout')

@section('content')
    <div class="row">
        <div class="col-12">
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
    </div>
@endsection
