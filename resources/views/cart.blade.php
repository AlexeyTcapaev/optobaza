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
<form class="col s12">
    <div class="row">
      <div class="input-field col s6">
        <i class="material-icons prefix">mail</i>
        <input id="icon_prefix" type="text" class="validate" oninput="check(this.value)">
        <label for="icon_prefix">Почта</label>
      </div>
      <button class="waves-effect waves-light btn" id="submit" disabled>button</button>
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
