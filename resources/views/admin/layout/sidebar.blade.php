<!-- Main sidebar -->
<div class="sidebar sidebar-dark sidebar-main sidebar-expand-lg">

    <!-- Sidebar content -->
    <div class="sidebar-content">

        <!-- Sidebar header -->
        <div class="sidebar-section">
            <div class="sidebar-section-body d-flex justify-content-center">
                <h5 class="sidebar-resize-hide flex-grow-1 my-auto">Side Navigation</h5>

                <div>
                    <button type="button" class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-control sidebar-main-resize d-none d-lg-inline-flex">
                        <i class="ph-arrows-left-right"></i>
                    </button>

                    <button type="button" class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-mobile-main-toggle d-lg-none">
                        <i class="ph-x"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- /sidebar header -->


        <!-- Main navigation -->
        <div class="sidebar-section">
            <ul class="nav nav-sidebar" data-nav-type="accordion">

                <!-- Main -->
                <li class="nav-item-header pt-0">
                    <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Fitur Utama</div>
                    <i class="ph-dots-three sidebar-resize-show"></i>
                </li>
                <li class="nav-item">
                    <a href="/dashboard" class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                        <i class="ph-house"></i>
                        <span>
                            Dashboard
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/customer" class="nav-link {{ request()->routeIs('customer.*') ? 'active' : '' }}">
                        <i class="ph-user-list"></i>
                        <span>

                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/produk" class="nav-link {{ request()->routeIs('produk.*') ? 'active' : '' }}">
                        <i class="ph-package"></i>
                        <span>
                            Item Produk
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/quote" class="nav-link {{ request()->routeIs('quote.*') ? 'active' : '' }}">
                        <i class="ph-file-text"></i>
                        <span>
                            Quote / Penawaran
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/invoice" class="nav-link {{ request()->routeIs('invoice.*') ? 'active' : '' }}">
                        <i class="ph-file-lock"></i>
                        <span>
                            Invoice / Tagihan
                        </span>
                    </a>
                </li>

                <li class="nav-item-header">
                    <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Lainnya</div>
                    <i class="ph-dots-three sidebar-resize-show"></i>
                </li>

                <li class="nav-item">
                    <a href="/pengaturan" class="nav-link {{ request()->routeIs('setting.*') ? 'active' : '' }}">
                        <i class="ph-sliders-horizontal"></i>
                        <span>
                            Pengaturan Umum
                        </span>
                    </a>
                </li>
            </ul>

        </div>
        <!-- /main navigation -->

    </div>
    <!-- /sidebar content -->

</div>
<!-- /main sidebar -->
