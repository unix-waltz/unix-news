
@extends("layouts.template")
@section("content")
<div class="container"><br><br>
    <div class="card border-0" id="shsh">
        <img src="{{ asset("icon.png") }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title" align="center">{{ $data[0]->title }}</h5>
            <p class="card-text" align="center">{{ $data[0]->excerpt }} 
                <a href="/news/{{ $data[0]->slug }}" class="custom-link">
                    <i class="custom-icon fas fa-arrow-right"></i>Lihat Selengkapnya
                </a>    </p>
            <small class="text-body-secondary">{{ $data[0]->created_at->diffForHumans() }}</small>
            <p class="card-text"></p>
        </div>
    </div>
    
<div class="container mt-5" id="section-detail">
    <h1 class="mb-4" align="center"></h1><br>
    <div class="row">
        @foreach ($data->skip(1)->take(15) as $d )
            
      
        <div class="col-md-4">
            <div class="video-card">
                <a href="/news/{{$d->slug}}">
                    <img src="{{asset('logo-open-ai.png')}}" alt="Video Thumbnail" class="video-thumbnail">
                    <h2 class="video-title">{{$d->title}}</h2>
                    <p class="video-description">{{$d->excerpt}}</p>
                    <small class="text-body-secondary">{{$d->created_at->diffForHumans()}}</small>
                </a>
            </div>
        </div>
   
        @endforeach
  
    </div>
</div>

</div>

@endsection
