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
                    <ul class="right hide-on-med-and-down">
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
    <div class="row ">

            <div class="col s12 m4 l2 hide-on-med-and-down"> <!-- Note that "m4 l3" was added -->
                <div class="collection">
                    <a href="{{ route('admin.') }}" class="collection-item {{setActive(['admin'])}}">Пользователи</a>
                    <a href="{{ route('admin.catalog') }}" class="collection-item {{setActive(['admin/catalog'])}}">Каталог</a>
                    <a href="{{ route('admin.products') }}" class="collection-item {{setActive(['admin/products'])}}">Товары</a>
                    <a href="{{ route('admin.tags') }}" class="collection-item {{setActive(['admin/tags'])}}">Теги</a>
                    <a href="{{ route('admin.carousel') }}" class="collection-item {{setActive(['admin/carousel'])}}">Карусель</a>
                    <a href="{{ route('admin.pages') }}" class="collection-item {{setActive(['admin/pages'])}}">Страницы</a>
                    <a href="{{ route('admin.adminnews') }}" class="collection-item {{setActive(['admin/adminnews'])}}">Новости</a>
                </div>
            </div>

            <div class="col s12 m8 l10">
                @yield('content')
            </div>

        </main>
        <script src="{{ mix('js/app.js') }}" defer></script>
        <script>
            function readURL(input,item = '#new-product') {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $(item)
                            .attr('src', e.target.result).show()
                        if( item == '#new-product')
                        {
                            $('#i-non-img').remove()
                        }
                    };

                    reader.readAsDataURL(input.files[0]);
                }
            }
        </script>
    </body>
</html>
