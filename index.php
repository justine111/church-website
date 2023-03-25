<?php include("configuration/config.config"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Your description">
    <meta name="author" content="Your name">
    <title><?php echo $title ?></title>
    <link rel="icon" href="<?php echo $icon ?>">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/fontawesome-all.min.css" rel="stylesheet">
    <link href="./css/aos.min.css" rel="stylesheet">
    <link href="./css/swiper.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
</head>
<body>
<!-- Navigation navbar-->
<nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-dark" aria-label="Main navigation">
    <div class="container">
        <a class="navbar-brand logo-text" href="index.html"><?php echo $navlogotext ?></a>
            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ms-auto navbar-nav-scroll">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#header"><?php echo $home ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="#about"><?php echo $about ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="#services"><?php echo $services ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact"><?php echo $contact ?></a></li>
                    <li class="nav-item dropdown"><a class="nav-link" href="attendance/login.php" target="_blank" rel="noopener noreferrer">TUPA</a></li>
                </ul>
            </div> 
        </div> 
    </nav> 

    <!-- Home -->
    <section class="home py-5 d-flex align-items-center" id="header">
        <div class="container text-light py-5"  data-aos="fade-right"> 
            <?php echo $headline ?>
            <?php echo $headline2 ?>
            <div class="my-3">
                <a class="btn" href="#contact"><?php echo $homebtn ?></a>
            </div>
        </div>
    </section>

    <!-- About -->
    <section class="about d-flex align-items-center text-light py-5" id="about">
        <div class="container" >
            <div class="row d-flex align-items-center">
                <div class="col-lg-7" data-aos="fade-right">
                    <?php echo $abouttitle ?>
                    <?php echo $vision ?>
                    <div class="my-3">
                        <a class="btn" href="#your-link"><?php echo $aboutbtn ?></a>
                    </div>
                </div>
                <div class="col-lg-5 text-center py-4 py-sm-0" data-aos="fade-down"> 
                    <?php echo $aboutimglogo ?> 
                </div>
            </div>
        </div>
    </section> 

    <section class="about d-flex align-items-center text-light py-5" id="about">
        <div class="container" >
            <div class="row d-flex align-items-center">
                <div class="col-lg-7" data-aos="fade-right">
                    <?php echo $announcement?>

                </div>
                <div class="col-lg-5 text-center py-4 py-sm-0" data-aos="fade-down"> 
                    <?php echo $video ?> 
                </div>
            </div>
        </div>
    </section> 

    <!-- Services -->
    <section class="services d-flex align-items-center py-5" id="services">
        <div class="container text-light">
            <div class="text-center pb-4" >
                <?php echo $servicestitle ?>
            </div>
            <div class="row gy-4 py-2" data-aos="zoom-in">
                <div class="col-lg-4">
                    <div class="card bg-transparent">
                        <?php echo $image1 ?>
                        <?php echo $tooltip1 ?>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card bg-transparent">
                        <?php echo $image2 ?>
                        <?php echo $tooltip2 ?>
                    </div>                    
                </div>
                <div class="col-lg-4">
                    <div class="card bg-transparent">
                        <?php echo $image3 ?>
                        <?php echo $tooltip3 ?>
                    </div>                    
                </div>
                <div class="col-lg-4">
                    <div class="card bg-transparent">
                        <?php echo $image4 ?>
                        <?php echo $tooltip4 ?>
                    </div>                    
                </div>
                <div class="col-lg-4">
                    <div class="card bg-transparent">
                        <?php echo $image5 ?>
                        <?php echo $tooltip5 ?>
                    </div>                    
                </div>
                <div class="col-lg-4">
                    <div class="card bg-transparent">
                        <?php echo $image6 ?>
                        <?php echo $tooltip6 ?>
                    </div>                    
                </div>
            </div>
        </div>
    </section> 

    <!--pastors-->
    <div class="slider-1 testimonial text-light d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="text-center w-lg-75 m-auto pb-4">
                   <?php echo $titlepastor ?>
                </div>
            </div>
            <div class="row p-2" data-aos="zoom-in">
                <div class="col-lg-12">
                    <div class="slider-container">
                        <div class="swiper-container card-slider">
                            <div class="swiper-wrapper">
                                
                            
                                <div class="swiper-slide">
                                    <div class="testimonial-card p-4">
                                        <?php echo $lifeverse1 ?>
                                        <div class="d-flex pt-4">
                                            <div>
                                                <?php echo $pastorimg1 ?>
                                            </div>
                                            <div class="ms-3 pt-2">
                                                <?php echo $pastorname1 ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="swiper-slide">
                                    <div class="testimonial-card p-4">
                                        <?php echo $lifeverse2 ?>
                                        <div class="d-flex pt-4">
                                            <div>
                                                <?php echo $pastorimg2 ?>
                                            </div>
                                            <div class="ms-3 pt-2">
                                                <?php echo $pastorname2 ?>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
        
                                <div class="swiper-slide">
                                    <div class="testimonial-card p-4">
                                        <?php echo $lifeverse3 ?>
                                        <div class="d-flex pt-4">
                                            <div>
                                                <?php echo $pastorimg3 ?>
                                            </div>
                                            <div class="ms-3 pt-2">
                                                <?php echo $pastorname3 ?>
                                            </div>
                                        </div>
                                    </div>      
                                </div>
        
                                <div class="swiper-slide">
                                    <div class="testimonial-card p-4">
                                        <?php echo $lifeverse4 ?>
                                        <div class="d-flex pt-4">
                                            <div>
                                                <?php echo $pastorimg4 ?>
                                            </div>
                                            <div class="ms-3 pt-2">
                                                <?php echo $pastorname4 ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="testimonial-card p-4">
                                        <?php echo $lifeverse5 ?>
                                        <div class="d-flex pt-4">
                                            <div>
                                                <?php echo $pastorimg5 ?>
                                            </div>
                                            <div class="ms-3 pt-2">
                                                <?php echo $pastorname5 ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div> 
                    </div>
                </div> 
            </div> 
        </div> 
    </div> 
   
    <!-- Contact -->
    <section class="contact d-flex align-items-center py-5" id="contact">
        <div class="container-fluid text-light">
            <div class="row">
                <div class="col-lg-6 d-flex justify-content-center justify-content-lg-end align-items-center px-lg-5" data-aos="fade-right">
                    <div style="width:90%">
                        <div class="text-center text-lg-start py-4 pt-lg-0">
                            <?php echo $titlecontact ?>
                        </div>
                        
                        <form action="mail.php" method="POST">
                            <div class="row" >
                                <div class="col-lg-6">
                                    <div class="form-group py-2">
                                        <input type="text" class="form-control form-control-input" id="exampleFormControlInput1" name="name" placeholder="Enter name">
                                    </div>                                
                                </div>

                                <div class="form-group py-2 col-lg-6">
                                    <input type="email" class="form-control form-control-input" id="exampleFormControlInput3"  name="email" placeholder="Enter email">
                                </div>  
                            </div>

                            <div class="form-group py-2">
                                <textarea class="form-control form-control-input" id="exampleFormControlTextarea1" name="subject" rows="6" placeholder="Message"></textarea>
                            </div>                            
                        
                            <div class="my-3">
                                <a class="btn form-control-submit-button" href="#your-link">Submit</a>
                            </div>
                        </form>
                    </div> 
                </div> 
                <div class="col-lg-6 d-flex align-items-center" data-aos="fade-down">
                    <?php echo $contactimg ?>        
                </div>
            </div>
        </div>
    </section>

    <!-- Location -->
    <section class="location text-light py-5">
        <div class="container" data-aos="zoom-in">
            <div class="row">
                <div class="col-lg-3 d-flex align-items-center">
                    <div class="p-2"><i class="far fa-map fa-3x"></i></div>
                    <div class="ms-2">
                        <?php echo $address ?>
                    </div>
                </div>
                <div class="col-lg-3 d-flex align-items-center" >
                    <div class="p-2"><i class="fas fa-mobile-alt fa-3x"></i></div>
                    <div class="ms-2">
                        <?php echo $call ?>
                    </div>
                </div>
                <div class="col-lg-3 d-flex align-items-center" >
                    <div class="p-2"><i class="far fa-envelope fa-3x"></i></div>
                    <div class="ms-2">
                        <?php echo $message ?>
                    </div>
                </div>
                <div class="col-lg-3 d-flex align-items-center" >
                    <div class="p-2"><i class="far fa-clock fa-3x"></i></div>
                    <div class="ms-2">
                       <?php echo $opening ?>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <section class="footer text-light">
        <div class="container">
            <div class="row" data-aos="fade-right">
                <div class="col-lg-3 py-4 py-md-5">
                    <div class="d-flex align-items-center">
                        <?php echo $footertitle1 ?>
                    </div>
                    <?php echo $footertooltip ?>
                    <div class="d-flex">
                        <div class="me-3">
                            <a href="#your-link">
                                <i class="fab fa-facebook-f fa-2x py-2"></i>
                            </a>
                        </div>

                        <div class="me-3">
                            <a href="#your-link">
                                <i class="fab fa-twitter fa-2x py-2"></i>
                            </a>
                        </div>

                        <div class="me-3">
                            <a href="#your-link">
                                <i class="fab fa-instagram fa-2x py-2"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 py-4 py-md-5">
                    <div>
                        <?php echo $linkstitle ?>
                        <div class="d-flex align-items-center py-2">
                            <i class="fas fa-caret-right"></i>
                            <a href="#about"><p class="ms-3"><?php echo $linksabout ?></p></a>
                        </div>

                        <div class="d-flex align-items-center py-2">
                            <i class="fas fa-caret-right"></i>
                            <a href="#services"><p class="ms-3"><?php echo $linksservices ?></p></a>
                        </div>

                        <div class="d-flex align-items-center py-2">
                            <i class="fas fa-caret-right"></i>
                            <a href="#contact"><p class="ms-3"><?php echo $linkscontact ?></p></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 py-4 py-md-5">
                    <div>
                        <?php echo $termstitle ?>
                        <div class="d-flex align-items-center py-2">
                            <i class="fas fa-caret-right"></i>
                            <a href="privacy.html"><p class="ms-3"><?php echo $privacy ?></p></a>   
                        </div>

                        <div class="d-flex align-items-center py-2">
                            <i class="fas fa-caret-right"></i>
                            <a href="terms.html"><p class="ms-3"><?php echo $terms ?></p></a>
                        </div>

                        <div class="d-flex align-items-center py-2">
                            <i class="fas fa-caret-right"></i>
                            <a href="#your-link"><p class="ms-3"><?php echo $disclaimer ?></p></a>
                        </div>

                        <div class="d-flex align-items-center py-2">
                            <i class="fas fa-caret-right"></i>
                            <a href="#your-link"><p class="ms-3"><?php echo $faq ?></p></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 py-4 py-md-5">
                    <div class="d-flex align-items-center">
                        <?php echo $footertitle2 ?>
                    </div>
                    <?php echo $footertooltip2 ?>
                    <div class="d-flex align-items-center">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control p-2" placeholder="Enter Email" aria-label="Recipient's email">
                            <button class="btn-secondary text-light"><i class="fas fa-envelope fa-lg"></i></button>       
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <button onclick="topFunction()" id="myBtn">
        <img src="assets/images/up-arrow.png" alt="alternative">
    </button>

    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/purecounter.min.js"></script>
    <script src="./js/swiper.min.js"></script>
    <script src="./js/aos.js"></script>
    <script src="./js/script.js"></script>
</body>
</html>