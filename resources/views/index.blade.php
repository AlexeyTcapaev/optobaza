@extends('layouts.magazine')
@section('carousel')
<div class="carousel carousel-slider center">
    <div class="carousel-item red white-text" href="#one!">
      <h2>First Panel</h2>
      <p class="white-text">This is your first panel</p>
    </div>
    <div class="carousel-item amber white-text" href="#two!">
      <h2>Second Panel</h2>
      <p class="white-text">This is your second panel</p>
    </div>
    <div class="carousel-item green white-text" href="#three!">
      <h2>Third Panel</h2>
      <p class="white-text">This is your third panel</p>
    </div>
    <div class="carousel-item blue white-text" href="#four!">
      <h2>Fourth Panel</h2>
      <p class="white-text">This is your fourth panel</p>
    </div>
  </div>
@endsection
@section('content')
<div class="row">
<h1>Рекомендуем</h1>
<div class="index-ul ">
    <div class="col s12 col m4">
        <div class="card cascade">
            <div class="view">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(147).jpg"
                    alt="Card image cap">
                <a>
                    <div class="mask rgba-white-slight waves-effect waves-light"></div>
                </a>
            </div>
            <div class="card-body card-body-cascade">
                <h5 class="secondary pb-2 pt-1"><i class="fa fa-cutlery"></i> Culinary</h5>
                <h4 class="font-weight-bold card-title">Cheat day inspirations</h4>
                <p class="card-text">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
                    suscipit laboriosam, nisi ut aliquid ex ea commodi.</p>
                <a class="btn  waves-effect waves-light">Button</a>
            </div>
        </div>
    </div>
    <div class="col s12 col m4">
        <div class="card cascade">
            <div class="view">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(147).jpg"
                    alt="Card image cap">
                <a>
                    <div class="mask rgba-white-slight waves-effect waves-light"></div>
                </a>
            </div>
            <div class="card-body card-body-cascade">
                <h5 class="secondary pb-2 pt-1"><i class="fa fa-cutlery"></i> Culinary</h5>
                <h4 class="font-weight-bold card-title">Cheat day inspirations</h4>
                <p class="card-text">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
                    suscipit laboriosam, nisi ut aliquid ex ea commodi.</p>
                <a class="btn  waves-effect waves-light">Button</a>
            </div>
        </div>
    </div>
    <div class="col s12 col m4">
        <div class="card cascade">
            <div class="view">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(147).jpg"
                    alt="Card image cap">
                <a>
                    <div class="mask rgba-white-slight waves-effect waves-light"></div>
                </a>
            </div>
            <div class="card-body card-body-cascade">
                <h5 class="secondary pb-2 pt-1"><i class="fa fa-cutlery"></i> Culinary</h5>
                <h4 class="font-weight-bold card-title">Cheat day inspirations</h4>
                <p class="card-text">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
                    suscipit laboriosam, nisi ut aliquid ex ea commodi.</p>
                <a class="btn  waves-effect waves-light">Button</a>
            </div>
        </div>
    </div>
    <div class="col s12 col m4">
        <div class="card cascade">
            <div class="view">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(147).jpg"
                    alt="Card image cap">
                <a>
                    <div class="mask rgba-white-slight waves-effect waves-light"></div>
                </a>
            </div>
            <div class="card-body card-body-cascade">
                <h5 class="secondary pb-2 pt-1"><i class="fa fa-cutlery"></i> Culinary</h5>
                <h4 class="font-weight-bold card-title">Cheat day inspirations</h4>
                <p class="card-text">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
                    suscipit laboriosam, nisi ut aliquid ex ea commodi.</p>
                <a class="btn  waves-effect waves-light">Button</a>
            </div>
        </div>
    </div>
</div>
</div>
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
