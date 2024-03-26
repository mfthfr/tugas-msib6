<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Miftah Farid Ramdhani</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">M.F.R</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">Profile</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#organization">Organization</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <?php
            echo '<header class="masthead bg-primary text-white text-center">
                    <div class="container d-flex align-items-center flex-column">
                        <img class="masthead-avatar mb-3" src="assets/img/Patrick.png" alt="..." />
                        <h1 class="masthead-heading text-uppercase mb-0">Hi, Guys</h1>
                        <div class="divider-custom divider-light">
                            <div class="divider-custom-line"></div>
                            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                            <div class="divider-custom-line"></div>
                        </div>
                        <p class="masthead-subheading font-weight-light mb-0">Akademi Fullstack Web Developer | MSIB 6</p>
                    </div>
                </header>';
        ?>
        <!-- About Section-->
        <section class="page-section bg-primary text-white mb-0" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">Profile</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <?php
                    echo '<div class="row">
                            <div class="col-lg-4 ms-auto">
                                <p class="lead">Nama : Miftah Farid Ramdhani</p>
                                <p class="lead">Email : miftahfr22@gmail.com</p>
                                <p class="lead">Alamat : Kabupaten Bandung, Jawa Barat</p>
                            </div>
                            <div class="col-lg-4 me-auto">
                                <p class="lead"><a class="btn btn-outline-light btn-social mx-1" href="https://www.linkedin.com/in/miftahfaridramdhani" target="blank"><i class="fab fa-fw fa-linkedin-in"></i></a> Miftah Farid Ramdhani</p>
                                <p class="lead"><a class="btn btn-outline-light btn-social mx-1" href="https://www.instagram.com/mftah.frid/" target="blank"><i class="fab fa-fw fa-instagram"></i></a> mfth.frid</p>
                            </div>
                        </div>';
                ?>
            </div>
        </section>
        <!-- Organization Section -->
        <section class="page-section bg-white text-white mb-0" id="organization">
            <div class="container">
                <!-- Organization Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-black">Organization</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-dark">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Organization Section Content-->
                <?php
                    echo '<div class="row text-black">
                            <div class="col-lg-4 ms-auto">
                                <h3 class="lead">Periode 2021 - Sekarang</h3>
                                <p class="lead">Badan Eksekutif Mahasiswa</p>
                            </div>
                            <div class="col-lg-4 ms-auto">
                                <h3 class="lead">Periode 2018 - 2021</h3>
                                <p class="lead">Pramuka</p>
                            </div>
                        </div>';
                ?>
            </div>
        </section>
        <!-- Footer-->
        <?php
            echo '<footer class="footer text-center">
                    <div class="container">
                        <div class="row">
                            <!-- Footer Location-->
                            <div class="col-lg-4 mb-5 mb-lg-0">
                                <h4 class="text-uppercase mb-4">Location</h4>
                                <p class="lead mb-0">
                                    Miftah FR
                                    <br />
                                    Kab.Bandung, Jawa Barat
                                </p>
                            </div>
                            <!-- Footer Social Icons-->
                            <div class="col-lg-4 mb-5 mb-lg-0">
                                <h4 class="text-uppercase mb-4">Around the Web</h4>
                                <a class="btn btn-outline-light btn-social mx-1" href="https://www.linkedin.com/in/miftahfaridramdhani" target="blank"><i class="fab fa-fw fa-linkedin-in"></i></a>
                                <a class="btn btn-outline-light btn-social mx-1" href="https://www.instagram.com/mftah.frid/" target="blank"><i class="fab fa-fw fa-instagram"></i></a>
                            </div>
                            <!-- Footer About Text-->
                            <div class="col-lg-4">
                                <h4 class="text-uppercase mb-4">About Freelancer</h4>
                                <p class="lead mb-0">
                                    Zero to Hero!
                                </p>
                            </div>
                        </div>
                    </div>
                </footer>';
        ?>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; MFR 2024</small></div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
