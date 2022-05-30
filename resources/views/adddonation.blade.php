<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="profilestyle.css">
    <style type="text/css">
    :root {
        --blue: #5e72e4;
        --indigo: #5603ad;
        --purple: #8965e0;
        --pink: #f3a4b5;
        --red: #f5365c;
        --orange: #fb6340;
        --yellow: #ffd600;
        --green: #2dce89;
        --teal: #11cdef;
        --cyan: #2bffc6;
        --white: #fff;
        --gray: #8898aa;
        --gray-dark: #32325d;
        --light: #ced4da;
        --lighter: #e9ecef;
        --primary: #5e72e4;
        --secondary: #f7fafc;
        --success: #2dce89;
        --info: #11cdef;
        --warning: #fb6340;
        --danger: #f5365c;
        --light: #adb5bd;
        --dark: #212529;
        --default: #172b4d;
        --white: #fff;
        --neutral: #fff;
        --darker: black;
        --breakpoint-xs: 0;
        --breakpoint-sm: 576px;
        --breakpoint-md: 768px;
        --breakpoint-lg: 992px;
        --breakpoint-xl: 1200px;
        --font-family-sans-serif: Open Sans, sans-serif;
        --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, 'Liberation Mono', 'Courier New', monospace;
      }

      *,
      *::before,
      *::after {
        box-sizing: border-box;
      }

      body {
        font-family: Open Sans, sans-serif;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        margin: 0;
        text-align: left;
        color: #525f7f;
        background-color: #f8f9fe;
      }

      [tabindex='-1']:focus {
        outline: 0 !important;
      }

      hr {
        overflow: visible;
        box-sizing: content-box;
        height: 0;
      }

      h2,
      h3,
      h6 {
        margin-top: 0;
        margin-bottom: .5rem;
      }

      p {
        margin-top: 0;
        margin-bottom: 1rem;
      }

      address {
        font-style: normal;
        line-height: inherit;
        margin-bottom: 1rem;
      }

      dfn {
        font-style: italic;
      }

      strong {
        font-weight: bolder;
      }

      a {
        text-decoration: none;
        color: #5e72e4;
        background-color: transparent;
        -webkit-text-decoration-skip: objects;
      }

      a:hover {
        text-decoration: none;
        color: #233dd2;
      }

      caption {
        padding-top: 1rem;
        padding-bottom: 1rem;
        caption-side: bottom;
        text-align: left;
        color: #8898aa;
      }

      label {
        display: inline-block;
        margin-bottom: .5rem;
      }

      button {
        border-radius: 0;
      }

      button:focus {
        outline: 1px dotted;
        outline: 5px auto -webkit-focus-ring-color;
      }

      input,
      button,
      textarea {
        font-family: inherit;
        font-size: inherit;
        line-height: inherit;
        margin: 0;
      }

      textarea {
        overflow: auto;
        resize: vertical;
      }

      h2,
      h3,
      h6,
      .h2,
      .h3,
      .h6 {
        font-family: inherit;
        font-weight: 600;
        line-height: 1.5;
        margin-bottom: .5rem;
        color: #32325d;
      }

      .container {
        width: 100%;
        margin-right: auto;
        margin-left: auto;
        padding-right: 15px;
        padding-left: 15px;
      }


      .form-control {
        font-size: 1rem;
        line-height: 1.5;
        display: block;
        width: 100%;
        height: calc(2.75rem + 2px);
        padding: .625rem .75rem;
        transition: all .2s cubic-bezier(.68, -.55, .265, 1.55);
        color: #8898aa;
        border: 1px solid #cad1d7;
        border-radius: .375rem;
        background-color: #fff;
        background-clip: padding-box;
        box-shadow: none;
      }

      .form-control:-ms-input-placeholder {
        opacity: 1;
        color: #adb5bd;
      }

      .form-control::-ms-input-placeholder {
        opacity: 1;
        color: #adb5bd;
      }

      .form-control::placeholder {
        opacity: 1;
        color: #adb5bd;
      }

      textarea.form-control {
        height: auto;
      }

      .form-group {
        margin-bottom: 1.5rem;
      }

      .btn {
        font-size: 1rem;
        font-weight: 600;
        line-height: 1.5;
        display: inline-block;
        padding: .625rem 1.25rem;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        text-align: center;
        vertical-align: middle;
        white-space: nowrap;
        border: 1px solid transparent;
        border-radius: .375rem;
      }

      .btn-primary {
        color: #fff;
        border-color: #5e72e4;
        background-color: #5e72e4;
        box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08);
      }

      .btn-primary:hover {
        color: #fff;
        border-color: #5e72e4;
        background-color: #5e72e4;
      }

      .btn-primary:focus {
        box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08), 0 0 0 0 rgba(94, 114, 228, .5);
      }

      .card{
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        border: 1px solid rgba(0, 0, 0, .05);
        border-radius: .375rem;
        background-color: #fff;
        background-clip: border-box;
      }

      .card>hr {
        margin-right: 0;
        margin-left: 0;
      }

      .card-body {
        padding: 1.5rem;
        flex: 1 1 auto;
      }

      .card-header {
        margin-bottom: 0;
        padding: 1.25rem 1.5rem;
        border-bottom: 1px solid rgba(0, 0, 0, .05);
        background-color: #fff;
      }

      .card-header:first-child {
        border-radius: calc(.375rem - 1px) calc(.375rem - 1px) 0 0;
      }

      .bg-secondary {
        background-color: #f7fafc !important;
      }

      .bg-white {
        background-color: #fff !important;
      }

      .align-items-center {
        align-items: center !important;
      }

      .shadow {
        box-shadow: 0 0 2rem 0 rgba(136, 152, 170, .15) !important;
      }

      .text-right {
        text-align: right !important;
      }

      .text-center {
        text-align: center !important;
      }

      .btn {
        font-size: .875rem;
        position: relative;
        transition: all .15s ease;
        letter-spacing: .025em;
        text-transform: none;
        will-change: transform;
      }

      .btn:hover {
        transform: translateY(-1px);
        box-shadow: 0 7px 14px rgba(50, 50, 93, .1), 0 3px 6px rgba(0, 0, 0, .08);
      }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://kit.fontawesome.com/cf67172275.js" crossorigin="anonymous"></script>
    <title>Bantu.an - Berbagi dengan Barang Bekas</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Source+Sans+Pro:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">
  </head>
    <body>
      <a class='fixed-whatsapp' href='https://api.whatsapp.com/send?phone=628xxxxxxxxxx' rel='nofollow noopener' target='_blank' title='Whatsapp' />
          <!-- NAVBAR -->
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
        <div class="main-content">
          <div class="container mt-7">
            <!-- Table -->
            <div class="row" >
              <div class="col-xl-8 m-auto order-xl-1">
                <div class="card bg-secondary shadow" >
                  <div class="card-header bg-white border-0">
                    <div class="row align-items-center">
                      <div class="col-8">
                        <h3 class="mb-0">Tambah Donasi</h3>
                      </div>
                    </div>
                  </div>
                  <div class="card-body" style="background-color:white">
                    <form method="post" action="/postdonation" enctype="multipart/form-data">
                      <h6 class="heading-small text-muted mb-4">Silahkan isi data sumbangan dengan sebaik mungkin</h6>
                      <div class="pl-lg-4">
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="form-group focused">
                              <label class="form-control-label" for="input-username">Nama Barang</label>
                              <input type="text" id="input-username" class="form-control" placeholder="Nama Barang" name="nama">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="form-group focused">
                              <label class="form-control-label" for="input-first-name">Jenis Barang</label><br>
                              <select id="field-be1h8i-ll2hpg-q4efzm-nfjj1e-udkw5r" class="form-select" name="jenis">
                                <option disabled selected value="" class="form-select-placeholder">Pilih Jenis Barang</option>
                                <option value="Barang ELektronik">Barang Elektronik</option>
                                <option value="Pakaian">Pakaian</option>
                                <option value="Perabotan">Perabotan</option>
                            </select>

                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="pl-lg-4">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group focused">
                              <label class="form-control-label" for="input-address">Metode Pengiriman</label>
                              <select id="field-be1h8i-ll2hpg-q4efzm-nfjj1e-udkw5r" class="form-select" name="metode_pengiriman">
                                <option disabled selected value="" class="form-select-placeholder">Pilih Metode Pengiriman</option>
                                <option value="Go-Send">Go-Send</option>
                                <option value="Datang Sendiri">Datang Sendiri</option>
                            </select>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="form-group focused">
                              <label class="form-control-label" for="input-city">Deskripsi Barang</label>
                            <textarea id="field-3naeph-0f3yuw-x153ph-dzmahy-qhkmgm" class="form-control" placeholder="" name="deskripsi" placeholder="Deskripsi Barang"></textarea>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="form-group focused">
                            <label class="form-control-label" for="input-city">Gambar</label>
                          <input id="field-3naeph-0f3yuw-x153ph-dzmahy-qhkmgm" class="form-control" type="file" name="gambar" required>
                        </div>
                      </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-3">
                          <div class="form-group focused">
                          <input id="field-3naeph-0f3yuw-x153ph-dzmahy-qhkmgm" class="btn btn-primary" type="submit" value="Tambah Donasi">
                        </div>
                      </div>
                      </div>
                      <!-- Description -->
                    </form>
                  </div>
                </div>
              </div>
            </div>
            @if ($message = Session::get('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ $message }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
          </div>
        </div>
        <footer style="margin-top:30px">
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
