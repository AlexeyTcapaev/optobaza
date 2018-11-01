@extends('layouts.site')
@section('carousel')
<!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
        <!--Indicators-->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-2" data-slide-to="1"></li>
          <li data-target="#carousel-example-2" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <div class="view">
              <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(68).jpg" alt="First slide">
              <div class="mask rgba-black-light"></div>
            </div>
            <div class="carousel-caption">
              <h3 class="h3-responsive">Light mask</h3>
              <p>First text</p>
            </div>
          </div>
          <div class="carousel-item">
            <!--Mask color-->
            <div class="view">
              <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(6).jpg" alt="Second slide">
              <div class="mask rgba-black-strong"></div>
            </div>
            <div class="carousel-caption">
              <h3 class="h3-responsive">Strong mask</h3>
              <p>Secondary text</p>
            </div>
          </div>
          <div class="carousel-item">
            <!--Mask color-->
            <div class="view">
              <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(9).jpg" alt="Third slide">
              <div class="mask rgba-black-slight"></div>
            </div>
            <div class="carousel-caption">
              <h3 class="h3-responsive">Slight mask</h3>
              <p>Third text</p>
            </div>
          </div>
        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
      </div>
      <!--/.Carousel Wrapper-->
@endsection
@section('content')
<h1>Рекомендуем</h1>
<div class="index-ul row">
    <div class="col-xs-12 col-md-4">
        <div class="card cascade">
            <div class="view">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(147).jpg"
                    alt="Card image cap">
                <a>
                    <div class="mask rgba-white-slight waves-effect waves-light"></div>
                </a>
            </div>
            <div class="card-body card-body-cascade">
                <h5 class="pink-text pb-2 pt-1"><i class="fa fa-cutlery"></i> Culinary</h5>
                <h4 class="font-weight-bold card-title">Cheat day inspirations</h4>
                <p class="card-text">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
                    suscipit laboriosam, nisi ut aliquid ex ea commodi.</p>
                <a class="btn btn-unique waves-effect waves-light">Button</a>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-md-4">
        <div class="card cascade">
            <div class="view">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(147).jpg"
                    alt="Card image cap">
                <a>
                    <div class="mask rgba-white-slight waves-effect waves-light"></div>
                </a>
            </div>
            <div class="card-body card-body-cascade">
                <h5 class="pink-text pb-2 pt-1"><i class="fa fa-cutlery"></i> Culinary</h5>
                <h4 class="font-weight-bold card-title">Cheat day inspirations</h4>
                <p class="card-text">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
                    suscipit laboriosam, nisi ut aliquid ex ea commodi.</p>
                <a class="btn btn-unique waves-effect waves-light">Button</a>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-md-4">
        <div class="card cascade">
            <div class="view">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(147).jpg"
                    alt="Card image cap">
                <a>
                    <div class="mask rgba-white-slight waves-effect waves-light"></div>
                </a>
            </div>
            <div class="card-body card-body-cascade">
                <h5 class="pink-text pb-2 pt-1"><i class="fa fa-cutlery"></i> Culinary</h5>
                <h4 class="font-weight-bold card-title">Cheat day inspirations</h4>
                <p class="card-text">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
                    suscipit laboriosam, nisi ut aliquid ex ea commodi.</p>
                <a class="btn btn-unique waves-effect waves-light">Button</a>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-md-4">
        <div class="card cascade">
            <div class="view">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(147).jpg"
                    alt="Card image cap">
                <a>
                    <div class="mask rgba-white-slight waves-effect waves-light"></div>
                </a>
            </div>
            <div class="card-body card-body-cascade">
                <h5 class="pink-text pb-2 pt-1"><i class="fa fa-cutlery"></i> Culinary</h5>
                <h4 class="font-weight-bold card-title">Cheat day inspirations</h4>
                <p class="card-text">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
                    suscipit laboriosam, nisi ut aliquid ex ea commodi.</p>
                <a class="btn btn-unique waves-effect waves-light">Button</a>
            </div>
        </div>
    </div>
</div>
@endsection
@section('sidebar')
<h1>Новости</h1>
<div class="list-group">
        <a href="#!" class="list-group-item list-group-item-action flex-column align-items-start active">
          <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-2 h5">List group item heading</h5>
            <small>3 days ago</small>
          </div>
          <p class="mb-2">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
          <small>Donec id elit non mi porta.</small>
        </a>
        <a href="#!" class="list-group-item list-group-item-action flex-column align-items-start">
          <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-2 h5">List group item heading</h5>
            <small class="text-muted">3 days ago</small>
          </div>
          <p class="mb-2">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
          <small class="text-muted">Donec id elit non mi porta.</small>
        </a>
        <a href="#!" class="list-group-item list-group-item-action flex-column align-items-start">
          <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-2 h5">List group item heading</h5>
            <small class="text-muted">3 days ago</small>
          </div>
          <p class="mb-2">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
          <small class="text-muted">Donec id elit non mi porta.</small>
        </a>
      </div>
      
@endsection
