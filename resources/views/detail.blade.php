@extends("layouts.template")
@section("content")

<div class="container mt-4">
    
        
    
    <div class="row">
        <div class="col-md-12">
            <h1 class="mb-4">{{$news->title}}</h1>
            <p><strong>Author: <a href="/author/{{$news->user->name}}">{{$news->user->name}}</a></strong></p>
           <a href="/Category/{{$news->category->category_slug}}">{{$news->category->category_name}}</a> 
            <img  src="../icon.png"alt="" class="img-fluid mb-4">
            {{$news->body}}
        </div>
    </div>
</div>
@endsection
