<aside id="sidebar-left" class="sidebar-left">

    <div class="sidebar-header">
        <div class="sidebar-toggle d-none d-md-flex" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
            <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>

    <div class="nano" style="background-image: linear-gradient(0deg, #376479, #26414e, #1a2024);">
        <div class="nano-content">
            <nav id="menu" class="nav-main" role="navigation">

                <ul class="nav nav-main">
                    <li class="{{ Request::is('dashboard') ? 'nav-expanded nav-active' : '' }}">
                        <a class="nav-link" href="/dashboard">
                            <i class="bx bx-home-alt" aria-hidden="true"></i>
                            <span>Dashboard</span>
                        </a>                        
                    </li>
                    <li class="nav-group-label">Menu Utama</li>
                    <li class="nav-parent {{ Request::is('viewProducts') ? 'nav-expanded nav-active' : '' }} {{ Request::is('viewProducts/web') ? 'nav-expanded nav-active' : '' }} {{ Request::is('viewProducts/gambar') ? 'nav-expanded nav-active' : '' }} {{ Request::is('viewProducts/video') ? 'nav-expanded nav-active' : '' }}">
                        <a class="nav-link" href="#">
                            <i class="bx bxs-briefcase-alt-2" aria-hidden="true"></i>
                            <span>Produk Kami</span>
                        </a>
                        <ul class="nav nav-children">
                            <li class="nav-parent {{ Request::is('viewProducts') ? 'nav-active' : '' }} {{ Request::is('viewProducts/web') ? 'nav-expanded' : '' }} {{ Request::is('viewProducts/gambar') ? 'nav-expanded' : '' }} {{ Request::is('viewProducts/video') ? 'nav-expanded' : '' }}">
                                <a class="nav-link" href="#">
                                    - BUNTAL
                                </a>
                                <ul class="nav nav-children">
                                    <li class="{{ Request::is('viewProducts/web') ? 'nav-active' : '' }}">
                                        <a href="/viewProducts/web">
                                            - Undangan Web
                                        </a>
                                    </li>
                                    <li class="{{ Request::is('viewProducts/gambar') ? 'nav-active' : '' }}">
                                        <a href="/viewProducts/gambar">
                                            - Undangan Gambar
                                        </a>
                                    </li>
                                    <li class="{{ Request::is('viewProducts/video') ? 'nav-active' : '' }}"> 
                                        <a>
                                            - Undangan Video
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-parent {{ Request::is('myOrders') ? 'nav-expanded nav-active' : '' }}">
                        <a class="nav-link" href="#">
                            <i class="bx bx-cart-alt" aria-hidden="true"></i>
                            <span>Pesanan</span>
                        </a>
                        <ul class="nav nav-children">
                            <li class=" {{ Request::is('myOrders') ? 'nav-active' : '' }}">
                                <a class="nav-link" href="/myOrders">
                                    - Pesanan Saya
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-group-label">Info Profil</li>
                    <li class="nav-parent {{ Request::is('profil') ? 'nav-expanded nav-active' : '' }}">
                        <a class="nav-link" href="#">
                            <i class="bx bx-user-pin" aria-hidden="true"></i>
                            <span>Profil Saya</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a class="nav-link" href="ui-elements-typography.html">
                                    - Typography
                                </a>
                            </li>
                            <li class="nav-parent">
                                <a class="nav-link" href="#">
                                    - Icons <span class="mega-sub-nav-toggle toggled float-end" data-toggle="collapse" data-target=".mega-sub-nav-sub-menu-1"></span>
                                </a>
                                <ul class="nav nav-children">
                                    <li>
                                        <a class="nav-link" href="ui-elements-icons-elusive.html">
                                            - Elusive
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="ui-elements-icons-font-awesome.html">
                                            - Font Awesome
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="ui-elements-icons-line-icons.html">
                                            - Line Icons
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="ui-elements-icons-meteocons.html">
                                            - Meteocons
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="ui-elements-icons-box-icons.html">
                                            - Box Icons
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-link" href="ui-elements-tabs.html">
                                    - Tabs
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-parent">
                        <a class="nav-link" href="#">
                            <i class="bx bx-map" aria-hidden="true"></i>
                            <span>Maps</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a class="nav-link" href="maps-google-maps.html">
                                    - Basic
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="maps-google-maps-builder.html">
                                    - Map Builder
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="maps-vector.html">
                                    - Vector
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-link" href="extra-ajax-made-easy.html">
                            <i class="bx bx-loader-circle" aria-hidden="true"></i>
                            <span>Ajax</span>
                        </a>                        
                    </li>
                    <li class="nav-group-label">CRUD</li>
                    <li class="nav-parent">
                        <a class="nav-link" href="#">
                            <i class="bx bx-detail" aria-hidden="true"></i>
                            <span>Forms</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a class="nav-link" href="forms-basic.html">
                                    - Basic
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="forms-advanced.html">
                                    - Advanced
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="forms-validation.html">
                                    - Validation
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="forms-layouts.html">
                                    - Layouts
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="forms-wizard.html">
                                    - Wizard
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="forms-code-editor.html">
                                    - Code Editor
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-parent">
                        <a class="nav-link" href="#">
                            <i class="bx bx-table" aria-hidden="true"></i>
                            <span>Tables</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a class="nav-link" href="tables-basic.html">
                                    - Basic
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="tables-advanced.html">
                                    - Advanced
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="tables-responsive.html">
                                    - Responsive
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="tables-editable.html">
                                    - Editable
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="tables-ajax.html">
                                    - Ajax
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="tables-pricing.html">
                                    - Pricing
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </nav>

            <hr class="separator" />

            <div class="sidebar-widget widget-tasks">
                <div class="widget-header">
                    <h6>Projects</h6>
                </div>
                <div class="widget-content">
                    <ul class="list-unstyled m-0">
                        <li><a href="#">Porto HTML5 Template</a></li>
                        <li><a href="#">Tucson Template</a></li>
                        <li><a href="#">Porto Admin</a></li>
                    </ul>
                </div>
            </div>

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