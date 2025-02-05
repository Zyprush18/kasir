<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel vertical-center">
            <div class="pull-left image">
                <img src="/assets/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="<?php echo $_SERVER['REQUEST_URI'] == 'home' ? 'active' : ''; ?>">
                <a href="home">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>

            <li class="treeview <?php echo $_SERVER['REQUEST_URI'] == 'pelanggan' || $_SERVER['REQUEST_URI'] == 'produk' || $_SERVER['REQUEST_URI'] == 'petugas' ? 'active' : '' ?>">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>Master Data</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pelanggan"><i class="fa fa-circle-o"></i> Data Pelanggan</a></li>
                    <li><a href="produk"><i class="fa fa-circle-o"></i> Data Produk</a></li>
                    <li><a href="petugas"><i class="fa fa-circle-o"></i> Data User</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-laptop"></i>
                    <span>Transaksi</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> Data Transaksi</a></li>
                    <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Tambah Data Transaksi</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="home">
                    <i class="fa fa-sticky-note-o"></i> <span>Laporan</span>
                    <span class="pull-right-container">
                    </span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>