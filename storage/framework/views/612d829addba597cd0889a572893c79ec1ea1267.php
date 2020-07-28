<?php $__env->startSection('content'); ?>


<div class="container my-5">
    <h3 class="text-primary mb-3">TOP SẢN PHẨM BÁN CHẠY</h3>
    <div class="grid-container">

        <div class="card">
            <img src="https://picsum.photos/300/375" alt="Denim Jeans" style="width:100%">
            <h2>Tailored Jeans</h2>
            <p class="price">$19.99</p>
            <p>Some text about the jeans..</p>
            <p><button>Add to Cart</button></p>
        </div>

        <div class="card">
            <img src="https://picsum.photos/300/375" alt="Denim Jeans" style="width:100%">
            <h2>Tailored Jeans</h2>
            <p class="price">$19.99</p>
            <p>Some text about the jeans..</p>
            <p><button>Add to Cart</button></p>
        </div>

        <div class="card">
            <img src="https://picsum.photos/300/375" alt="Denim Jeans" style="width:100%">
            <h2>Tailored Jeans</h2>
            <p class="price">$19.99</p>
            <p>Some text about the jeans..</p>
            <p><button>Add to Cart</button></p>
        </div>

        <div class="card">
            <img src="https://picsum.photos/300/375" alt="Denim Jeans" style="width:100%">
            <h2>Tailored Jeans</h2>
            <p class="price">$19.99</p>
            <p>Some text about the jeans..</p>
            <p><button>Add to Cart</button></p>
        </div>

        <div class="card">
            <img src="https://picsum.photos/300/375" alt="Denim Jeans" style="width:100%">
            <h2>Tailored Jeans</h2>
            <p class="price">$19.99</p>
            <p>Some text about the jeans..</p>
            <p><button>Add to Cart</button></p>
        </div>

        <div class="card">
            <img src="https://picsum.photos/300/375" alt="Denim Jeans" style="width:100%">
            <h2>Tailored Jeans</h2>
            <p class="price">$19.99</p>
            <p>Some text about the jeans..</p>
            <p><button>Add to Cart</button></p>
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
    .grid-container {
        margin: auto;
        display: grid;
        grid-gap: 50px 30px;
        grid-template-areas: 'myArea myArea myArea myArea';
    }
    /* END CSS PRODUCT  */
</style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\laravel\laravel\resources\views/home.blade.php ENDPATH**/ ?>