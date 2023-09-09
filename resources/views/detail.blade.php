


@extends("layouts.template")
@section("content")
<br><br>
<br><br>

<div class="container">
    <div class="row" id="body-x">
        <h1>{{$news->title}}</h1>
        <div class="col-sm text-secondary">
<p>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<i class="bi bi-tag text-secondary h5 "></i>
<a href="/Category/{{$news->category->category_slug}}" class="text-secondary">
    {{$news->category->category_name}}
</a>
</p>
        </div>
       
    </div>
    
    <div class="box-hero">
        
        <img src="{{asset('logo-open-ai.png')}}" alt="Image de naruto usada de fondo">
        <p></p>
    </div>
    <div class="container m-4">
        <div class="container" id="body-x">
            
            <p><strong><a href="/author/{{$news->user->username}}" class="blockquote-footer">{{$news->user->name}}</a></strong>&nbsp;</p><small class="text-body-secondary">{{$news->created_at->diffForHumans()}}</small>
 <p class="fs-4">   {{$news->body}}</p> <a href="/news" class="custom-link">
    <i class="custom-icon fas fa-arrow-left"></i> Kembali
</a>
</div>
    </div>
    </div>
@endsection