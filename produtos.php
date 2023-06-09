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
                            <a class="nav-link" aria-current="page" href="index.html">Página Inicial</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="sobrenos.html">Sobre Nós</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="produtos.html">Produtos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="promocoes.html">Promoções</a>
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
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card mb-3 mx-auto" style="width: 18rem;">
                    <img src="img/produtos/apple.webp" class="card-img-top" alt="apple">
                    <div class="card-body">
                        <h5 class="card-title">iPhone 14 Pro APPLE (6.1" - 128 GB - Preto Sideral)<span
                                class="badge">NOVO!</span></h5>
                        <p class="card-text">1169,00€</p>
                        <!--<a href="#" class="btn">Adicionar ao carrinho</a>-->
                        <button type="button" class="btn" id="liveToastBtn">Adicionar ao carrinho</button>

                        <div class="toast-container position-fixed bottom-0 end-0 p-3">
                            <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="toast-header">
                                    <img src="..." class="rounded me-2" alt="...">
                                    <strong class="me-auto">Bootstrap</strong>
                                    <small>11 mins ago</small>
                                    <button type="button" class="btn-close" data-bs-dismiss="toast"
                                        aria-label="Close"></button>
                                </div>
                                <div class="toast-body">
                                    Hello, world! This is a toast message.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
                <div class="card mb-3 mx-auto" style="width: 18rem;">
                    <img src="img/produtos/auscutador.webp" class="card-img-top" alt="auscutador">
                    <div class="card-body">
                        <h5 class="card-title">Auscultadores Bluetooth JBL T510 (Over Ear - Microphone - Preto)<span
                                class="badge">PROMO!!</span></h5>
                        <p class="card-text">49,99€</p>
                        <a href="#" class="btn">Adicionar ao carrinho</a>
                    </div>
                </div>
            </div>

            <div class="ccol-12 col-md-6 col-lg-4">
                <div class="card mb-3 mx-auto" style="width: 18rem;">
                    <img src="img/produtos/fritadeira.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Fritadeira sem Óleo AIGOSTAR 300010IBT (7 kg - Preto)</h5>
                        <p class="card-text">99,99€</p>
                        <a href="#" class="btn">Adicionar ao carrinho</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
                <div class="card mb-3 mx-auto" style="width: 18rem;">
                    <img src="img/produtos/playstation.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Consola PS5 (825 GB) + Jogo PS5 God Of War Ragnarök (Formato Digital)
                        </h5>
                        <p class="card-text">619,99€</p>
                        <a href="#" class="btn">Adicionar ao carrinho</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
                <div class="card mb-3 mx-auto" style="width: 18rem;">
                    <img src="img/produtos/samsung.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Smartphone SAMSUNG Galaxy A33 5G (6.4'' - 6 GB - 128 GB - Preto) </h5>
                        <p class="card-text">299,97€</p>
                        <a href="#" class="btn">Adicionar ao carrinho</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
                <div class="card mb-3 mx-auto" style="width: 18rem;">
                    <img src="img/produtos/tv.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Monitor LG 24GQ50F-B (24'' - Full HD - AMD FreeSync)</h5>
                        <p class="card-text">152,99€</p>
                        <a href="#" class="btn">Adicionar ao carrinho</a>
                    </div>
                </div>
            </div>
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

        <!--MEU JAVASCRIPT-->
        <script src="js/main.js"></script>
    <!--<script src="https:js/bootstrap.bundle.min.js"></script>-->
    <!--BOOTSTRAP/>
</body>

</html>