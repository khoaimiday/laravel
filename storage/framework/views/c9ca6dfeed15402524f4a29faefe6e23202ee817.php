
<div class="navigation topNav">
    <nav class="navbar navbar-expand-md navbar-light  ">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo e(url('/')); ?>">

            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse align-items-baseline" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                
            <form id="search-nav">
                <input type="search" placeholder="Search">
            </form>


                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    <?php if(auth()->guard()->guest()): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('login')); ?>">Đăng Nhập</a>
                    </li>
                    <?php if(Route::has('register')): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('register')); ?>">Đăng Ký</a>
                    </li>
                    <?php endif; ?>
                    <?php else: ?>

                    <a href="" class="iconShoppingCart">
                        <div class="shoppingCart"><img src="<?php echo e(url('img/nav/shoppingCart.png')); ?>" alt=""></div>
                    </a>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            Xin chào, <?php echo e(Auth::user()->name); ?> ! <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                <?php echo e(__('Logout')); ?>

                            </a>

                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                <?php echo csrf_field(); ?>
                            </form>
                        </div>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
</div>
<style>
    .navbar .navbar-brand img {
        position: absolute;
        width: 100px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    }

    .navbar {
        position: relative;
        background: transparent;
        z-index: 100;
        height: 30px;
        padding: 3px 6px;

    }

    .navbar .nav-item a {
        font-size: 16px;
        font-weight: 600;
    }

    .topNav {
        padding: 20px;
        /* border-bottom:1px solid #fff; */
        transition: top 0.3s;
    }

    .search img {
        width: 18px;
        margin-bottom: -8px;
    }

    .shoppingCart img {
        width: 18px;
        margin-bottom: -8px;
    }

    /* INPUT SEARCH */

    a {
        color: #69C;
        text-decoration: none;
    }

    .topNav .navbar a:hover {
        color: #F60;
    }

    .topNav .navbar h1 {
        font: 1.7em;
        line-height: 110%;
        color: #000;
    }

    .topNav .navbar p {
        margin: 0 0 20px;
    }

    .topNav .navbar input {
        outline: none;
    }

    input[type=search] {
        -webkit-appearance: textfield;
        -webkit-box-sizing: content-box;
        font-family: inherit;
        font-size: 100%;
    }

    input::-webkit-search-decoration,
    input::-webkit-search-cancel-button {
        display: none;
    }


    input[type=search] {
        background: #fcfbfb url(https://static.tumblr.com/ftv85bp/MIXmud4tx/search-icon.png) no-repeat 9px center;
        border: solid 1px #ccc;
        padding: 9px 10px 9px 32px;
        width: 55px;

        -webkit-border-radius: 10em;
        -moz-border-radius: 10em;
        border-radius: 10em;

        -webkit-transition: all .5s;
        -moz-transition: all .5s;
        transition: all .5s;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);
    }

    input[type=search]:focus {
        width: 330px;
        background-color: #fff;
        /* border-color: #66CC75; */

        -webkit-box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
        -moz-box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3);
    }


    input:-moz-placeholder {
        color: #999;
    }

    input::-webkit-input-placeholder {
        color: #999;
    }


    /* END INPUT SEARCH */
</style>
<?php /**PATH E:\xampp\htdocs\laravel\laravel\resources\views/fragments/nav-bar-top.blade.php ENDPATH**/ ?>