<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/boxicons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

        <script src="https://kit.fontawesome.com/cf67172275.js" crossorigin="anonymous"></script>
        <title>Item Desc</title>
        <style type="text/css">
            .a{
                padding-left: px;
            }
            html,body{
                margin: 0;
                padding: 0;
                height: 100%;
            }
            .footer {
                position: ;
                background-color: black;
                color: white;
                min-width: 100%;
                text-align: center;
            }
        </style>
    </head>
    <body>
      <nav class="navbar navbar-expand-lg py-3 sticky-top navbar-light bg-white" style="margin-bottom:30px">
          <div class="container">
              <a class="navbar-brand" href="/home">
                  <img src="\assets\1.png" class="logo-gambar">
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                  aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav ms-auto">
                      <li class="nav-item">
                          <a class="nav-link" href="/home">Home</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="/katalog">Katalog</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="/pengajuancharity">Pengajuan Charity</a>
                      </li>
                            <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ auth()->user()->name }}
                              </a>
                              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
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
        <div class="container">
        <div class="card" style="background-color: #B1D0E0;margin-top:20px">
          <?php foreach($data as $d){ ?>
                <div class="card-body row justify-content-around" style="background-color: #B1D0E0;">
                    <div class="col-4" style="padding-top: 32px">
                        <img src="/assets/verifikasi/{{ $d->gambar }}" class="card-img-top" width="250px" height="250px">
                    </div>
                    <div class="col-8">
                        <br>
                        <br>
                        <br>
                        <div>

                            <div>
                                <h1> <b>{{ $d->nama_barang }}</b> </h1>
                            </div>
                            <br>
                            <div>
                                <label for="name"> <b>Kategori</b> </label>
                                <p>{{ $d->jenis_barang }}</p>
                            </div>
                            <div>
                                <label for="name"> <b>Deskripsi</b> </label>
                                <p>{{ $d->deskripsi }}</p>
                            </div>
                            <div>
                                <label for="name"> <b>Harga</b> </label>
                                <p>{{ $d->harga }}</p>
                            </div>
                        <a href="/tambahpengajuan/{{$d->id}}" class="btn btn-primary">Ajukan Pengambilan</a>
                        <?php } ?>

                        </div>
                    </div>
                </div>
            </div>
          </div>
            <footer style="margin-top:30px;color:grey">
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
