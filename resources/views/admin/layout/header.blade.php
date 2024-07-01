<header class="main-header">
    <a href="/admin/" class="logo">
        <span class="logo-mini"><b>A</b>LT</span>
        <span class="logo-lg"><b>LapTop-CenTre</b></span>
    </a>
    <nav class="navbar navbar-static-top" role="navigation">
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="/public/upload/users/{{ $currentAdmin->avatar }}" class="user-image" alt="User Image">
                        <span class="hidden-xs">{{ $currentAdmin->name }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="user-header">
                            <img src="/public/upload/users/{{ $currentAdmin->avatar }}" class="img-circle" alt="User Image">
                            <p>
                                {{ $currentAdmin->name }}
                                {{-- <small>Member since Nov. 2012</small> --}}
                            </p>
                        </li>
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="admin/thong-tin" class="btn btn-default btn-flat">Thông tin</a>
                            </div>
                            <div class="pull-right">
                                <a href="admin/dang-xuat" class="btn btn-default btn-flat">Đăng xuất</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>

<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/public/upload/users/{{ $currentAdmin->avatar }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ $currentAdmin->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MENU</li>
            <li>
                <a href="admin">
                    <i class="fa fa-dashboard"></i> <span>Bảng điều khiển</span>
                    <span class="pull-right-container">
                    </span>
                </a>
            </li>

            <li class="treeview">
                <a href="javascript:void(0)"><i class="fa fa-industry"></i> <span>Hãng sản xuất</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="admin/hang-san-xuat/danh-sach"><i class="fa fa-list"> <span>Danh sách</span></i></a></li>
                    <li><a href="admin/hang-san-xuat/them"><i class="fa fa-plus"> <span>Thêm</span></a></i></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#"><i class="fa fa-database"></i> <span>Dòng sản phẩm</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="admin/dong-san-pham/danh-sach"><i class="fa fa-list"> <span>Danh sách</span></i></a></li>
                    <li><a href="admin/dong-san-pham/them"><i class="fa fa-plus"> <span>Thêm</span></a></i></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#"><i class="fa fa-laptop"></i> <span>Sản phẩm</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="admin/san-pham/danh-sach"><i class="fa fa-list"> <span>Danh sách</span></i></a></li>
                    <li><a href="admin/san-pham/them"><i class="fa fa-plus"> <span>Thêm</span></a></i></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#"><i class="fa fa-list"></i> <span>Danh mục tin tức</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="admin/danh-muc-tin-tuc/danh-sach"><i class="fa fa-list"> <span>Danh sách</span></i></a></li>
                    <li><a href="admin/danh-muc-tin-tuc/them"><i class="fa fa-plus"> <span>Thêm</span></a></i></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#"><i class="fa fa-newspaper-o"></i> <span>Tin tức</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="admin/tin-tuc/danh-sach"><i class="fa fa-list"> <span>Danh sách</span></i></a></li>
                    <li><a href="admin/tin-tuc/them"><i class="fa fa-plus"> <span>Thêm</span></a></i></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#"><i class="fa fa-list-alt"></i> <span>Hóa đơn</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="admin/hoa-don/danh-sach"><i class="fa fa-list"> <span>Danh sách</span></i></a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#"><i class="fa fa-image"></i> <span>Slide</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="admin/slide/danh-sach"><i class="fa fa-list"> <span>Danh sách</span></i></a></li>
                    <li><a href="admin/slide/them"><i class="fa fa-plus"> <span>Thêm</span></a></i></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#"><i class="fa fa-user"></i> <span>Người dùng</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="admin/nguoi-dung/danh-sach"><i class="fa fa-list"> <span>Danh sách</span></i></a></li>
                </ul>
            </li>

            @if ($currentAdmin->level == 2)
            <li class="treeview">
                <a href="#"><i class="fa fa-user-secret"></i> <span>Quản trị viên</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="admin/quan-tri-vien/danh-sach"><i class="fa fa-list"> <span>Danh sách</span></i></a></li>
                    <li><a href="admin/quan-tri-vien/them"><i class="fa fa-plus"> <span>Thêm</span></a></i></li>
                </ul>
            </li>
            @endif

            <li class="treeview">
                <a href="#"><i class="fa fa-cog"></i> <span>Setting</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="admin/setting/gioi-thieu/1"><i class="fa fa-user"></i><span>Giới thiệu</span></a></li>
                    <li><a href="admin/setting/lien-he/1"><i class="fa fa-phone"> </i><span>Liên hệ</span></a></li>
                </ul>
            </li>
        </ul>
    </section>
</aside>