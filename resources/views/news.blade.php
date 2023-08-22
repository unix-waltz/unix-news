
@extends("layouts.template")
@section("content")
<br>
<div class="container">
<h1>All Post's</h1></div><br>
@if ($news->count() > 0)
  
<div class="container mt-4">
    @foreach ($news as $n )
    <div class="row">

        <div class="col-md-4">
            <img src="icon.png" alt="Thumbnail" class="img-fluid">
        </div>
        <div class="col-md-8">
            
           <h2>{{$n->title}}</h2>
            <p><strong>Author: <a href="/author/{{$n->user->username}}" class=""> {{$n->user->name}} </a></strong></p>
           <small class="text-body-secondary">{{$n->created_at->diffForHumans()}}</small> <p>
                {{$n->excerpt}}
                <a href="/news/{{$n->slug}}">Lihat Selengkapnya</a>
            </p>
           
        </div>
    </div>
    <br>
    @endforeach
</div>@else
<h4 align="center">No Post Found</h4>
@endif

@endsection