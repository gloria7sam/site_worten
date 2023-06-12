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
                        <a class="nav-link" aria-current="page" href="produtos.html">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="promocoes.html">Promoções</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="contacto.html">Contacto</a>
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
    <main class="container mt-1 shadow mb-3 rounded text-center">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-6">
                    <iframe class="w-100" height="450"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48056.70408018468!2d-8.675441023898594!3d41.16630044101676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd2465f41da3e0fd%3A0xf4dfb56e4460e634!2sWorten!5e0!3m2!1spt-PT!2spt!4v1679991583307!5m2!1spt-PT!2spt"
                        style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-12 col-md-6 my-auto px-5">
                    <div class="row">
                        <div class="col">
                            <i class="bi bi-house"></i>
                            <p>Norte Shopping, R. Sara Afonso 112 Loja 112, <br>4460-841 Sra. da Hora</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col">
                            <i class="bi bi-clock"></i>
                            <p>segunda-feira,10:00–23:00</p>
                            <p>terça-feira,10:00–23:00</p>
                            <p>quarta-feira,10:00–23:00</p>
                            <p>quinta-feira,10:00–23:00</p>
                            <p>sexta-feira,10:00–23:00</p>
                            <p>sábado,10:00–23:00</p>
                            <p>domingo,10:00–23:00</p>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col">
                                <i class="bi bi-telephone"></i>
                                <p>222 333 444</p>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                        <div class="row">
                            <div class="col"><!-- Button trigger modal -->
                                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                  Contacte-nos
                                </button>
                                
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Contacto</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body">

                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                          </div>
                                          <div class="mb-3">
                                            <label for="exampleFormControlTextarea1" class="form-label">Mensagem</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                          </div>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn" data-bs-dismiss="modal">Cancelar</button>
                                        <button type="button" class="btn">Enviar</button>
                                      </div>
                                    </div>
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
    <!--<script src="https:js/bootstrap.bundle.min.js"></script>-->
    <!--BOOTSTRAP/>
</body>

</html>