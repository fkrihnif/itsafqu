<aside id="sidebar-left" class="sidebar-left">

    <div class="sidebar-header">
        <div class="sidebar-title">
            Menu
        </div>
        <div class="sidebar-toggle d-none d-md-block" data-toggle-class="sidebar-left-collapsed"
            data-target="html" data-fire-event="sidebar-left-toggle">
            <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>

    <div class="nano">
        <div class="nano-content">
            <nav id="menu" class="nav-main" role="navigation">

                <ul class="nav nav-main">
                    <li class="{{ Request::is('Dashboard') || Request::is('DashboardUser') ? 'nav-active' : '' }}">
                        <a class="nav-link" href="{{ route('dashboard') }}">
                            <i class="bx bx-home-alt" aria-hidden="true"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('produk.index') }}">
                            <i class="bx bx-cart-alt" aria-hidden="true"></i>
                            <span>Produk</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('PesananUser') ? 'nav-active' : '' }}">
                        <a class="nav-link" href="/PesananUser">
                            <i class="bx bx-cart-alt" aria-hidden="true"></i>
                            <span>Pesanan Saya</span>
                        </a>
                    </li>
                    <li class="nav-parent {{ Request::is('ProdukPaket') || Request::is('ProdukSingle')? 'nav-expanded nav-active' : '' }}">
                        <a class="nav-link" href="#">
                            <i class="fas fa-laptop-house"></i>
                            <span>Our Product</span>
                        </a>
                        <ul class="nav nav-children">
                            <li class="{{ Request::is('ProdukPaket') ? 'nav-active' : '' }}">
                                <a class="nav-link" href="/ProdukPaket">
                                    Paket Undangan
                                </a>
                            </li>
                            <li class="{{ Request::is('ProdukSingle')? 'nav-active' : '' }}">
                                <a class="nav-link" href="/ProdukSingle">
                                    Single Item
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="ecommerce-products-form.html">
                                    Products Form
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>

        <script>
            // Maintain Scroll Position
            if (typeof localStorage !== 'undefined') {
                if (localStorage.getItem('sidebar-left-position') !== null) {
                    var initialPosition = localStorage.getItem('sidebar-left-position'),
                        sidebarLeft = document.querySelector('#sidebar-left .nano-content');

                    sidebarLeft.scrollTop = initialPosition;
                }
            }
        </script>

    </div>

</aside>