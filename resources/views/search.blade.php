@extends('layouts.magazine')@section('breadcrumbs')
<nav class="bread">
    <div class="nav-wrapper">
    <div class="container">
        <div class="col s12">
            <a href="{{ url('/') }}" class="breadcrumb">Главная</a>
            <a class="breadcrumb">Поиск</a>
        </div>
    </div>
    </div>
  </nav>
@endsection


@section('content')
    @if(isset($products) && count($products) > 0)
        <h1>Результаты поиска</h1>
        @foreach ($products as $product)
            @include('components.product-card',['product' => $product])
        @endforeach
    @else
        <h1>{{$message}}</h1>
    @endif
@endsection
