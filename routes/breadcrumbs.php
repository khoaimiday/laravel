<?php

    // Home
    Breadcrumbs::for('home', function ($trail) {
        $trail->push('Trang Chủ', route('home'));
    });

    // Home > Store
    Breadcrumbs::for('store', function($trail){
        $trail->parent('home');
        $trail->push('Cửa Hàng', route('store'));
    });

    // Home > News
    Breadcrumbs::for('news', function ($trail) {
        $trail->parent('home');
        $trail->push('Tin Tức', route('news'));
    });

     // Home > News > Details
     Breadcrumbs::for('newsdetail', function ($trail, $new) {
        $trail->parent('news');
        $trail->push($new->title, route('newsdetail',$new));
    });

    // Home > FAQ
    Breadcrumbs::for('FAQ', function ($trail) {
        $trail->parent('home');
        $trail->push('Câu Hỏi Thường Gặp', route('FAQ'));
    });

     // Home > Contact
     Breadcrumbs::for('contact', function ($trail) {
        $trail->parent('home');
        $trail->push('Thông Tin Liên Hệ', route('contact'));
    });

    // Home > Product
    Breadcrumbs::for('product', function($trail){
        $trail->parent('home');
        $trail->push('Sản Phẩm', route('product'));
    });

    // Home > Product > Categories
    Breadcrumbs::for('category', function ($trail, $cate) {
        $trail->parent('product');
        $trail->push($cate->type_name, route('categories',$cate));
    });

    // Home > Category > Product Detail
    Breadcrumbs::for('product-detail', function ($trail, $cate, $product) {
        $trail->parent('category', $cate);
        $trail->push($product->product_name, route('product-detail', $product));
    });

    // Home > Cart
    Breadcrumbs::for('cart', function ($trail) {
        $trail->parent('home');
        $trail->push('Giỏ Hàng', route('ListOrder'));
    });

    // Home > Cart > Checkout
    Breadcrumbs::for('checkout', function ($trail) {
        $trail->parent('cart');
        $trail->push('Checkout', route('checkOrder'));
    });

    Breadcrumbs::for('admin',function($trail){
        $trail->push('Trang Chủ', route('adminhome'));
    });

    Breadcrumbs::for('productAdm',function($trail){
        $trail->parent('admin');
        $trail->push('Quản lý sản phẩm', route('adminhome'));
    });

    Breadcrumbs::for('productAdmCreate',function($trail){
        $trail->parent('productAdm');
        $trail->push('Tạo sản phẩm mới', route('productAdmCreate'));
    });

    Breadcrumbs::for('productAdmUpdate',function($trail){
        $trail->parent('productAdm');
        $trail->push('Cập nhật sản phẩm', route('productAdmUpdate'));
    });

    Breadcrumbs::for('productAdmDetail',function($trail){
        $trail->parent('productAdm');
        $trail->push('Chi tiết sản phẩm', route('productAdmDetail'));
    });


