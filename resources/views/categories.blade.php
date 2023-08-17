@extends('layouts.template')
@section('content')
<br>
<h2 align="center">Kategories</h2>
<div class="container">
    <div class="row">
        @foreach ($data as $d )
        <div class="col-md-4">
            <a href="/Category/{{$d->category_slug}}" class="category-link"> 
                <div class="category-box">
                    <h3>{{$d->category_name}}</h3>
                    <p>Deskripsi kategori 1.</p>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection
