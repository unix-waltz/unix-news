@extends('layouts.template')
@section('content')
{{-- @dd($data) --}}
<br>
<h2 align="center">Author's</h2>
<div class="container">
    <div class="row">
        @foreach ($data as $d )
        <div class="col-md-4">
            <a href="/author/{{$d->username}}" class="category-link"> 
                <div class="category-box">
                    <h3>{{$d->name}}</h3>
                </a>
                    <p> &nbsp;<i class="fas fa-folder"></i> 
                        @foreach ($d->news as $news)

                           <a href="/Category/{{$news->category->category_slug}}">{{ $news->category->category_name}},</a>
                        @endforeach
                    </p>
                    <a href="/author/{{$d->username}}" class="category-link"> 
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection
