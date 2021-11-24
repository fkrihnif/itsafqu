<header class="header">
    <div class="logo-container">
        <a href="/" class="logo">
            <img src="{{ url('user/img/logoputih.png') }}" width="100" height="45" alt="Porto Admin" />
        </a>

        <div class="d-md-none toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html"
            data-fire-event="sidebar-left-opened">
            <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
        </div>

    </div>

    <!-- start: search & user box -->
    <div class="header-right">

        <span class="separator"></span>

        <div id="userbox" class="userbox">
            <a href="#" data-bs-toggle="dropdown">
                <figure class="profile-picture">
                    <img src="{{ url('user/img/!logged-user.jpg') }}" alt="Joseph Doe" class="rounded-circle"
                        data-lock-picture="{{ url('user/img/!logged-user.jpg') }}" />
                </figure>
                <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
                    <span class="name">{{ Auth::user()->name }}</span>
                    <span class="role">{{ Auth::user()->roles }}</span>
                </div>

                <i class="fa custom-caret"></i>
            </a>

            <div class="dropdown-menu">
                <ul class="list-unstyled mb-2">
                    <li class="divider"></li>
                    <li>
                        <a role="menuitem" tabindex="-1" href="{{ route('edit-profile.edit', Auth::user()->id) }}"><i
                                class="bx bx-user-circle"></i> My Profile</a>
                    </li>
                    <li>
                                <form action="{{ url('logout') }}" method="POST">
                                    @csrf
                                    <button class="btn btn-danger btn-sm" type="submit">Logout</button>
                                </form>
                    </li>



                </ul>
            </div>
        </div>
    </div>
    <!-- end: search & user box -->
</header>