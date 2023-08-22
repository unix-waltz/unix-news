


@extends("layouts.template")
@section("content")
<div class="header">

    <div class="title" >
      <h1 class="title__name" id="body-x" >{{$news->title}}</h1><br>
      <h2 class="title__categories">
        <span class="categories__icon material-symbols-outlined"></span>
       
      </h2>
    </div>

        <a class="categories__item" href="/Category/{{$news->category->category_slug}}">
            <i class="fas fa-folder"></i> <span class="categories__item">{{$news->category->category_name}}</span></a> 
     
    <div class="stats">
      <div class="stats__stat">
        <p class="stat__name">reading time</p>
        <p class="stat__value">~20m</p>
      </div>

      <div class="stats__divider"></div>

      <div class="stats__stat">
        <p class="stat__name">views</p>
        <p class="stat__value">7.12k</p>
      </div>

      <div class="stats__divider"></div>

      <div class="stats__stat">
        <p class="stat__name">published</p>
        <p class="stat__value">3.12.2023</p>
      </div>

    </div>

  </div>
<div class="container">
    <div class="box-hero">
        <img src="../icon.png" alt="Image de naruto usada de fondo">
        <p></p>
    </div>
    <div class="container m-4">
        <div class="container" id="body-x">
            <p><strong>Author: <a href="/author/{{$news->user->name}}">{{$news->user->name}}</a></strong></p>
    {{$news->body}}
</div>
    </div>
    </div>
@endsection