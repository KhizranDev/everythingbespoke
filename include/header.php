<?php
    ob_start();
    session_start();
    require_once("initialize.php");
    //$page_name = basename($_SERVER['REQUEST_URI']);

    global $database;

    $sql1 = "SELECT id,fullname,isactive FROM tbl_type WHERE isactive = 1";
    $row1 = $database->get_object_for_json($sql1);
    //$json = json_encode($row1);

    /*foreach($row1 as $item) { //foreach element in $arr
        echo $uses = $item['fullname']; //etc
    }
    die;*/
?>

<section class="header-menu-area">
    <div class="header-menu-fluid">
        <div class="container">
            <div class="row align-items-center menu-content">
                <div class="col-lg-3">
                    <div class="logo-box">
                        <a href="index.php" class="logo" title="Everything Bespoke">
                            <img src="images/logo-header.jpg" width="100%" alt="Everything Bespoke">
                        </a>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="menu-wrapper">
                        <nav class="main-menu">
                            <ul>
                                <li><a href="how-it-works.php">How it Works</a></li>
                                <li>
                                    <a href="#">Services</a>
                                    <ul class="dropdown-menu-item">
										<li><a href="suits.php">Suits</a></li>
										<li><a href="formal-shirts.php">Formal Shirts</a></li>
										<li><a href="casual-shirts.php">Casual Shirts</a></li>
										<li><a href="wedding.php">Wedding</a></li>
										<li><a href="retail-solutions.php">Retail Solutions</a></li>
										<li><a href="the-travelling-tailor-service.php">The Travelling Tailor Service</a></li>
                                     </ul>
                                </li>

                                <!--<li><a href="catalogue.php">Catalogue</a></li>-->

                                <li>
                                    <a href="#">Catalogue</a>
                                    <ul class="dropdown-menu-item">
                                        <? foreach($row1 as $item){ ?>
                                            <li><a href="catalogues.php?id=<? echo $item["id"] ?>"><? echo $item["fullname"] ?></a></li>
                                        <? } ?>
                                    </ul>
                                </li>


                                <li>
                                    <a href="#">Fabrics</a>
                                    <ul class="dropdown-menu-item">
                                        <? foreach($row1 as $item){ ?>
                                            <li><a href="brands.php?id=<? echo $item["id"] ?>"><? echo $item["fullname"] ?></a></li>
                                        <? } ?>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Style Guide</a>
                                    <ul class="dropdown-menu-item">
                                        <? foreach($row1 as $item){ ?>
                                            <li><a href="style-guide.php?id=<? echo $item["id"] ?>"><? echo $item["fullname"] ?></a></li>
                                        <? } ?>
                                    </ul>
                                </li>
								
								<li><a href="studio.php">Studio</a></li>
                                
                            </ul>
                        </nav>

                        <div class="logo-right-button">
                            <ul>
                                <li class="button-box">
                                    <a href="book-appointment.php" class="theme-btn">Book an Appointment
                                        <span class="la la-angle-right btn-icon"></span>
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
									
									<li class="sidenav__item"><a href="how-it-works.php">How It Works</a></li>
                                    
									<li class="sidenav__item">
                                        <a href="#">Services</a>
                                        <span class="menu-plus-icon"></span>
                                        <ul class="side-sub-menu">
                                            <li><a href="suits.php">Suits</a></li>
											<li><a href="formal-shirts.php">Formal Shirts</a></li>
											<li><a href="casual-shirts.php">Casual Shirts</a></li>
											<li><a href="wedding.php">Wedding</a></li>
											<li><a href="retail-solutions.php">Retail Solutions</a></li>
											<li><a href="the-travelling-tailor-service.php">The Travelling Tailor Service</a></li>
                                        </ul>
                                    </li>
                                    
									<!--<li class="sidenav__item"><a href="catalogue.php">Catalogue</a></li>-->

                                    <li class="sidenav__item">
                                        <a href="#">Catalogue</a>
                                        <span class="menu-plus-icon"></span>
                                        <ul class="side-sub-menu">
                                            <? foreach($row1 as $item){ ?>
                                                <li><a href="catalogues.php?id=<? echo $item["id"] ?>"><? echo $item["fullname"] ?></a></li>
                                            <? } ?>
                                        </ul>
                                    </li>

									<li class="sidenav__item">
                                        <a href="#">Fabrics</a>
                                        <span class="menu-plus-icon"></span>
                                        <ul class="side-sub-menu">
                                            <? foreach($row1 as $item){ ?>
                                                <li><a href="brands.php?id=<? echo $item["id"] ?>"><? echo $item["fullname"] ?></a></li>
                                            <? } ?>
                                        </ul>
                                    </li>
                                    
									<li class="sidenav__item">
                                        <a href="#">Style Guide</a>
                                        <span class="menu-plus-icon"></span>
                                        <ul class="side-sub-menu">
                                            <? foreach($row1 as $item){ ?>
                                                <li><a href="style-guide.php?id=<? echo $item["id"] ?>"><? echo $item["fullname"] ?></a></li>
                                            <? } ?>
                                        </ul>
                                    </li>
                                    <li class="sidenav__item"><a href="studio.php">Studio</a></li>
                                </ul>
                                <div class="side-btn-box">
                                    <a href="book-appointment.php" class="theme-btn">
                                        Book An Appointment <span class="la la-caret-right"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>