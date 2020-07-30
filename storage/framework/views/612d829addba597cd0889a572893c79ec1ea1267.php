

<?php $__env->startSection('content'); ?>


<div class="container my-5">
    <h3 class="text-primary mb-3">SẢN PHẨM BÁN CHẠY</h3>

    <div class="row">
        <div class="col-lg-3">
            MENU
        </div>
        <div class="col-lg-9">
            <div class="wrap__product">
                <?php $__currentLoopData = $productGlobal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
    </div>



</div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<style>
    /* CSS PRODUCT  */
    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        max-width: 300px;
        align-items: center;
        text-align: center;
        font-family: arial;
    }
    .price {
        color: grey;
        font-size: 22px;
    }
    .card button {
        border: none;
        outline: 0;
        padding: 12px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        width: 100%;
        font-size: 18px;
    }
    .card button:hover {
        opacity: 0.7;
    }
/*
    .grid-container {
        margin: auto;
        display: grid;
        grid-gap: 50px 30px;
        grid-template-areas: 'myArea myArea myArea myArea';
    } */

    /* END CSS PRODUCT  */
</style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\laravel\laravel\resources\views/home.blade.php ENDPATH**/ ?>