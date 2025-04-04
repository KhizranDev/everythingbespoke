<!DOCTYPE html>
<php lang="en">

<head>
    <meta http-equiv="content-type" content="text/php; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Everything Bespoke | The New Language For Menswear</title>

    <!-- Favicon -->
    <link rel="icon" sizes="16x16" href="images/favicon.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&amp;display=swap"
        rel="stylesheet">

    <!-- inject:css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/line-awesome.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/jquery.countdown.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <link rel="stylesheet" href="css/daterangepicker.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- end inject -->
</head>

<body>

    <!-- start loading -->
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="object_one"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_three"></div>
            </div>
        </div>
    </div>
    <!-- end loading -->

    <!--======================================
                START HEADER AREA
    ======================================-->
    <!--<section class="header-menu-area">
        <div class="header-menu-fluid">
            <div class="container">
                <div class="row align-items-center menu-content">
                    <div class="col-lg-3">
                        <div class="logo-box">
                            <a href="index.php" class="logo" title="Everything Bespoke">
                                <img src="images/logo-header.png" width="100%" alt="Everything Bespoke">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="menu-wrapper">
                            <nav class="main-menu">
                                <ul>
                                    <li><a href="about-us.php">About us</a></li>
                                    <li>
                                        <a href="#">Services</a>
                                        <ul class="dropdown-menu-item">
                                            <li><a href="suits.php">Suits</a></li>
                                            <li><a href="formal-shirts.php">Formal Shirts</a></li>
                                            <li><a href="casual-shirts.php">Casual Shirts</a></li>
                                            <li><a href="retail-solutions.php">Retail Solutions</a></li>
                                            <li><a href="door-services.php">Door Services</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="catalog.php">Catalog</a></li>
                                    <li>
                                        <a href="#">Fabrics</a>
                                        <ul class="dropdown-menu-item">
                                            <li><a href="suits-fabric.php">Suits</a></li>
                                            <li><a href="casual-shirts-unbranded.php">Shirts</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Style Guide</a>
                                        <ul class="dropdown-menu-item">
                                            <li><a href="suits-guide.php">Suits</a></li>
                                            <li><a href="shirts-guide.php">Shirts</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="the-process.php">How It Works</a></li>
                                </ul>
                            </nav>

                            <div class="logo-right-button">
                                <ul>
                                    <li class="button-box">
                                        <a href="book-appointment.php" class="theme-btn">Book An Appointment
                                            <span class="la la-caret-right"></span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="side-menu-open">
                                    <span class="menu__bar"></span>
                                    <span class="menu__bar"></span>
                                    <span class="menu__bar"></span>
                                </div>
                            </div>

                            <div class="side-nav-container">
                                <div class="humburger-menu">
                                    <div class="humburger-menu-lines side-menu-close"></div>
                                </div>
                                <div class="side-menu-wrap">
                                    <ul class="side-menu-ul">
                                        <li class="sidenav__item"><a href="about-us.php">About Us</a></li>
                                        <li class="sidenav__item">
                                            <a href="#">Services</a>
                                            <span class="menu-plus-icon"></span>
                                            <ul class="side-sub-menu">
                                                <li><a href="suits.php">Suits</a></li>
											<li><a href="casual-shirts.php">Casual Shirts</a></li>
                                            <li><a href="formal-shirts.php">Formal Shirts</a></li>
											<li><a href="retail-solutions.php">Retail Solutions</a></li>
                                            <li><a href="door-services.php">Door Services</a></li>
                                            </ul>
                                        </li>
                                        <li class="sidenav__item"><a href="catalog.php">Catalog</a></li>
                                        <li class="sidenav__item">
                                            <a href="#">Fabric</a>
                                            <span class="menu-plus-icon"></span>
                                            <ul class="side-sub-menu">
                                                <li><a href="suits-fabric.php">Suits</a></li>
                                                <li><a href="casual-shirts-unbranded.php">Shirts</a></li>
                                            </ul>
                                        </li>
                                        <li class="sidenav__item">
                                            <a href="#">Style Guide</a>
                                            <span class="menu-plus-icon"></span>
                                            <ul class="side-sub-menu">
                                                <li><a href="suits-guide.php">Suits</a></li>
                                                <li><a href="shirts-guide.php">Shirts</a></li>
                                            </ul>
                                        </li>
                                        <li class="sidenav__item"><a href="the-process.php">How it Works</a></li>
                                    </ul>
                                    <div class="side-btn-box">
                                        <a href="book-appointment.php" class="theme-btn">
                                            Book an Appointment <span class="la la-caret-right"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->

    <?php include "include/header.php" ?>

    <!--======================================
                END HEADER AREA
    ======================================-->

    <!--================================
         START BANNER AREA
