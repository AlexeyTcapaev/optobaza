@extends('layouts.magazine')
@section('carousel')
@section('breadcrumbs')
<nav class="bread">
    <div class="nav-wrapper">
    <div class="container">
        <div class="col s12">
            <a href="/" class="breadcrumb">Главная</a>
            <a href="/catalog" class="breadcrumb">Каталог</a>
            @foreach ($category->ancestors as $item)
                <a href="/catalog/{{$item->path}}" class="breadcrumb">{{$item->name}}</a>
            @endforeach
            <a href="/catalog/{{$category->path}}" class="breadcrumb">{{$category->name}}</a>
        </div>
    </div>
    </div>
  </nav>
@endsection

@endsection
