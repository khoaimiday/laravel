

<?php $__env->startSection('content'); ?>

<div class="container section-title-container container">
    <h3 class="section-title section-title-center">
        <b></b><span class="section-title-main">Sản phẩm mới</span><b></b>
    </h3>
</div>



<div class="container my-2">
    
            <div class="wrap__product">
                <?php $__currentLoopData = $productGlobal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-3">
                         <?php if (isset($component)) { $__componentOriginal2c1b2c59fa706cf2cddefa5ad9acf56417989ab0 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Product::class, ['product' => $p]); ?>
<?php $component->withName('product'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginal2c1b2c59fa706cf2cddefa5ad9acf56417989ab0)): ?>
<?php $component = $__componentOriginal2c1b2c59fa706cf2cddefa5ad9acf56417989ab0; ?>
<?php unset($__componentOriginal2c1b2c59fa706cf2cddefa5ad9acf56417989ab0); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
    

    <div class="container section-title-container container">
        <h3 class="section-title section-title-center">
            <b></b>
            <span class="section-title-main">Blog chăm sóc sức khoẻ</span>
            <b></b>
        </h3>
    </div>

    <section class="news-hot">
        <div class="news-hot-content">
            <div class="news_item g-tem1">
                <img src="<?php echo e(asset('images/promotion/banner-web-5.jpg')); ?>" alt="">
            </div>
            <div class="news_item g-item2 list-news">
                <ul>
                    <li>1. TIN NONG HOI TRONG NGAY</li>
                    <li>2. TIN NONG HOI TRONG NGAY</li>
                    <li>3. TIN NONG HOI TRONG NGAY</li>
                    <li>4. TIN NONG HOI TRONG NGAY</li>
                    <li>5. TIN NONG HOI TRONG NGAY</li>
                </ul>
            </div>
        </div>
    </section>







<?php echo $__env->make('fragments.about', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('style'); ?>
    <style>

        /* NEWS-HOT */
        .news-hot{
            margin: 30px auto;
        }
        .news-hot-content{
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-gap: 10px;
        }
        .news-hot .news_item{
            padding: 10px;
        }
        .news-hot .news_item img{
            width: 100%;
        }
    </style>

    <?php $__env->stopSection(); ?>





<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\laravel\laravel\resources\views/home.blade.php ENDPATH**/ ?>