=================================-->
    <section class="banner-area">
        <div class="banner-fluid">
            <div class="banner-item-wrap">
                <div class="banner-item-table">
                    <div class="banner-item-tablecell">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="banner-content text-center">
                                        <div class="section-heading">
                                            <p class="section__meta">You are Your Own Man Be Your Own Brand</p>
                                            <h2 class="section__title"> The New Language For Menswear</h2>
                                        </div><!-- section-heading -->
                                        <div class="btn-box">
                                            <a href="contact-us.php" class="theme-btn">Discover now<span
                                                    class="la la-caret-right"></span></a>
                                            <span>Call us: +92 309-2817694</span>
                                        </div><!-- btn-box -->
                                    </div><!-- banner-content -->
                                </div><!-- col-lg-12 -->
                            </div><!-- row -->
                        </div><!-- container -->
                    </div><!-- banner-item-tablecell -->
                </div><!-- banner-item-table -->
            </div><!-- end banner-item-wrap -->
        </div><!-- end banner-fluid -->
    </section><!-- end banner-area -->
    <!--================================
        END BANNER AREA
=================================-->

    <!--======================================
        START ABOUT AREA
 ======================================-->
    <section class="about-area about-area4 section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image-box">
                        <span class="about-line-bg"></span>
                        <img src="images/about-img9.jpg" alt="about-img" class="img__item">
                    </div><!-- end image-box -->
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6">
                    <div class="about-item">
                        <div class="section-heading">
                            <h5 class="section__meta">MISSION</h5>
                            <h3 class="section__title">A Better Tailoring Means A Better Outfits</h3>
                        </div><!-- end section-heading -->
                        <div class="section-description">
                            <p class="section__desc">
                                Everything Bespoke was founded on a modern concept in menswear: to provide 
                                custom clothing made from the highest quality fabrics, at a price point that 
                                 delivers the best value in today’s marketplace. <br> <br>
							 
								Our mission is to make the custom process convenient, enjoyable and 
								completely transparent. More than a brand name, Everything Bespoke is our 
								philosophy. You are unique, and your clothes should reflect that. 
								The self-assurance gained from feeling good in what you wear and feeling 
								like yourself is priceless.
                            </p>
                        </div>
                        <a href="about-us.php" class="theme-btn">Know More <span class="la la-caret-right"></span></a>
                    </div><!-- end about-item -->
                </div><!-- end col-lg-6 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>
    <!--======================================
        END ABOUT AREA
======================================-->

    <div class="section-block"></div>

    <!--======================================
        START CARD AREA
======================================-->
    <section class="card-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <div class="section-heading ">
                        <h2 class="section__title">What Sets Us Apart</h2>
                        <div class="section-divider mx-auto"></div>
                    </div>
                </div>
            </div>
            <div class="row card-wrap">
                <div class="col-lg-4">
                    <div class="card-item card-item-8">
                        <div class="card">
                            <div class="card-image">
                                <img src="images/stitching-technology.jpg" class="card-img" alt="Stitching Technology">
                            </div>
                            <div class="card-img-overlay">
                                <h5 class="card-title">
                                    <a href="#" class="card__link">
                                        Technology
                                    </a>
                                </h5>
                                <p class="card-text">
                                    From client orders communication to order management, all the process is based on
                                    information systems, making a streamlined process to both
                                </p>
                                <a href="#" class="theme-btn">read more</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card-item card-item-8">
                        <div class="card">
                            <div class="card-image">
                                <img src="images/quality-control.jpg" class="card-img" alt="Quality Control">
                            </div>
                            <div class="card-img-overlay">
                                <h5 class="card-title">
                                    <a href="#" class="card__link">
                                        Quality Control
                                    </a>
                                </h5>
                                <p class="card-text">
                                    Quality is more often a crucial factor in the success of a business. International
                                    level of high standard is set at Everything Bespoke.
                                </p>
                                <a href="#" class="theme-btn">read more</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card-item card-item-8">
                        <div class="card">
                            <div class="card-image">
                                <img src="images/supply-chain.jpg" class="card-img" alt="Supply Chain">
                            </div>
                            <div class="card-img-overlay">
                                <h5 class="card-title">
                                    <a href="#" class="card__link">
                                        Global Supply Chain
                                    </a>
                                </h5>
                                <p class="card-text">
                                    Tediously working with the best manufacturers of fabrics and raw materials,
                                    Everything Bespoke has earned itself strategic.
                                </p>
                                <a href="#" class="theme-btn">read more</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card-item card-item-8">
                        <div class="card">
                            <div class="card-image">
                                <img src="images/fabric-selection.jpg" class="card-img" alt="Fabric Selection">
                            </div>
                            <div class="card-img-overlay">
                                <h5 class="card-title">
                                    <a href="#" class="card__link">
                                        Fabric Selection
                                    </a>
                                </h5>
                                <p class="card-text">
                                    Everything Bespoke dedication to excellence means there is no compromise when it
                                    comes to quality. We source very best fabrics.
                                </p>
                                <a href="suits-fabric.php" class="theme-btn">read more</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card-item card-item-8">
                        <div class="card">
                            <div class="card-image">
                                <img src="images/garment-option.jpg" class="card-img" alt="Garment Options">
                            </div>
                            <div class="card-img-overlay">
                                <h5 class="card-title">
                                    <a href="#" class="card__link">
                                        Garment Options
                                    </a>
                                </h5>
                                <p class="card-text">
                                    Our product line consists of men's Bespoke suits, formal shirts, casual shirts, pants, overcoats, tuxedo. Our Unparalleled array of styling options.
                                </p>
                                <a href="#" class="theme-btn">read more</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card-item card-item-8">
                        <div class="card">
                            <div class="card-image">
                                <img src="images/customer-support.jpg" class="card-img" alt="Customer Support">
                            </div>
                            <div class="card-img-overlay">
                                <h5 class="card-title">
                                    <a href="#" class="card__link">
                                        Customer Support
                                    </a>
                                </h5>
                                <p class="card-text">
                                    At Everything Bespoke, we believe in sustainable relationships. We consider
                                    ourselves to be partners not merely suppliers - Your Success Is Our Success.
                                </p>
                                <a href="contact-us.php" class="theme-btn">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--======================================
        END CARD AREA
