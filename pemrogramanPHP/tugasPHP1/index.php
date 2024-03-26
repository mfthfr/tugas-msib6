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
        <header class="masthead bg-primary text-white text-center">
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
        </header>
        <!-- Profile Section-->
        <section class="page-section bg-primary text-white mb-0" id="about">
            <div class="container">
                <!-- Profile Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">Profile</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Profile Section Content-->
                <?php
                    $nama = "Miftah Farid Ramdhani";
                    $email = "miftahfr22@gmail.com";
                    $alamat = "Kabupaten Bandung, Jawa Barat";
                    $instagram = "mfth.frid";
                    $link1 = "https://www.linkedin.com/in/miftahfaridramdhani";
                    $link2 = "https://www.instagram.com/mftah.frid/";

                    echo '<div class="row">';
                    echo '<div class="col-lg-4 ms-auto">';
                    echo '<p class="lead">Nama : '.$nama.'</p>';
                    echo '<p class="lead">Email : '.$email.'</p>';
                    echo '<p class="lead">Alamat : '.$alamat.'</p>';
                    echo '</div>';
                    echo '<div class="col-lg-4 me-auto">';
                    echo '<p class="lead"><a class="btn btn-outline-light btn-social mx-1" href="'.$link1.'" target="blank"><i class="fab fa-fw fa-linkedin-in"></i></a> '.$nama.'</p>';
                    echo '<p class="lead"><a class="btn btn-outline-light btn-social mx-1" href="'.$link2.'" target="blank"><i class="fab fa-fw fa-instagram"></i></a> '.$instagram.'</p>';
                    echo '</div>';
                    echo '</div>';
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
                    $periode1= "Periode 2021 - Sekarang";
                    $periode2= "Periode 2018 - 2021";
                    $organisasi1= "Badan Eksekutif Mahasiswa";
                    $organisasi2= "Pramuka";

                    echo '<div class="row text-black">';
                    echo '<div class="col-lg-4 ms-auto">';
                    echo '<h3 class="lead">'.$periode1.'</h3>';
                    echo '<p class="lead">'.$organisasi1.'</p>';
                    echo '</div>';
                    echo '<div class="col-lg-4 ms-auto">';
                    echo '<h3 class="lead">'.$periode2.'</h3>';
                    echo '<p class="lead">'.$organisasi2.'</p>';
                    echo '</div>';
                    echo '</div>';
                ?>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer text-center">
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
        </footer>
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
