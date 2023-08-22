


@extends("layouts.template")
@section("content")

<div class="container">
    <div class="box-hero">
        <img src="../icon.png" alt="Image de naruto usada de fondo">
        <p></p>
    </div>
    <div class="container m-4">
        <div class="container" id="body-x">
            <p><strong>- <a href="/author/{{$news->user->name}}">{{$news->user->name}}</a></strong>&nbsp;</p><small class="text-body-secondary">{{$news->created_at->diffForHumans()}}</small>
 <p class="fs-4">   {{$news->body}}</p><a href="/news">Kembali</a>
</div>
    </div>
    </div>
@endsection