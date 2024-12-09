<!-- Topbar Start -->
<header class="container-fluid">
    <div class="row bg-secondary py-2 px-lg-5">
        <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center">
                <a class="text-white pr-3" href="">FAQs</a>
                <span class="text-white">|</span>
                <a class="text-white px-3" href="">Help</a>
                <span class="text-white">|</span>
                <a class="text-white pl-3" href="">Support</a>
            </div>
        </div>
        <div class="col-lg-6 text-center text-lg-right">
            <div class="d-inline-flex align-items-center">
                <a class="text-white px-3" href="">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a class="text-white px-3" href="">
                    <i class="fab fa-twitter"></i>
                </a>
                <a class="text-white px-3" href="">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a class="text-white px-3" href="">
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="text-white pl-3" href="">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="row py-3 px-lg-5">
        <div class="col-lg-4">
            <a href="" class="navbar-brand d-none d-lg-block">
                <h1 class="m-0 display-5 text-capitalize"><span class="text-primary"><?= $data['title'] ?></span><?= $data['subtitle'] ?></h1>
            </a>
        </div>
        <div class="col-lg-8 text-center text-lg-right">
            <div class="d-inline-flex align-items-center">
                <div class="d-inline-flex flex-column text-center pr-3 border-right">
                    <h6>Atendimento</h6>
                    <p class="m-0"><?= $data['atendimento'] ?></p>
                </div>
                <div class="d-inline-flex flex-column text-center px-3 border-right">
                    <h6>Nosso Email</h6>
                    <p class="m-0"><?= $data['email'] ?></p>
                </div>
                <div class="d-inline-flex flex-column text-center pl-3">
                    <h6>Nosso Tel.</h6>
                    <p class="m-0"><?= $data['telefone'] ?></p>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Topbar End -->


<!-- Navbar Start -->
<header class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-lg-5">
        <a href="" class="navbar-brand d-block d-lg-none">
            <h1 class="m-0 display-5 text-white"><span class="text-primary"><?= $data['title'] ?></span><?= $data['subtitle'] ?></h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
            <ul id="navigation" class="navbar-nav mr-auto py-0">
                <li><a href="home" class="nav-item nav-link active">Início</a></li>
                <li><a href="about" class="nav-item nav-link">Sobre</a></li>
                <li><a href="service" class="nav-item nav-link">Serviços</a></li>
                <li><a href="price" class="nav-item nav-link">Preços</a></li>
                <li><a href="booking" class="nav-item nav-link">Agendamento</a></li>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <li><a href="blog" class="dropdown-item">Blog</a></li>
                        <li><a href="blogDetails" class="dropdown-item">Blog - detalhes</a></li>
                    </div>
                </div>
                <a href="contact" class="nav-item nav-link">Contato</a>
            </ul>
            <a href="" class="btn btn-lg btn-primary px-3 d-none d-lg-block">Login</a>
        </div>
    </nav>
</header>
<!-- Navbar End -->