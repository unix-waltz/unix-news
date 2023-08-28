@extends('layouts.template')@section("content")
        <div class="container mt-5">
            <h1 class="mb-4" align="center">Author :{{$author->name}}</h1><br>
            <div class="row">
                @foreach ($author->news as $d )
              
                <div class="col-md-4">
                    <div class="video-card">
                        <a href="/news/{{$d->slug}}">
                            <img src="{{asset('logo-open-ai.png')}}" alt="Video Thumbnail" class="video-thumbnail">
                            <h2 class="video-title">{{ $d->title }}</h2> </a>
                            <p class="video-description">{{ $d->excerpt }}.
                       
                        <a href="/news/{{ $d->slug }}" class="custom-link">
                            <i class="custom-icon fas fa-arrow-right"></i>Lihat Selengkapnya
                        </a>  </p>
                    </div>
                </div>
                @endforeach
          
            </div>
        </div>
   
    
@endsection