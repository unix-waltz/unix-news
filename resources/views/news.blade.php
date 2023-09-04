
@extends("layouts.template")
@section("content")
<br>
<div class="container">
<h1>All Post's</h1></div><br>
@if ($news->count() > 0)
  
<div class="container">
    
    @foreach ($news as $n )
    <div class="row" style="width: 100%; height: 60%;">

       <div class="col" ">
    <img src="{{ asset('logo-open-ai.png') }}" alt="Thumbnail" class="img-fluid rounded" style="width: 100%; height: 60%;">
</div>

        <div class="col-md-8">
            
           <h2>{{$n->title}}</h2>
            <p><strong>Author: <a href="/author/{{$n->user->username}}" class=""> {{$n->user->name}} </a></strong></p>
           <small class="text-body-secondary">{{$n->created_at->diffForHumans()}}</small> <p>
                {{$n->excerpt}}
                <a href="/news/{{$n->slug}}" class="custom-link">
                    <i class="custom-icon fas fa-arrow-right"></i>Lihat Selengkapnya
                </a>
            </p>
           
        </div>
    </div>
    <br>
    @endforeach
</div>@else
<h4 align="center">No Post Found</h4>
@endif

@endsection