<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="brand-link">
        <img src="{{ asset('img/logo-company.png') }}"
             alt="Cucumber Admin"
             class="brand-image img-circle elevation-2"
             style="opacity:1.2">
        <span class="brand-text font-weight-light">Cucumber Website</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('img/admin1.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Admin</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Admin
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('superAdmin/adminList') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách Admin</p>
                            </a>
                        </li>    
                    </ul>
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Customer
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('customer/customerList') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách Khách hàng</p>
                            </a>
                        </li>    
                    </ul>
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Feedback
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('feedback/feedbackList') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách feebback</p>
                            </a>
                        </li>    
                    </ul>                      
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            News
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('admin/news/index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách tin tức</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/news/create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tạo tin tức</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Categories
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('admin/categories/index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Xem loại phẩm</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/categories/create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thêm loại sản phẩm</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Product
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('admin/product/index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Xem sản phẩm</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/product/create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tạo sản phẩm</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Brand
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('admin/brand/index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách nhà cung cấp</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/brand/create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thêm nhà cung cấp</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Orders
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin-order') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Đơn hàng mới </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('closed-order') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Đơn hàng đã hoàn thành</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('cancel-order') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Đơn hàng đã huỷ</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Comments
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin-cmt') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Bình luận mới </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('deleted-cmt') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Bình luận đã xoá</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>



