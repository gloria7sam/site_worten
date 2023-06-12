<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WORTEN</title>
    <!--FAVICON-->
    <link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
    <!--GOOGLE FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    
    <!--BOOTTRAP CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <!--<link rel="stylesheet" href="css/bootstrap.min.css"-->

    <!--MEU CSS-->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <header class="container-fluid text-center">
        <img src="img/logo.png" alt="logo_worten">
        <nav class="navbar navbar-expand-lg" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.html">Página Inicial</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="sobrenos.html">Sobre Nós</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="produtos.html">Produtos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="promocoes.html">Promoções</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="contacto.html">Contacto</a>
                        </li>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                        </form>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="container mt-1 shadow mb-3 rounded">
        <div id="carouselExampleCaptions" class="carousel slide w-75 mx-auto" data-bs-theme="dark">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/produtos/apple.webp" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>iPhone 14 Pro APPLE (6.1" - 128 GB - Preto Sideral)</h5>
                  <p>1169,00</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/produtos/auscutador.webp" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Auscultadores Bluetooth JBL T510 (Over Ear - Microphone - Preto)</h5>
                  <p>49,99€</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/produtos/fritadeira.webp" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Fritadeira sem Óleo AIGOSTAR 300010IBT (7 kg - Preto)</h5>
                  <p>99,99€</p>
                </div>
                <div class="carousel-item">
                    <img src="img/produtos/playstation.webp" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Consola PS5 (825 GB) + Jogo PS5 God Of War Ragnarök (Formato Digital)</h5>
                      <p>619,99€</p>
                    </div>
                  </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </main>
    <footer class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-6 text-center p-3">
                © WORTEN - EQUIPAMENTOS PARA O LAR, S.A
            </div>
            <div class="col-12 col-md-6 text-center p-3">
                <a href="https://www.facebook.com/wortenpt/" target="_blank"><i class="bi bi-facebook"></i></a>
                <a href="https://twitter.com/WortenPT" target="_blank"><i class="bi bi-twitter"></i></a>
                <a href="https://www.instagram.com/wortenpt/?hl=pt" target="_blank"><i class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/company/worten/" target="_blank"><i class="bi bi-linkedin"></i></a>
                <a href="https://www.twitch.tv/wortenpt" target="_blank"><i class="bi bi-twitch"></i></a>
                <a href="https://www.youtube.com/c/worten" target="_blank"><i class="bi bi-facebook"></i></a>
            </div>
        </div> 
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin="anonymous"></script>
    <!--<script src="https:js/bootstrap.bundle.min.js"></script>-->
    <!--BOOTSTRAP/>
</body>

</html>