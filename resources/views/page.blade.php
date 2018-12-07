@extends('layouts.magazine')
@section('content')
<div class="row">
<h1>{{$page->name}}</h1>
{!!$page->content!!}
</div>
@endsection
@section('breadcrumbs')
<nav class="bread">
    <div class="nav-wrapper">
    <div class="container">
        <div class="col s12">
            <a href="{{ url('/') }}" class="breadcrumb">Главная</a>
            <a class="breadcrumb">{{$page->name}}</a>
        </div>
    </div>
    </div>
  </nav>
@endsection
