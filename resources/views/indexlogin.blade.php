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
<nav class="navbar navbar-expand-lg py-3 sticky-top navbar-light bg-white" style="margin-bottom:30px">
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
                          <li><a class="dropdown-item" href="/donasiku">DonasiKu</a></li>
                          <li><a class="dropdown-item" href="/pengajuanku">PengajuanKu</a></li>
                          <li><a class="dropdown-item" href="/sumbangan">Sumbangan</a></li>
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
</nav>
    <div class="hero vh-100 d-flex align-items-center" id="home">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mx-auto text-center">
                    <h1 class="display-4 text-white">Bantu.an</h1>
                    <p class="text-white my-3">Anda punya barang bekas layak? Ingin mendonasikannya? <b>Bantu.an</b> aja</p>
                    <a href="/adddonation" class="btn me-2 btn-primary" style="border-radius:100px;background-color:#0464cc">Donasi Sekarang</a>
                </div>
            </div>
        </div>
    </div><!-- //HERO -->

    <!-- SERVICES -->
    <section class="container">
            <center><h1>Katalog Barang Donasi</h1></center>
  <div class="card-group" style="margin-top:20px">
      <?php foreach ($data as $d) { ?>
        <div class="card">
        <img class="card-img-top" src="/assets/verifikasi/{{$d->gambar}}" alt="Card image cap" width="250px" height="250px">
        <div class="card-body">
          <h5 class="card-title">{{ $d->nama_barang }}</h5>
          <p class="card-text">{{ $d->deskripsi }}</p>
        </div>
        <div class="card-footer">
          <center>
            <a href="/detailproduk/{{ $d->id }}" class="btn btn-primary" style="padding:5px">
              Detail Produk
            </a>
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
          <img style="height:400px;margin-bottom:3px" src="/assets/verifikasi/{{$d->gambar}}" alt="Card image cap" style="width:250px;height:250px">
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
    </section>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
