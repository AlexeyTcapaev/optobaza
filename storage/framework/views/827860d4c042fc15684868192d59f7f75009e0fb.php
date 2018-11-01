<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title>Laravel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo e(mix('css/app.css')); ?>">
</head>

<body>
    <!--Navbar-->
    <nav class="sticky navbar navbar-expand-lg navbar-dark primary">

        <!-- Navbar brand -->
        <a class="navbar-brand" href="#">
            <img src="/storage/logo.png">
            Оптобаза</a>

        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
            aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="basicExampleNav">

            <!-- Links -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(url('/')); ?>">Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">О нас</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Правила работы</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Оплата и доставка</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Контакты</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Акции</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Комплексное снабжение</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Оптовые прайс листы</a>
                </li>
                <!-- Dropdown -->
                <li class="nav-item ">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Каталог</a>
                    <div class="dropdown-menu dropdown-primary full-width" aria-labelledby="navbarDropdownMenuLink">
                        <ul class="grid-catalog">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Action</a></li>
                        </ul>
                    </div>
                </li>

            </ul>
            <!-- Links -->

            <form class="form-inline">
                <div class=" my-0 flex-search">
                    <input class="form-control " type="text" placeholder="Поиск по каталогу" aria-label="Search">
                    <button type="button" class="btn btn-sm"><i class="fa fa-search mr-1"></i>Поиск</button>
                </div>
            </form>
            <a href="" class="btn btn-sm"><i class="fa fa-shopping-cart mr-1"></i>Корзина</a>
            <?php if(Route::has('login')): ?>
            <?php if(auth()->guard()->check()): ?>
            <div class="dropdown">

                <!--Trigger-->
                <button class="btn btn-sm dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false"><?php echo e(Auth::user()->name); ?></button>


                <!--Menu-->
                <div class="dropdown-menu dropdown-primary">
                    <a class="dropdown-item" href="<?php echo e(route('home')); ?>">Личный кабинет</a>
                    <a class="dropdown-item" href=" <?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Выход</a>
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                        <?php echo csrf_field(); ?>
                    </form>
                </div>
            </div>
            <!--/Dropdown primary-->
        </div>
        <?php else: ?>
        <a href="<?php echo e(route('login')); ?>" class="btn btn-sm">Вход</a>
        <a href="<?php echo e(route('register')); ?>" class="btn btn-sm">Регистрация</a>
        <?php endif; ?>
        <?php endif; ?>

        </div>
        <!-- Collapsible content -->

    </nav>
    <?php echo $__env->yieldContent('carousel'); ?>
    <main class="container">  
            <div class="row">
                    <div class="col-xl-9"> 
                        <?php echo $__env->yieldContent('content'); ?>
                    </div>
                    <div class="col-xl-3"> 
                        <?php echo $__env->yieldContent('sidebar'); ?>
                    </div>
    </main>
    <!-- Footer -->
    <footer class="page-footer font-small primary">

        <!-- Footer Links -->
        <div class="container text-center text-md-left">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-3 mx-auto">

                    <!-- Links -->
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Very long link 1</a>
                        </li>
                        <li>
                            <a href="#!">Very long link 2</a>
                        </li>
                        <li>
                            <a href="#!">Very long link 3</a>
                        </li>
                        <li>
                            <a href="#!">Very long link 4</a>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-3 mx-auto">

                    <!-- Links -->
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Link 1</a>
                        </li>
                        <li>
                            <a href="#!">Link 2</a>
                        </li>
                        <li>
                            <a href="#!">Link 3</a>
                        </li>
                        <li>
                            <a href="#!">Link 4</a>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-3 mx-auto">

                    <!-- Links -->
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Link 1</a>
                        </li>
                        <li>
                            <a href="#!">Link 2</a>
                        </li>
                        <li>
                            <a href="#!">Link 3</a>
                        </li>
                        <li>
                            <a href="#!">Link 4</a>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-3 mx-auto">

                    <!-- Links -->
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Link 1</a>
                        </li>
                        <li>
                            <a href="#!">Link 2</a>
                        </li>
                        <li>
                            <a href="#!">Link 3</a>
                        </li>
                        <li>
                            <a href="#!">Link 4</a>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2018 Copyright:
            <a href="https://mdbootstrap.com/bootstrap-tutorial/"> MDBootstrap.com</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->
    <script src="<?php echo e(mix('js/index.js')); ?>" defer></script>
    <script src="<?php echo e(mix('js/popper.min.js')); ?>" defer></script>
    <script src="<?php echo e(mix('js/bootstrap.min.js')); ?>" defer></script>
    <script src="<?php echo e(mix('js/mdb.min.js')); ?>" defer></script>
    <script src="<?php echo e(mix('js/main.js')); ?>" defer></script>
</body>

</html>