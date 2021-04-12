<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
   
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Carlos Pousadas</title>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-sm navbar-light bg-warning">
            <!--Inico da NAVBAR-->
            <div class="container">

                <a href="#" class="navbar-brand">
                    <img src="assets/imagens/img/logo.png" width="142">
                </a>

                <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
                    <!--RESPONSIVO-->
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="nav-principal">

                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item" id="btnhome">
                            <a href="" class="nav-link">HOME</a>
                        </li>
                        <li class="nav-item" id="btngaleria">
                            <a href="galeria.html" class="nav-link">Galeria</a>
                        </li>
                        <li class="nav-item" id="btncontato">
                            <a href="" class="nav-link">Contato</a>
                        </li>
                        <li class="nav-item" id="btnqmsomos">
                            <a href="" class="nav-link">Sobre nós</a>
                        </li>
                       
                    </ul>

                </div>


            </div>
        </nav>
        <!--FINAL da NAVBAR-->
    </header>


    <section id="home">
        <!--NICIO DA SEÇÃO-->
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex">
                    <div class="align-self-center">
                        <h1 class="display-4">Seja bem-vindo,</h1>
                        <h4 class="display-4">entre em contato com Carlos Pousadas para realizar seu agendamento do imóvel</h4>

                        <form class="mt-4 mb-4" action="inserir.php" method="post">
                            <div class="input-group mb-3">
                                <input type="text" placeholder="Seu nome completo" class="form-control" required name="nome">
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" placeholder="Seu e-mail" class="form-control" required name="email">
                            </div>
                            <div class="input-group mb-3">
                                <input type="tel" placeholder="Nº do celular para contato" class="form-control"
                                    required name="numero_cel">
                            </div>
                            <div class="input-group">
                                <button class="btn btn-primary" type="submit">
                                    Entrar em contato
                                </button>
                            </div>

                        </form>
                    </div>

                </div>
                <div class="col-md-6 d-none d-md-block">
                    <img src="assets/imagens/img/casa5.png">
                </div>
            </div>
        </div>
    </section>

    <section class="caixa">
        <div class="container">
            <div class="row">
                <div class="col-md-6 f-flex">
                    <div class="align-self-center">
                        <h2>Sobre nós</h2>
                        <p>Carlos Pousada, localizado no interior de Goiás, á 50 metros do rio Aporé oferece uma boa
                            hospedagem e lazer. Com casas mobiliadas contendo garagens, churrasqueiras, ar-condicionado,
                            televisões, WIFI e muito mais...
                        </p>
                        <button class="btn btn-primary" type="button">
                            Veja mais
                        </button>
                    </div>
                </div>
                <div class="col-md-6">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>

                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="assets/imagens/img/ft2.jpg" class="d-block w-100" height="400">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/imagens/img/ft1.jpg" class="d-block w-100" height="400">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="caixa">
        <div class="container">
            <div class="row">
                <div class="col-md-6 f-flex">
                    <div class="align-self-center">
                        <h2>Localização</h2>
                        <p>Carlos Pousada, localizado no interior de Goiás, á 50 metros do rio Aporé oferece uma boa
                            hospedagem e lazer. Com casas mobiliadas contendo garagens, churrasqueiras, ar-condicionado,
                            televisões, WIFI e muito mais...
                        </p>
                        <button class="btn btn-primary" type="button">
                            Veja mais
                        </button>
                    </div>
                </div>
                <div class="col-md-6">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d942.0386671048067!2d-51.40049617082045!3d-19.188445732592207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTnCsDExJzE4LjQiUyA1McKwMjMnNTkuOCJX!5e0!3m2!1spt-BR!2sbr!4v1617584382741!5m2!1spt-BR!2sbr"
                        width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="contatoinicial">
       
        <div class="container">
            <h2 class="text-center">Contato</h2>
            <div class="row">
                <div class="col-md-6">
                    <p>Rua Mamudes José de Freitas, S/N</p>
                    <p>Centro - CEP:75819-000</p>
                    <p>Lagoa Santa - GO</p>
                    <p>(64)99967-3489</p>
                    <p>carlosriber12@hotmail.com</p>
                </div>
                <div class="col-md-6 f-flex">
                    
                    <div class="align-self-center">
                        
                        <form class="mt-4 mb-4">
                            <div class="input-group mb-3">
                                <input type="text" placeholder="Seu nome completo" class="form-control" required>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" placeholder="Seu e-mail" class="form-control" required>
                            </div>
                            <div class="input-group mb-3">
                                <input type="tel" placeholder="Nº do celular para contato" class="form-control"
                                    required>
                            </div>
                            <div class="input-group mb-3">
                                <textarea name="textarea"
                                rows="5" cols="90"
                                placeholder="Comment text."></textarea>
                            </div>
                            <div class="input-group">
                                <button class="btn btn-primary" type="button">
                                    Entrar em contato
                                </button>
                            </div>

                        </form>
                       
                    </div>
                </div>
               
            </div>
        </div>
        </div>
    </section>

    <footer class="mt-4 mb-4">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    Copyright © 2021 Carlos Pousadas - Todos os direitos reservados.
                </div>
                <div class="col md-4">
                    <a href="" class="btn btn-outline-dark">
                        <i class="fab fa-facebook-square"> </i>
                    </a>
                    <a href="" class="btn btn-outline-dark">
                        <i class="fab fa-instagram"> </i>
                    </a>
                
                </div>
                
                
                   
                <div class="col-md-4">
                    Desenvolvido por <a href="">Carlos Eduardo Pasquini de Paula</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

</body>

</html>