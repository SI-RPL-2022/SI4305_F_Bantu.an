<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    
    <script src="https://kit.fontawesome.com/cf67172275.js" crossorigin="anonymous"></script>
    <style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300;400;700;900&display=swap');

    body {
        font-family: 'Source Sans Pro', sans-serif;
        font-size: 18px;
        color: #585858;
    }
    .container {
        max-width: 1200px;
        margin: auto;
        padding: 0 20px;
    }
    @media(max-width:1024px) {
        .container {
            max-width: 100%;
        }
        header .container {
            max-width: 90%;
        }
    }
    header {
        border-bottom: 1px solid rgb(243, 243, 243);
    }
    header .container{
        display: flex;
        justify-content:space-between;
        padding: 15px 0;
    }
    a {
        text-decoration: none;
        color: inherit;
    }
    p {
         margin: 0.5rem;
    }
    .logo {
        text-transform: uppercase;
        color: #000;
        font-size: 22px;
        font-weight: bold;
        line-height: 2rem;
    }
    .bag {
        font-size: 28px;
        position: relative;
    }
    .bag span {
        display: block;
        background: #E20000;
        color: #fff;
        width: 1.3rem;
        height: 1.3rem;
        text-align: center;
        border-radius: 100%;
        line-height: 1.3rem;
        font-size: 0.8rem;
        font-weight: bold;
        position: absolute;
        right: -12px;
        top: 19px;
    }
    @media(min-width:800px) {
        .cards {
            display: flex;
            justify-content: space-around;
            padding: 3rem 0 0 0;
        }
        .card {
            width: 34%;
        }
    }

    .card {
        border: solid #ccc 1px;
        border-radius: 20px;
        overflow: hidden;
        line-height: 1.5rem;
        padding-bottom: 20px;
        margin: 0 10px;
    }
    .card img {
        width: 100%;
    }
    .card .title {
        font-weight: 900;
        font-size: 26px;
    }
    .card .price {
        font-size:4rem;
        font-weight: 100;
        text-align: right;
        line-height: 2rem;
        margin-top: 2rem;
        margin-bottom: 3rem;
    }
    .button {
        border-radius: 50px;
        display: block;
        background: #000;
        color: #fff;
        text-transform: uppercase;
        text-align: center;
        height: 3rem;
        width: 90%;
        line-height: 3rem;
        margin: auto;
        transition: all .3s ease;
    }
    .button:hover {
        background: #2c2c2c;
    }
    .cart {
        width: 30%;
        height: 100%;
        position: fixed;
        top: 0;
        right: -100%;
        background: #fff;
        box-shadow: 0px 0px 5px #d4d4d4;
        font-size: 16px;
        transition: all .5s ease;
    }
    .activo {
        right: 0;
    }
    .cart #minicart {
        padding: 1.3rem;
    }
    .cart #minicart .button {
        margin-top: 2rem;
    }
    .cart table {
        border-collapse: collapse;
    }
    .cart th, .cart td {
        padding: 10px;
        text-align: left;
    }
    .closecart {
        font-size: 2rem;
        position: absolute;
        right: 10px;
    }
    .deletebtn {
        display: block;
        background: #E20000;
        color: #fff;
        width: 1.5rem;
        height: 1.5rem;
        text-align: center;
        border-radius: 100%;
        line-height: 1.5rem;
        font-size: 0.8rem;
        font-weight: bold;
    }
    </style>

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
                        <a class="nav-link" href="/login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/register">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav><!-- //NAVBAR -->

    <!-- HERO -->
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
    <section id="services">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 mx-auto text-center">
                    <h6 class="text-primary">Layanan</h6>
                    <h1>Layanan Kami</h1>
                    <p>Pelayanan yang kami berikan kepada anda adalah sebagai berikut</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-sm-6">
                    <div class="service card-effect bounceInUp">
                        <div class="iconbox">
                            <i class='bx bxs-check-shield'></i>
                        </div>
                        <h5 class="mt-4 mb-2">Terpercaya</h5>
                        <p>Anda tidak perlu khawatir ketika berdonasi, setiap donasi yang anda berikan akan kami berikan kepada pihak-pihak yang membutuhkan</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service card-effect">
                        <div class="iconbox">
                            <i class='bx bxs-comment-detail'></i>
                        </div>
                        <h5 class="mt-4 mb-2">Admin Responsif</h5>
                        <p>Admin kami akan responsif menerima pertanyaan dan keluhan dari anda setiap hari senin-jumat pada pukul 08.00 - 17.00 WIB</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service card-effect">
                        <div class="iconbox">
                            <i class='bx bxs-coin'></i>
                        </div>
                        <h5 class="mt-4 mb-2">Dapat Membeli Barang Bekas Berkualitas</h5>
                        <p>Anda dapat membeli barang bekas yang tersedia dan keuntungan dari transaksi akan kami donasikan</p>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- SERVICES -->

    <!-- FEATURES -->
    <section class="row w-100 py-0 bg-light" id="features" style="background-color:#ececec">
        <div class="col-lg-6 col-img"></div>
        <div class="col-lg-6 py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <h1 class="text-primary">Mengapa Harus Memilih Kami</h1>
                        <p>Beberapa manfaat yang anda akan dapatkan ketika memilih kami sebagai lembaga penyalur bantuan </p>

                        <div class="feature d-flex mt-5">
                            <div class="iconbox me-3">
                                <i>1</i>
                            </div>
                            <div>
                                <h5>Dapat Berdonasi Dengan Barang</h5>
                                <p>Anda tidak memerlukan uang untuk berdonasi melalui kami, cukup kirimkan barang anda kepada kami maka anda sudah dapat berdonasi</p>
                            </div>
                        </div>
                        <div class="feature d-flex">
                            <div class="iconbox me-3">
                                <i>2</i>
                            </div>
                            <div>
                                <h5>Terdapat Reward Menarik</h5>
                                <p>Semakin banyak anda berdonasi, maka reward yang anda akan peroleh akan semakin bagus </p>
                            </div>
                        </div>
                        <div class="feature d-flex">
                            <div class="iconbox me-3">
                                <i>3</i>
                            </div>
                            <div>
                                <h5>Mengurangi Pembuangan Barang Bekas Sembarangan</h5>
                                <p>Anda dapat membantu keberlangsungan bumi kita ini dengan menyerahkan barang bekas anda kepada kami</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section><!-- FEATURES -->

    <!-- PROJECTS -->
    <section id="portfolio" style="margin-bottom:-100px">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 mx-auto text-center">
                    <h6 class="text-primary">Produk</h6>
                    <h1>Produk yang Kami Terima</h1>
                    <p>Beberapa barang yang kami terima sebagai barang donasi adalah</p>
                </div>
            </div>
            <div class="row g-3" style="margin-bottom:40px">
                <div class="col-lg-4 col-sm-6">
                    <div class="project">
                        <img src="/img/pro1.jpg" alt="" style="height:270px">
                        <div class="overlay">
                            <div>
                                <h4 class="text-white">Pakaian Bekas</h4>
                                <h6 class="text-white">Layak Pakai</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="project">
                        <img src="/img/pro2.jpg" alt="" style="height:270px">
                        <div class="overlay">
                            <div>
                                <h4 class="text-white">Perangkat Elektronik</h4>
                                <h6 class="text-white">(HP, TV. Laptop)</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="project">
                        <img src="/img/pro3.jpg" alt="" style="height:270px">
                        <div class="overlay">
                            <div>
                                <h4 class="text-white">Perabotan</h4>
                                <h6 class="text-white">Rumah Tangga</h6>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section><!-- PROJECTS -->

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
                        <ul class="list-unstyled">
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
