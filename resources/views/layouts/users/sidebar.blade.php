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
                    <li class="{{ Request::is('admin') || Request::is('DashboardUser') ? 'nav-active' : '' }}">
                        <a class="nav-link {{ Request::is('admin') || Request::is('DashboardUser')? 'text-color-primary' : '' }}" href="{{ route('dashboard') }}"> {{-- href-nye disesuaikan (kalo admin kemane, kalo pelanggan kemane) --}}
                            <i class="bx bx-home-alt" aria-hidden="true"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    {{-- ini punya admin --}}
                    <li class="{{ Request::is('admin/produk')? 'nav-active' : '' }}">
                        <a class="nav-link {{ Request::is('admin/produk')? 'text-color-primary' : '' }}" href="{{ route('produk.index') }}">
                            <i class="bx bx-cart-alt" aria-hidden="true"></i>
                            <span>Produk</span>
                        </a>
                    </li>
                    {{-- ini punya pelanggan --}}
                    <li class="{{ Request::is('PesananUser') ? 'nav-active' : '' }}">
                        <a class="nav-link {{ Request::is('PesananUser')? 'text-color-primary' : '' }}" href="/PesananUser">
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
                    <li class="{{ Request::is('Team')? 'nav-active' : '' }}">
                        <a class="nav-link {{ Request::is('Team')? 'text-color-primary' : '' }}" href="/Team">
                            <i class="fas fa-users"></i>
                            <span>Our Team</span>
                        </a>
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