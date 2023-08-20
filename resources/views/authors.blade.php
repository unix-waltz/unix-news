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
                    <p>Deskripsi kategori 1.</p>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection
