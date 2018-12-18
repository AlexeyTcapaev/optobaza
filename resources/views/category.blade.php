@extends('layouts.magazine')
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
@section('content')

    <h1>{{$category->name}}</h1>
    @if($category->description)
        <p>{{$category->description}}</p>
    @endif
    <ul class="row">
        @foreach ($category->descendants as $cat)
            <li class="col l4 s12">
                <a href="/catalog/{{$cat->path}}">
                    <div class="card">
                        <div class="card-content black-text">
                            <span class="card-title">{{$cat->name}}</span>
                        </div>
                    </div>
                </a>
            </li>
        @endforeach
    </ul>

    <div class="index-ul">
        @foreach ($category->products as $product)
            <article class="col s12 l4">
                <div class="card cascade">
                    @if($product->image)
                    <div class="view">
                        <img class="card-img-top" src="/storage/uploads/{{$product->image}}" alt="{{$product->name}}">
                    </div>
                    @endif
                    <div class="card-body card-body-cascade">
                        <h5 class="secondary pb-2 pt-1">{{$product->name}}</h5>
                        @if(count($product->tags) > 0)
                            <h4 class="font-weight-bold card-title">{{$product->tags}}</h4>
                        @endif
                        @if($product->description)
                            <p class="card-text">{{$product->description}}</p>
                        @endif
                        @if($product->article)
                            <p class="card-text">Артикул: <a>{{$product->article}}</a></p>
                        @endif
                        <a class="btn  waves-effect waves-light">В корзину</a>
                    </div>
                </div>
            </article>
        @endforeach
    </div>
@endsection
