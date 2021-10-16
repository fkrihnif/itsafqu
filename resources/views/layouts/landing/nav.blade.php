<nav class="collapse">
    <ul class="nav nav-pills" id="mainNav">
        <li><a href="/#home" class="nav-link active" data-hash
                data-hash-offset="70">Home</a></li>
        <li><a href="/#tentang" class="nav-link" data-hash
                data-hash-offset="255">Tentang</a></li>
        <li><a href="/#digital" class="nav-link" data-hash
                data-hash-offset="35">Kenapa Digital?</a></li>
        <li><a href="/#template" class="nav-link" data-hash
                data-hash-offset="120">Rekomendasi Template</a></li>
        <li><a href="/#produk" class="nav-link" data-hash
                data-hash-offset="135">Produk</a></li>
        <li><a href="/#testimoni" class="nav-link" data-hash
                data-hash-offset="70">Testimoni</a></li>
        @guest
        <li><a href="/login" class="nav-link text-secondary text-color-hover-primary" data-hash
                        data-hash-offset="70"><i class="fas fa-sign-in-alt"></i>&nbsp;Login</a></li>       
        @endguest

        @auth                                         
        {{-- <li>
        <form action="{{ url('logout') }}" method="POST">
                @csrf
                <a class="nav-link" data-hash
                data-hash-offset="70"><button type="submit">
                            Keluar
                </button></a>
                </form>
        </li> --}}
        <li class="dropdown">
                @if (Auth::user()->roles == 'ADMIN')
                <a class="dropdown-item dropdown-toggle" href="{{ route('dashboard') }}">
                        Lihat Dashboard
                </a>
                @else
                <a class="dropdown-item dropdown-toggle" href="{{ route('dashboard-user') }}">
                        Lihat Dashboard
                </a>
                @endif
        <ul class="dropdown-menu">
                <li>
                        <form action="{{ url('logout') }}" method="POST">
                                @csrf
                                <a class="nav-link" data-hash
                                data-hash-offset="70"><button type="submit" class="btn btn-danger">
                                            Keluar
                                </button></a>
                                </form>
                        </li>
        </ul>
        </li>
        @endauth                                                    
        {{-- <li><a href="#footer" class="nav-link" data-hash
                data-hash-offset="70">Contact</a></li> --}}
    </ul>
</nav>