<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://kit.fontawesome.com/cf67172275.js" crossorigin="anonymous"></script>
    <title>Bantu.an - Berbagi dengan Barang Bekas</title>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70">
<a class='fixed-whatsapp' href='https://api.whatsapp.com/send?phone=628xxxxxxxxxx' rel='nofollow noopener' target='_blank' title='Whatsapp' />
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg py-3 sticky-top navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="\assets\1.png" class="logo-gambar">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/katalog">Katalog</a>
                    </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              {{ auth()->user()->name }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <li><a class="dropdown-item" href="/profil">Profil</a></li>
                              <li><hr class="dropdown-divider"></li>
                              <li><a class="dropdown-item" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">Logout</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                   @csrf
                                               </form></li>
                            </ul>
                          </li>
                </ul>
            </div>
        </div>
    </nav><!-- //NAVBAR -->
    <section class="container">
            <center><h1>Katalog Barang Donasi</h1></center>
  <div class="card-group" style="margin-top:20px">
      <?php foreach ($data as $d) { ?>
        <div class="card">
        <img class="card-img-top" src="/assets/verifikasi/{{$d->gambar}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{ $d->nama_barang }}</h5>
          <p class="card-text">{{ $d->deskripsi }}</p>
        </div>
        <div class="card-footer">
          <center>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{ $d->id }}" style="padding:5px">
              Selengkapnya
            </button>
          </center>
        </div>
      </div>
  <div class="modal fade" id="exampleModal{{ $d->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detail Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <img style="height:400px;margin-bottom:3px" src="/assets/verifikasi/{{$d->gambar}}" alt="Card image cap">
          <h4>{{$d->nama_barang}}</h4>
          <p>{{$d->deskripsi}}</p>
          <p>Dapatkan Langsung di kantor bantu.an</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
    <?php } ?>
    </div>
  </div>

    </section><!-- SERVICES -->
    <!-- SERVICES --

    </section><!-- SERVICES -->

    <footer>
        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-4">
                        <img src="\assets\1.png" class="logo-gambar">
                        <p>Organisasi Bantu.an</p>
                    </div>
                    <div class="col-lg-4">
                    </div>
                    <div class="col-lg-4">
                        <h5 class="text-white">Contact</h5>
                        <ul class="list-unstyled" style="color:grey">
                            <li>Address: Jl.Kenanga no 21</li>
                            <li>Email: info@bantu.an</li>
                            <li>Phone: 0148103849184</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom py-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p class="mb-0">© 2022 - Bantu.an. All Right Reserved</p>
                    </div>
                    <div class="col-md-6">
                        <div class="social-icons">
                            <a href="#"><i class='bx bxl-facebook'></i></a>
                            <a href="#"><i class='bx bxl-twitter'></i></a>
                            <a href="#"><i class='bx bxl-instagram-alt'></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html>
