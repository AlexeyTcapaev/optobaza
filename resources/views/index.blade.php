@extends('layouts.magazine')
@section('carousel')
<div class="carousel carousel-slider center">
    @foreach ($carousel as $slide)
    <div class="carousel-item" href="#one!">
        <h2></h2>
        <div class="slide-image">
            <a href="{{$slide->linked->slug}}">
                <img src="/storage/uploads/{{$slide->image}}">
            </a>
        </div>
    </div>
    @endforeach
  </div>
@endsection
@section('content')
<div class="row">
<h1>Рекомендуем</h1>
<div class="index-ul">
    @foreach ($recomendated as $product)
        <article class="col s12 col m4">
            <div class="card cascade">
                @if($product->image)
                <div class="view">
                    <img class="card-img-top" src="/storage/uploads/{{$product->image}}" alt="{{$product->name}}">
                </div>
                @endif
                <div class="card-body card-body-cascade">
                    <h5 class="secondary pb-2 pt-1">{{$product->name}}</h5>
                    <h4 class="font-weight-bold card-title">{{$product->tags}}</h4>
                    <p class="card-text">{{$product->description}}</p>
                    <p class="card-text">Артикул: <a>{{$product->article}}</a></p>
                    <a class="btn  waves-effect waves-light">В корзину</a>
                </div>
            </div>
        </article>
    @endforeach
</div>
</div>
@endsection
@section('sidebar')
@include('components.news')

@endsection
