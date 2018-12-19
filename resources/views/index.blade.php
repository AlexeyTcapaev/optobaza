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
        @include('components.product-card',['product' => $product])
    @endforeach
</div>
</div>
@endsection
@section('sidebar')
@include('components.news')

@endsection
