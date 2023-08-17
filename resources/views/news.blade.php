@extends("layouts.template")
@section("content")
<div class="container mt-4">
    @foreach ($news as $n )
    <div class="row">
        <div class="col-md-4">
            <img src="icon.png" alt="Thumbnail" class="img-fluid">
        </div>
        <div class="col-md-8">
            
           <h2>{{$n->title}}</h2>
            <p><strong>Author: John Doe</strong></p>
            <p>
                {{$n->excerpt}}
                <a href="/news/{{$n->slug}}">Lihat Selengkapnya</a>
            </p>
           
        </div>
    </div>
    @endforeach
</div>
@endsection