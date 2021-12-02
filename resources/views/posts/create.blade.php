@extends('layouts.layout')

@section("content")
   <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <h3>Создать пост </h3>
        {{-- .form-group*3 --}}
        <div class="form-group">
            <input type="text" class="form-control" title="name">
        </div>
        <div class="form-group">
            <textarea name="descr" rows="10" class="form-control"></textarea>
        </div>
        
        <div class="form-group">
            <input type="file"class="form-group">    
        </div>
        
        <div class="form-group">
            <input type="submit" value="Создать пост" class="btn btn-outline-success">
        </div>
        
    </form>
@endsection