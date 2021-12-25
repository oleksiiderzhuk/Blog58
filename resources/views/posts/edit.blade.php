@extends('layouts.layout', ['title'=> "Редактировать пост №$post->post_id"])

@section("content")
   <form action="{{ route('post.update', ['id'=>$post->post_id]) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <h3>Редактировать пост </h3>
        {{-- .form-group*3 --}}
        @include('posts.parts.form')
        
        <div class="form-group">
            <input type="submit" value="Редактировать пост" class="btn btn-outline-success">
        </div>
        
    </form>
@endsection