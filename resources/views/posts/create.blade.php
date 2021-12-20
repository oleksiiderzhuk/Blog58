@extends('layouts.layout')

@section("content")
   <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <h3>Создать пост </h3>
        {{-- .form-group*3 --}}
        @include('posts.parts.form')
        
        <div class="form-group">
            <input type="submit" value="Создать пост" class="btn btn-outline-success">
        </div>
        
    </form>
@endsection