<!DOCTYPE html>
<php lang="en">

<head>
    <meta http-equiv="content-type" content="text/php; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>FAQs | Everything Bespoke</title>

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
    <link rel="stylesheet" href="css/daterangepicker.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <link rel="stylesheet" href="css/progresscircle.css">
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

    <?php include "include/header.php" ?>

    <!--================================
         START BREADCRUMB AREA
=================================-->
    <section class="breadcrumb-area section-faqs-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <div class="breadcrumb__titles">
                            <h2 class="breadcrumb__title">FAQs</h2>
                        </div>
                        <ul class="breadcrumb__list">
                            <li class="breadcrumb__list-active"><a href="index.php">Home</a></li>
                            <li>FAQs</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================================
        END BREADCRUMB AREA
=================================-->

    <!-- ================================
       START FAQ AREA
================================= -->
    <section class="accordion-area faq-area bg-color section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading text-center">
                        <h5 class="section__meta">documentation</h5>
                        <h2 class="section__title">Frequently Asked Questions</h2>
                        <div class="section-divider mx-auto"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="accordion-wrap">
                        <div class="accordion" id="accordionExample3">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapseOne" aria-expanded="false"
                                            aria-controls="collapseOne">
                                            <span class="la la-gear"></span> How can I order?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                    data-parent="#accordionExample3">
                                    <div class="card-body">
                                        The easiest way you can order is using our online website, you have 
                                        an option of the cart and when you find the product you needed you 
                                        can add it to the cart then go through the ordering method and once 
                                        your order is finished you may receive an email shortly relating to 
                                        your order outline.
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            <span class="la la-gear"></span> What should I do if the payment is not accepted?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordionExample3">
                                    <div class="card-body">
                                        Please attempt once more in an exceedingly short time. If the payment 
                                        remains not accepted,  please verify your account balance. If everything is 
                                        as it should, but you still can't make the payment, please contact 
                                        <a href="mailto:support@everythingbespoke.pk">support@everythingbespoke.pk</a> 
                                        to notify us about the problem. we are able to manage the order manually.
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            <span class="la la-gear"></span> What information should I input when ordering?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#accordionExample3">
                                    <div class="card-body">
                                        Our online ordering system can evoke all the necessary data you must 
                                        submit. If you've got a VAT number, please remember to submit it. 
                                        this can check that the cargo isn't delayed as a result of the lack 
                                        of VAT number.
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingFour">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapseFour" aria-expanded="false"
                                            aria-controls="collapseFour">
                                            <span class="la la-gear"></span> Can I order the same package again as I've ordered before?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                    data-parent="#accordionExample3">
                                    <div class="card-body">
                                        Yes, you'll be able to create reorders by clicking the “reorder” 
                                        button on any of your previously created orders. once clicking the 
                                        “reorder” button the cart can open and you'll be able to modification 
                                        quantities or products.
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingFive">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapseFive" aria-expanded="false"
                                            aria-controls="collapseFive">
                                            <span class="la la-gear"></span> How to contact customer service?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                    data-parent="#accordionExample3">
                                    <div class="card-body">
                                        If you have any questions regarding our online store 
                                        (ordering, account questions, technical questions), please contact 
                                        <a href="mailto:support@everythingbespoke.pk">support@everythingbespoke.pk</a>.
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingSix">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapseSix" aria-expanded="false"
                                            aria-controls="collapseSix">
                                            <span class="la la-gear"></span> Can I return a product?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                                    data-parent="#accordionExample3">
                                    <div class="card-body">
                                        If you want to return a product, please contact 
                                        <a href="mailto:support@everythingbespoke.pk">support@everythingbespoke.pk</a>.
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingSeven">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapseSeven" aria-expanded="false"
                                            aria-controls="collapseSeven">
                                            <span class="la la-gear"></span> Can I track my order?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven"
                                    data-parent="#accordionExample3">
                                    <div class="card-body">
                                        We will send you the tracking code of the shipment when the parcel has been sent.
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingEight">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapseElight" aria-expanded="false"
                                            aria-controls="collapseElight">
                                            <span class="la la-gear"></span> Shipping time?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseElight" class="collapse" aria-labelledby="headingEight"
                                    data-parent="#accordionExample3">
                                    <div class="card-body">
                                        Shipping time will be confirmed on the order confirmation document.
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingNine">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapseNine" aria-expanded="false"
                                            aria-controls="collapseNine">
                                            <span class="la la-gear"></span> Shipping cost?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseNine" class="collapse" aria-labelledby="headingNine"
                                    data-parent="#accordionExample3">
                                    <div class="card-body">
                                        Shipping price depends on your location and merchandise 
                                        on your order. Some merchandise ought to be shipped in solid. 
                                        These solid shipments have a rather higher shipping fee. 
                                        Our online store shows the shipping fee and shipping value 
                                        mechanically on the checkout.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================================
       END FAQ AREA
================================= -->

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
                                <h5 class="section__meta">#get in touch</h5>
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
    <script src="js/isotope.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/moment.min.js"></script>
    <script src="js/progresscircle.js"></script>
    <script src="js/smooth-scrolling.js"></script>
    <script src="js/daterangepicker.js"></script>
    <script src="js/tilt.jquery.min.js"></script>
    <script src="js/main.js"></script>

</body>

</php>