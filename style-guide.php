<?php
    ob_start();

    require_once("include/initialize.php");

    global $database;

    $type_id = 0;
    if (isset($_GET['id'])){

        $type_id = $_GET['id'];

        $sql = "SELECT id,fullname FROM tbl_type WHERE isactive = 1 AND id = '$type_id'";
        $result = $database->query($sql);
        $row = $database->fetch_array($result);
        $type_name = $row["fullname"];

        $sql = "SELECT s.id style_type_id,s.fullname,s.isactive, (SELECT a.image_name FROM tbl_style a WHERE a.style_type_id = s.id AND a.isactive = 1 LIMIT 1) image_name
                FROM tbl_style_type s WHERE s.isactive = 1 AND s.type_id = '$type_id'";
        $result = $database->query($sql);

    }else{
        redirect_to("index.php");
    }
?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="content-type" content="text/php; charset=utf-8">
        <meta name="author" content="TechyDevs">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title><? echo $type_name ?> Guide | Everything Bespoke</title>

        <!-- Favicon -->
        <link rel="icon" sizes="16x16" href="images/favicon.png">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">

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

        <link rel="stylesheet" href="css/lightbox/lightbox.min.css">
        <link rel="stylesheet" href="css/fabric.css">
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
    <section class="breadcrumb-area section-about-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <div class="breadcrumb__titles">
                            <h2 class="breadcrumb__title"><? echo $type_name ?> Guide</h2>
                        </div>
                        <ul class="breadcrumb__list">
                            <li class="breadcrumb__list-active"><a href="index.php">Home</a></li>
                            <li><? echo $type_name ?> Guide</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================================
            END BREADCRUMB AREA
    =================================-->

    <section class="portfolio-area portfolio-area3 portfolio-area5 section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 portfolio-wrap">
                    <div class="row portfolio-list">

                        <? while ($row = $database->fetch_assoc($result)){ ?>
                            <? $image_name = STYLE_URL.strtolower($type_name).'/'.$row["image_name"]; ?>

                            <div class="single-portfolio-item col-lg-3 col-sm-6 all">
                                <div class="portfolio-item" style='background-image: url("<?php echo $image_name; ?>");'>
                                    <a href="style-guide-list.php?id=<?php echo $row["style_type_id"]; ?>" class="portfolio-desc">
                                        <img src="<?php echo $image_name; ?>" alt="<?php echo $row["fullname"]; ?>" />
                                    </a>
                                </div>
                                <div class="category-name">
                                    <span><?php echo $row["fullname"]; ?></span>
                                </div>
                                <br>
                            </div>

                        <? } ?>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="section-block"></div>

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

    <script src="js/lightbox/lightbox.min.js"></script>

    </body>

</html>
