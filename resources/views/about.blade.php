@extends('layouts.magazine')
@section('content')
<div class="row">
<h1>О нас</h1>
<p>OPTOBAZA.RU — Мы экономим Ваши деньги!

        Мы являемся официальным представителем таких производителей как Brennenstuhl, FRAME, GRAPHITE, NEO, TOPEX и многих других.
        
        На нашей площадке широко представлен весь спектр ручного инструмента, пневматический инструмент, любая оснастка, измерительный инструмент, монтажный инструмент, электроинструмент, профессиональные удлинители и распределители, различного типа лестницы и стремянки, а так же товары для дома и сада.
        
        Покупать у нас выгодно, потому что, прежде всего мы ориентированны на продажи оптом и готовы предложить самые интересные цены. Ведь чем больше вы заказываете, тем дешевле будет цена на единицу товара. Однако мы не забываем и наших розничных и мелкооптовых покупателей.
        
          Для вашего удобства возможна покупка по безналичному расчёту, так же возможна доставка заказанных товаров максимально быстро и просто.
        
        Будем рады видеть Вас в числе наших партнёров!</p>
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
