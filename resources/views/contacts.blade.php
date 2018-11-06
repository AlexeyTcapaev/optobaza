@extends('layouts.magazine')
@section('content')
<div class="row">
<h1>О нас</h1>
<iframe src="https://yandex.ru/map-widget/v1/-/CBBlzPaQdD" width="90%" height="400" frameborder="0" allowfullscreen="true"></iframe>
</div>
@endsection
@section('breadcrumbs')
<nav class="bread">
    <div class="nav-wrapper">
    <div class="container">
        <div class="col s12">
            <a href="#!" class="breadcrumb">First</a>
            <a href="#!" class="breadcrumb">Second</a>
            <a href="#!" class="breadcrumb">Third</a>
        </div>
    </div>
    </div>
  </nav>   
@endsection
@section('sidebar')
<h1>Новости</h1>
<div class="row">
<ul class="collection news">
    <li class="collection-item avatar">
      <img src="images/yuna.jpg" alt="" class="circle">
      <span class="title">Title</span>
      <p>First Line <br>
         Second Line
      </p>
      <a href="#!" class="secondary-content">06.11.2018</a>
    </li>
    <li class="collection-item avatar">
      <i class="material-icons circle">folder</i>
      <span class="title">Title</span>
      <p>First Line <br>
         Second Line
      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
    </li>
    <li class="collection-item avatar">
      <i class="material-icons circle green">insert_chart</i>
      <span class="title">Title</span>
      <p>First Line <br>
         Second Line
      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
    </li>
    <li class="collection-item avatar">
      <i class="material-icons circle red">play_arrow</i>
      <span class="title">Title</span>
      <p>First Line <br>
         Second Line
      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
    </li>
  </ul>
  </div>
@endsection
