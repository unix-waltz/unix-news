@extends('layouts.template')@section("content")
   
        <div class="container mt-5">
            <h1 class="mb-4" align="center">Category :{{$category->category_name}}</h1><br>
            <div class="row">
                @foreach ($category->news as $c )
                    
                
                <div class="col-md-4">
                    <div class="video-card">
                        <a href="/news/{{$c->slug}}">
                            <img src="https://via.placeholder.com/300x200" alt="Video Thumbnail" class="video-thumbnail">
                            <h2 class="video-title">{{$c->title}}</h2>
                            <p class="video-description">{{$c->excerpt}}.</p>
                        </a>
                    </div>
                </div>
                @endforeach
          
            </div>
        </div>
   
    
@endsection