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
  <div class="cards container">
            <h1>Katalog Barang Donasi</h1>
      <?php foreach ($data as $d) { ?>
      <div class="card">
          <img src="/assets/verifikasi/{{$d->gambar}}" alt="">
          <p class="title">{{}}</p>
          <p class="description">Men's Shoes</p>
          <p class="price">$180</p>
          <a href="#" class="button" data-id="1">Add to Card</a>
      </div>
    <?php } ?>
  </div>

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
    <script>
    //Menu right
    const bag =  document.querySelector('header .bag');
    const cart =  document.querySelector('.cart');
    const closecartBtn = document.querySelector('.closecart');
    const contenedorCarrito =  document.querySelector('#lista-carrito tbody');
    const carrito = document.querySelector('#minicart');
    const vaciarCarritoBtn =  document.querySelector('#vaciar-carrito');

    //Body
    const courseList = document.querySelector('.cards');
    let articulosCarrito = [];
    let total = 0;

    loadEventListeners()
    function loadEventListeners(){
        //Menu right cart
        bag.addEventListener('click', openCart);

        //Close Cart button
        closecartBtn.addEventListener('click', closecart)

        //Agregar curso presionando addToCart
        courseList.addEventListener('click', addCourse);

        //Eliminar articulo
        carrito.addEventListener('click', eliminarCurso);

        //Vaciar carrito
        vaciarCarritoBtn.addEventListener('click', ()=>{
            articulosCarrito = []; // reseteamos carrito
            limpiarHTML()
        })
    }

    //Open cart
    function openCart(e){
        e.preventDefault();
        cart.classList.add('activo')
    }
    //Close Cart
    function closecart(e) {
        e.preventDefault();
        cart.classList.remove('activo')
    }

    //Btn add course
    function addCourse(e) {
        e.preventDefault();
        if (e.target.classList.contains('button')) {
            const cursoSelected = e.target.parentElement;
            datosCurso(cursoSelected)
        }
    }

    //Delete product
    function eliminarCurso(e){
        if(e.target.classList.contains('deletebtn')) {
            const cursoID = e.target.getAttribute('data-id');
            articulosCarrito = articulosCarrito.filter( curso => curso.id !== cursoID);

            carritoHTML();
        }
    }

    //Read course data
    function datosCurso(curso){

        //Create Object
        const infoCurso = {
            image: curso.querySelector('img').src,
            title: curso.querySelector('.title').textContent,
            price: curso.querySelector('.price').textContent,
            id: curso.querySelector('a').getAttribute('data-id'),
            cantidad: 1
        }

        //Revisa si un elemento existe
        const existe = articulosCarrito.some( curso => curso.id === infoCurso.id);
        if(existe){
            //Actualizar el carrito
            let cursos = articulosCarrito.map(curso =>{
                if(curso.id === infoCurso.id){
                    curso.cantidad++;
                    return curso;
                }else {
                    return curso;
                }
            });
            articulosCarrito = [...cursos];
        }else{
            //Agrega elementos al array carrito
            articulosCarrito = [...articulosCarrito, infoCurso];
        }
        //console.log(articulosCarrito);
        carritoHTML();
    }


    //Muestra carrito en el HTML
    function carritoHTML() {
        //Limpiar HTML
        limpiarHTML();
        articulosCarrito.forEach( curso =>{

            const row = document.createElement('tr');
            row.innerHTML = `
                <td><img src="${curso.image}" width="100"></td>
                <td>${curso.title}</td>
                <td>${curso.price}</td>
                <td>${curso.cantidad}</td>
                <td><a href="#" class="deletebtn" data-id="${curso.id}">X</a></td>
            `;
            //Agregar en el Tbody
            contenedorCarrito.appendChild(row);

            //Total
            total = curso.cantidad + curso.cantidad
            console.log(total);
        })

    }

    function limpiarHTML(){
        // contenedorCarrito.innerHTML = '';

        while(contenedorCarrito.firstChild){
            contenedorCarrito.removeChild(contenedorCarrito.firstChild)
        }
    }
    </script>
</body>
</html>
