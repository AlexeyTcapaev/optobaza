@extends('layouts.magazine')
@section('content')
<h1>Каталог</h1>
<div>
<ul class="row">
    @foreach ($categories as $category)
        <li class="col l4 s12">
            <a href="/catalog/{{$category->path}}">
                <div class="card">
                    <div class="card-content black-text">
                        <span class="card-title">{{$category->name}}</span>
                    </div>
                </div>
            </a>
        </li>
    @endforeach
</ul>
</div>
@endsection
@section('breadcrumbs')
<nav class="bread">
    <div class="nav-wrapper">
    <div class="container">
        <div class="col s12">
            <a href="/" class="breadcrumb">Главная</a>
            <a class="breadcrumb">Каталог</a>
        </div>
    </div>
    </div>
  </nav>
@endsection
