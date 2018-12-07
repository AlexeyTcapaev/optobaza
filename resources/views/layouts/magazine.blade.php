<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    </head>
    <body>
    <nav>
        <div class="nav-wrapper">
        <a href="{{ url('/') }}" class="brand-logo"><img src="/storage/logo.png"></a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <div class="search-bar hide-on-med-and-down">
            <input type="text" class="browser-default" placeholder="Поиск..">
            <i class="material-icons">search</i>
        </div>
        <ul class="right hide-on-med-and-down">
            <li><a href="{{ url('/') }}">Главная</a></li>
            @foreach ($nav as $item)
                <li><a href="{{ url('/'.$item->page->slug) }}">{{$item->page->name}}</a></li>
            @endforeach
            <li><a href="mobile.html"><i class="material-icons i-nav">account_circle</i></a></li>
        </ul>
        </div>
    </nav>
    <ul class="sidenav" id="mobile-demo">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">Javascript</a></li>
        <li><a href="mobile.html">Mobile</a></li>
    </ul>
        <main>
        @yield('carousel')
        @yield('breadcrumbs')
            <div class="container">
            <div class="row">
                @if(trim($__env->yieldContent(('sidebar'))))
                <div class="col l9 s12">
                    @yield('content')
                </div>
                <div class="col l3 s12">
                    @yield('sidebar')
                </div>
                @else
                <div class="col l12 s12">
                        @yield('content')
                </div>
                @endif
            </div>

            </div>
            <div class="my-badge-wrapper">
                <a class="waves-effect waves-light btn btn-floating cart-feature" ><i class="material-icons">shopping_cart</i></a>
                <span >10</span>
            </div>
        </main>
        <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5>Оптобаза</h5>
                <p class="secondary">магазин инструмента и стройматериалов.</p>
                <p class="secondary">Телефон в Санкт-Петербурге:<br><strong><a href="tel:88127029956">88127029956</a></strong></p>
                <p class="secondary">График работы:ПН-ПТ,9.00-18.00</p>
                <p class="secondary">Санкт-Петербург, ул. Магнитогорская, д.51Ж,офис 342.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5>Страницы</h5>
                <ul>
                  <li><a class="secondary" href="#!">Главная</a></li>
                  <li><a class="secondary" href="#!">О нас</a></li>
                  <li><a class="secondary" href="#!">Каталог</a></li>
                  <li><a class="secondary" href="#!">Правила работы</a></li>
                  <li><a class="secondary" href="#!">Оплата и доставка</a></li>
                  <li><a class="secondary" href="#!">Контакты</a></li>
                  <li><a class="secondary" href="#!">Акции</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2018 ООО "Оптобаза"
            </div>
          </div>
        </footer>
        <script src="{{ mix('js/app.js') }}" defer></script>
    </body>
</html>
