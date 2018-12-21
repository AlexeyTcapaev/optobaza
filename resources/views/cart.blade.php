@extends('layouts.magazine')
@section('breadcrumbs')
<nav class="bread">
    <div class="nav-wrapper">
        <div class="container">
            <div class="col s12">
                <a href="/" class="breadcrumb">Главная</a>
                <a href="/cart" class="breadcrumb">Корзина</a>
            </div>
        </div>
    </div>
  </nav>
@endsection
@section('content')
<div class="row">

@foreach ($cart as $order)
    <ul class="collection">
        <li class="collection-item avatar cart-item">
            <img src="/storage/uploads/{{$order->product->image}}" alt="{{$order->product->name}}">
            <div class="info">
                <h4>{{$order->product->name}}</h4>
                <p>{{$order->product->description}}</p>
            </div>
            <div class="actions">
                <a ><i class="material-icons">close</i></a>
                <a>Количество: {{$order->quantity}}</a>
            </div>
        </li>
    </ul>
@endforeach
</div>
<form class="col s12">
    <div class="row cart-accept">
      <div class="input-field">
        <i class="material-icons prefix">mail</i>
        <input id="icon_prefix" type="text" class="validate" oninput="check(this.value)">
        <label for="icon_prefix">Почта</label>
      </div>
      <button class="waves-effect waves-light btn" id="submit" disabled>Заказать</button>
  </form>
  <script>
      function check(value) {
        if(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(value)){
            document.querySelector('#submit').removeAttribute('disabled')
        }
        else  document.querySelector('#submit').setAttribute('disabled',true)
      }
  </script>
@endsection
