<!doctype html>
<html lang="en">

<head>
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

    
    <link rel="stylesheet" href="<?php echo e(url('/owlcarousel/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('/owlcarousel/owl.theme.default.min.css')); ?>">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <?php echo $__env->yieldContent('style'); ?>
</head>


<style>
    * {
        box-sizing: border-box;
    }

    /* Style the body */
    body {
        font-family: Arial, Helvetica, sans-serif;
        margin: 0;
        font-size: 12px;
        background-color: #dbefdc
    }

    /* HEADER #### LOGO TITLE */
    .header {
        width: 100%;
        height: 100%;
        padding-right: 8%;
        padding-top: 5%;
        color: #1B4E00;
        text-align: right;
        font-family: 'M PLUS Rounded 1c', sans-serif;
    }

    .headerfont {

        font-size: 60px;
    }

    .topheader2 {
        /* padding-right: 50px; */
        background-image: url('img/nav/3.png');
        min-height: 400px;
        background-size: cover;
        background-repeat: no-repeat;
        background-color: rgba(0, 0, 0, 0);
        background-origin: padding-box;
    }

    /* Increase the font size of the heading */
    .header p {
        font-size: 25px;
    }
    /* END HEADER #### LOGO TITLE */


    /* CAROUSEL */
    .carousel {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8);
    }

    .carousel .owl-dots {
        position: absolute;
        bottom: 10px;
        left: 0px;
        right: 0px;
    }

    .owl-theme .owl-dots .owl-dot span {
        border: 3px solid #fff;
        height: 15px;
        width: 15px;
        background-color: transparent;
        opacity: .4;
        transition: opacity .3s;
    }

    .owl-theme .owl-dots .owl-dot.active span {
        background-color: white;
        opacity: 1;
        border: 3px solid #fff;
    }

    .owl-theme .owl-dots .owl-dot:hover span {
        background-color: transparent;
        border: 3px solid #fff;
        opacity: 1;
    }
    /* END CAROUSEL */

    /* FOOTER */
    .footer {
        /* text-align: center; */
        overflow: hidden;
        position: relative;
    }
    /* END FOOTER */

    /* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
    @media  screen and (max-width: 700px) {
        .row {
            flex-direction: column;
        }
    }

    /* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
    @media  screen and (max-width: 400px) {
        .navbar a {
            float: none;
            width: 100%;
        }
    }
</style>



<body>
    
    
    <?php echo $__env->make('fragments.topheader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
             <div class="topheader2">
                
                <?php echo $__env->make('fragments.nav-bar-top', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                

                
                <div class="header">

                    <div class="headerfont">Chăm sóc sức khoẻ</div>
                    <p> là <b class="headerfont">Ưu tiên hàng đầu</b> của Cucumber.</p>
                </div>
                
            </div>

            <marquee behavior="alternate" direction="" truespeed="2300">Khúc này muội muốn để gì thì để :))))))))))Khúc này muội muốn để gì thì để :))))))))))Khúc này muội muốn để gì thì để :))))))))))</marquee>

            
            <section class="carousel my-1 mx-1">
                <?php echo $__env->make('fragments.carousel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </section>
            


            
            <div class="main">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
            

            
            <?php echo $__env->make('fragments.about', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            

            
            <?php echo $__env->make('fragments.use-more', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            

       
    
    <div class="footer">
        <?php echo $__env->make('fragments.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    
    
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
    </script>
    <script src="<?php echo e(url('owlcarousel/owl.carousel.min.js')); ?>"></script>
</body>


</html>



<script>
    function openSearch() {
      document.getElementById("myOverlay").style.display = "block";
    }

    function closeSearch() {
      document.getElementById("myOverlay").style.display = "none";
    }

    // OWL-CAROUSEL
    $(document).ready(function(){
        $('.owl-carousel').owlCarousel({
            items:1,
            margin:10,
            loop:true,
            autoHeight:true,
            autoplay:true,
            autoplayTimeout:5000,
        });
    });

</script>

<?php /**PATH E:\xampp\htdocs\laravel\laravel\resources\views/layouts/default.blade.php ENDPATH**/ ?>