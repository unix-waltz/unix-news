@extends('layouts.template')@section("content")
   
        <div class="container mt-5">
            <h1 class="mb-4" align="center">Category :{{$category->category_name}}</h1><br>
            <div class="row">
                @foreach ($category->news as $c )
                    
                
                <div class="col-md-4">
                    <div class="video-card">
                        <a href="/news/{{$c->slug}}">
                            <img src="{{asset('logo-open-ai.png')}}" alt="Video Thumbnail" class="video-thumbnail">
                           </a>  <h2 class="video-title">{{$c->title}}</h2>
                            <p class="video-description">{{$c->excerpt}}.
                                <a href="/news/{{ $c->slug }}" class="custom-link">
                                    <i class="custom-icon fas fa-arrow-right"></i>Lihat Selengkapnya
                                </a>  
                            </p>
                       
                    </div>
                </div>
                @endforeach
          
            </div>
        </div>
   
    
@endsection