======================================-->

    <div class="section-block"></div>

    <!--======================================
        START INFO AREA 4
======================================-->
    <section class="info-box-area section-padding-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="section-heading text-center">
                        <h5 class="section__meta">Process</h5>
                        <h2 class="section__title">How it Works</h2>
                        <div class="section-divider mx-auto"></div>
                    </div><!-- end section-heading -->
                    <div class="section-description m-0 text-center">
                        <p class="section__desc">
                           We’re dedicated to delivering the priceless feeling of the ideal fit with every garment we create. EVERYTHING BESPOKE gives you access to top tier clothing professionals with an extensive knowledge of fabrics, styles, trends and fit to guide you through every decision as you personalize your look.

                        </p>
                    </div><!-- end section-description -->
                </div><!-- end col-lg-8 -->
            </div><!-- end row -->

            <div class="row">
                <div class="info-box-item info-box-item-4">
                    <div class="info-header">
                        <svg class="infobg__svg" width="180" height="180" viewBox="0 0 600 600"
                            xmlns="http://www.w3.org/2000/svg">
                            <g transform="translate(300,300)">
                                <path
                                    d="M125.6,-88.7C153,-25,158.8,35,134.2,52.8C109.7,70.7,54.8,46.3,9.7,40.8C-35.5,35.2,-71,48.3,-103.2,26.1C-135.4,3.8,-164.3,-53.8,-146.5,-111.9C-128.7,-170,-64.4,-228.5,-7.6,-224.1C49.1,-219.7,98.1,-152.3,125.6,-88.7Z" />
                            </g>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#000"
                            class="bi bi-calendar-check" viewBox="0 0 16 16">
                            <path
                                d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                            <path
                                d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                        </svg>
                    </div>
                    <div class="info-body">
                        <h3 class="info__title">Scheduled Visit </h3>
                        <p class="info__text">
                            Once you booked the appointment, our representative will call you and a time will be reconfirmed. 
                        </p>
                    </div>
                </div>

                <div class="info-box-item info-box-item-4">
                    <div class="info-header">
                        <svg class="infobg__svg" width="180" height="180" viewBox="0 0 600 600"
                            xmlns="http://www.w3.org/2000/svg">
                            <g transform="translate(300,300)">
                                <path
                                    d="M125.6,-88.7C153,-25,158.8,35,134.2,52.8C109.7,70.7,54.8,46.3,9.7,40.8C-35.5,35.2,-71,48.3,-103.2,26.1C-135.4,3.8,-164.3,-53.8,-146.5,-111.9C-128.7,-170,-64.4,-228.5,-7.6,-224.1C49.1,-219.7,98.1,-152.3,125.6,-88.7Z" />
                            </g>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="000" class="bi bi-geo-alt"
                            viewBox="0 0 16 16">
                            <path
                                d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                        </svg>
                    </div>
                    <div class="info-body">
                        <h3 class="info__title">Consultation </h3>
                        <p class="info__text">
                            Everything Bespoke provides exceptional convenience with our style concierge service
                        </p>
                    </div>
                </div>

                <div class="info-box-item info-box-item-4">
                    <div class="info-header">
                        <svg class="infobg__svg" width="180" height="180" viewBox="0 0 600 600"
                            xmlns="http://www.w3.org/2000/svg">
                            <g transform="translate(300,300)">
                                <path
                                    d="M125.6,-88.7C153,-25,158.8,35,134.2,52.8C109.7,70.7,54.8,46.3,9.7,40.8C-35.5,35.2,-71,48.3,-103.2,26.1C-135.4,3.8,-164.3,-53.8,-146.5,-111.9C-128.7,-170,-64.4,-228.5,-7.6,-224.1C49.1,-219.7,98.1,-152.3,125.6,-88.7Z" />
                            </g>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="000"
                            class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                            <path fill-rule="evenodd"
                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                        </svg>
                    </div>
                    <div class="info-body">
                        <h3 class="info__title">Measurements </h3>
                        <p class="info__text">
                            First of all while your booking has been confirmed, our tailor will come to you at the scheduled time
                        </p>
                    </div>
                </div>

                <div class="info-box-item info-box-item-4">
                    <div class="info-header">
                        <svg class="infobg__svg" width="180" height="180" viewBox="0 0 600 600"
                            xmlns="http://www.w3.org/2000/svg">
                            <g transform="translate(300,300)">
                                <path
                                    d="M125.6,-88.7C153,-25,158.8,35,134.2,52.8C109.7,70.7,54.8,46.3,9.7,40.8C-35.5,35.2,-71,48.3,-103.2,26.1C-135.4,3.8,-164.3,-53.8,-146.5,-111.9C-128.7,-170,-64.4,-228.5,-7.6,-224.1C49.1,-219.7,98.1,-152.3,125.6,-88.7Z" />
                            </g>
                        </svg>
                        <img src="images/sewing-machine.png" width="42" height="42" alt="Stitching">
                    </div>
                    <div class="info-body">
                        <h3 class="info__title">Stitch </h3>
                        <p class="info__text">
                            Outfit will be stitched under experts guidance, Exactly as you had ordered with a touch of love. 
                        </p>
                    </div>
                </div>

                <div class="info-box-item info-box-item-4">
                    <div class="info-header">
                        <svg class="infobg__svg" width="180" height="180" viewBox="0 0 600 600"
                            xmlns="http://www.w3.org/2000/svg">
                            <g transform="translate(300,300)">
                                <path
                                    d="M125.6,-88.7C153,-25,158.8,35,134.2,52.8C109.7,70.7,54.8,46.3,9.7,40.8C-35.5,35.2,-71,48.3,-103.2,26.1C-135.4,3.8,-164.3,-53.8,-146.5,-111.9C-128.7,-170,-64.4,-228.5,-7.6,-224.1C49.1,-219.7,98.1,-152.3,125.6,-88.7Z" />
                            </g>
                        </svg>
                        <img src="images/delivery.png" width="42" height="42" alt="Delivery">
                    </div>
                    <div class="info-body">
                        <h3 class="info__title">Deliver</h3>
                        <p class="info__text">
                            Stitching the outfit will be delivered finally at your place, and if there will be any alteration require
                        </p>
                    </div>
                </div>
            </div>
        </div><!-- end container -->
    </section><!-- end info-area -->
    <!--======================================
        END INFO AREA
