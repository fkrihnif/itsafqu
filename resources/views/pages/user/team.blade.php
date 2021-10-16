@extends('layouts.users.main')

@section('container')
<head>
    <style>
.belakang1 {
    animation:animate 4s infinite;
    background: url('https://cdn.pixabay.com/photo/2019/01/17/19/27/data-3938447__240.jpg');
}
.belakang2 {
    animation:animate 5s infinite;
    background: url('https://cdn.pixabay.com/photo/2021/01/20/05/30/data-5933101__240.jpg');
    object-fit: fill;
}
.belakang3 {
    animation:animate 4s infinite;
    background: url('https://cdn.pixabay.com/photo/2019/01/17/19/27/data-3938447__240.jpg');
}
.belakang4 {
    animation:animate 4s infinite;
    background: url('https://cdn.pixabay.com/photo/2015/09/17/17/25/code-944499__340.jpg');
}
.belakang5 {
    animation:animate 5s infinite;
    background: url('https://cdn.pixabay.com/photo/2017/07/09/20/48/icon-2488093__240.png');
}
@keyframes animate{
  0%{
    background-position: 0 0;
    filter:hue-rotate(0deg);
  }
  10%{
    background-position: 4px 0px;
  }
  15%{
    background-position: -8px 0px;
  }
  
  20%{
    background-position: -4px 0;
  }
  30%{
    background-position: 12px 0;
  }
  40%{
    background-position: -16px 0;
  }
  50%{
    background-position: -24px 0;
  }
  60%{
    background-position: 16px 0;
  }
  70%{
    background-position: 0 22px;
  }
  80%{
    background-position: -40px -10px;
  }
  100%{
    background-position: 0 0;
    filter:hue-rotate(360deg);
  }
}
    </style>
</head>
<!-- start: page -->
<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-4">
                <section class="card">
                    <header class="card-header belakang1">
                        <div class="card-header-profile-picture">
                            <img src="user/img/admin/arief.jpg">
                        </div>
                    </header>
                    <div class="card-body">
                        <h4 class="font-weight-semibold mt-3">Arief Farhan Maulana</h4>
                        <p><i class="fas fa-university"></i> Universitas Tanjung Pura <br>
                            <i class="fas fa-book"></i> Teknik Industri<br>
                            <i class="fas fa-user-graduate"></i> 2021
                        </p>
                        <hr class="solid short">
                        <p class="mb-1"><a href="https://www.instagram.com/ariefpaan/" target="_blank"><i class="fab fa-instagram me-1 text-4 top-2 position-relative"></i> ariefpaan</a></p>
                    </div>
                </section>
            </div>
            <div class="col-lg-4">
                <section class="card">
                    <header class="card-header belakang2">
                        <div class="card-header-profile-picture">
                            <img src="user/img/admin/egy.jpg">
                        </div>
                    </header>
                    <div class="card-body">
                        <h4 class="font-weight-semibold mt-3">Egy Ihza Madhani</h4>
                        <p><i class="fas fa-university"></i> Universitas Brawijaya<br>
                            <i class="fas fa-book"></i> Pendidikan Teknologi Informasi<br>
                            <i class="fas fa-user-graduate"></i> 2021
                        </p>
                        <hr class="solid short">
                        <p class="mb-1"><a href="https://www.instagram.com/egyijaa_/" target="_blank"><i class="fab fa-instagram me-1 text-4 top-2 position-relative"></i> egyijaa_</a></p>
                    </div>
                </section>
            </div>
            <div class="col-lg-4">
                <section class="card">
                    <header class="card-header belakang3">
                        <div class="card-header-profile-picture">
                            <img src="user/img/!logged-user.jpg">
                        </div>
                    </header>
                    <div class="card-body">
                        <h4 class="font-weight-semibold mt-3">Fajar Abduh Mubarok</h4>
                        <p><i class="fas fa-university"></i> Universitas Tanjung Pura <br>
                            <i class="fas fa-book"></i> Teknik Tambang<br>
                            <i class="fas fa-user-graduate"></i> 2022
                        </p>
                        <hr class="solid short">
                        <p class="mb-1"><a href="#"><i class="fab fa-instagram me-1 text-4 top-2 position-relative"></i> -</a></p>
                    </div>
                </section>
            </div>
            <div class="col-lg-4">
                <section class="card">
                    <header class="card-header  belakang4">
                        <div class="card-header-profile-picture">
                            <img src="user/img/admin/hanif.jpg">
                        </div>
                    </header>
                    <div class="card-body">
                        <h4 class="font-weight-semibold mt-3">Muhammad Fiqri Hanif</h4>
                        <p><i class="fas fa-university"></i> Universitas Tanjung Pura <br>
                            <i class="fas fa-book"></i> Teknik Informatika<br>
                            <i class="fas fa-user-graduate"></i> 2021
                        </p>
                        <hr class="solid short">
                        <p class="mb-1"><a href="https://www.instagram.com/fkrihnif/" target="_blank"><i class="fab fa-instagram me-1 text-4 top-2 position-relative"></i> fkrihnif</a></p>
                    </div>
                </section>
            </div>
            <div class="col-lg-4">
                <section class="card">
                    <header class="card-header belakang5">
                        <div class="card-header-profile-picture">
                            <img src="user/img/admin/lutfi.jpg">
                        </div>
                    </header>
                    <div class="card-body">
                        <h4 class="font-weight-semibold mt-3">Muhammad Lutfi</h4>
                        <p><i class="fas fa-university"></i> Universitas Tanjung Pura <br>
                            <i class="fas fa-book"></i> Teknik Informatika<br>
                            <i class="fas fa-user-graduate"></i> 2021
                        </p>
                        <hr class="solid short">
                        <p class="mb-1"><a href="https://www.instagram.com/muhammad.lutfi._/" target="_blank"><i class="fab fa-instagram me-1 text-4 top-2 position-relative"></i> muhammad.lutfi._</a></p>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>

<!-- end: page -->
@endsection