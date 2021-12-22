@extends('layouts.layout')

@section("content")
   <form action="{{ route('post.update', ['id'=>$post->post_id]) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <h3>Создать пост </h3>
        {{-- .form-group*3 --}}
        @include('posts.parts.form')
        
        <div class="form-group">
            <input type="submit" value="Редактировать пост" class="btn btn-outline-success">
        </div>
        
    </form>
@endsection