======================================-->

    <div class="section-block"></div>

    <?php include 'include/testimonial.php' ?>

    <!--======================================
        START GET STARTED AREA
======================================-->
    <section class="get-start-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="get-start-box">
                        <div class="col-lg-8">
                            <div class="section-heading">
                                <h5 class="section__meta">Get in touch</h5>
                                <h2 class="section__title">Do you have any order?</h2>
                                <p class="section__sub">Contact us without any hesitate.</p>
                            </div><!-- end section-heading -->
                        </div><!-- end col-lg-8 -->
                        <div class="col-lg-4">
                            <div class="button-shared text-right">
                                <a href="contact-us.php" class="theme-btn">
                                    contact us <span class="la la-caret-right"></span>
                                </a>
                            </div><!-- end button-shared -->
                        </div><!-- end col-lg-4 -->
                    </div><!-- end get-start-box -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end get-start-area2 -->
    <!--======================================
        END GET STARTED AREA
======================================-->

    <?php include "include/footer.php" ?>

    <!-- theme js files -->
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/magnific-popup.min.js"></script>
    <script src="js/waypoint.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/isotope.js"></script>
    <script src="js/progresscircle.js"></script>
    <script src="js/smooth-scrolling.js"></script>
    <script src="js/particles.min.js"></script>
    <script src="js/particlesRun.js"></script>
    <script src="js/daterangepicker.js"></script>
    <script src="js/tilt.jquery.min.js"></script>
    <script src="js/main.js"></script>

</body>

</php>