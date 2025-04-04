<?php 

    ob_start();

    require_once "PHPMailer/class.phpmailer.php";

    if (isset($_POST["submit"]))
    {
        $message = "";

        $name = trim($_POST['txtName']);
        $phone = trim($_POST['txtPhone']);
        $email = trim($_POST['txtEmail']);
        $subject = trim($_POST['txtSubject']);
        $message = trim($_POST['txtMessage']);

        $html = "<table>";
        $html .= "  <tr>";
        $html .= "      <td>Name:</td>";
        $html .= "      <td>" . $name . "</td>";
        $html .= "  </tr>";
        
        $html .= "  <tr>";
        $html .= "      <td>Phone:</td>";
        $html .= "      <td>" . $phone . "</td>";
        $html .= "  </tr>";

        $html .= "  <tr>";
        $html .= "      <td>Email:</td>";
        $html .= "      <td>" . $email . "</td>";
        $html .= "  </tr>";
        
        $html .= "  <tr>";
        $html .= "      <td>Subject:</td>";
        $html .= "      <td>" . $subject . "</td>";
        $html .= "  </tr>";

        $html .= "  <tr>";
        $html .= "      <td>Message:</td>";
        $html .= "      <td>" . $message . "</td>";
        $html .= "  </tr>";

        $subject = "Contact - " . $name;

        $to = 'support@everythingbespoke.pk';
        $mail = new PHPMailer;

        //From email address and name
        $mail->From = $email;
        $mail->setFrom("everythingbespoke.pk ", 'Everything Bespoke ' . $subject);

        //To address and name
        $mail->addAddress($to);

        //Send HTML or Plain Text email
        $mail->isHTML(true);

        $mail->Subject = $subject;
        $mail->Body = $html;
        $mail->AltBody = "This is the plain text version of the email content";

        $headers = "From:" . $email;
        $headers .= 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        if ($mail->send())
        {
            echo("<div class='alert alert-success'>Message sent successfully!</div>");
        }
        else
        {
            echo("<div class='alert alert-danger '>Message delivery failed...</div>");
        }
    }

?>


<!DOCTYPE html>
<php lang="en">

<head>
    <meta http-equiv="content-type" content="text/php; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Contact Us | Everything Bespoke</title>

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
    <section class="breadcrumb-area section-contact-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <div class="breadcrumb__titles">
                            <h2 class="breadcrumb__title">Contact Us</h2>
                        </div>
                        <ul class="breadcrumb__list">
                            <li class="breadcrumb__list-active"><a href="index.php">Home</a></li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================================
        END BREADCRUMB AREA
=================================-->

    <section class="contact-area section--padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="section-heading">
                        <p class="section__meta">#get in touch</p>
                        <h2 class="section__title">Need Any Help? Contact us</h2>
                    </div>

                    <div class="contact-form-action contact-form-item">
                        <form id="contactform" name="contactform" action="contact-us.php" method="post">
                            <div class="row clearfix">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" type="text" id="txtName" name="txtName" placeholder="Name" tabindex="1">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" type="email" id="txtEmail" name="txtEmail" placeholder="Email" tabindex="2">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" type="text" id="txtPhone" name="txtPhone" placeholder="Number" tabindex="3">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" type="text" id="txtSubject" name="txtSubject" placeholder="Subject" tabindex="4">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group message-group">
                                        <textarea class="form-control message-control" id="txtMessage" name="txtMessage" placeholder="Message" tabindex="5"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group mb-0">
                                        <button type="submit" name="submit" class="theme-btn">send message <span class="la la-caret-right"></span></button>
                                    </div>
                                </div>

                                <!-- <div class="form-group" style="color: red; position: absolute; right: 40px; bottom: 40px; font-weight: 340; display: none;" id="divError">
									<b>All Fields are Mandatory</b>
								</div> -->
                            </div>
                        </form>
                    </div>
                </div>
            
                <div class="col-lg-5">
                    <div class="row contact-address">
                        <div class="col-lg-12">
                            <div class="contact-card">
                                <p class="contact__text">
                                    <span><i class="la la-phone"></i> +92 309-2817694</span>
                                    <span><i class="la la-envelope-o"></i> <a href="mailto:support@everythingbespoke.pk">support@everythingbespoke.pk</a></span>
                                </p>

                                <div class="footer-social">
                                    <ul>
                                        <li><a href="https://www.facebook.com/EverythingBespoke.pk" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="https://www.instagram.com/everything_bespoke.pk/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="https://www.linkedin.com/company/everythingbespokepakistan/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="https://www.youtube.com/channel/UCR5a9QX6sjmXp-9ZPMy0YOA/featured" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="section-block"></div>

    <!--================================
     START TESTIMONIAL AREA
=================================-->

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

    <script>
    $().ready(function() {

        $("#contactform").on('submit', function() {

            $("#divError").hide();

            var hasError = false;
            var hasFocus = false;

            var name = $("#txtName");
			var phone = $("#txtPhone");
			var email = $("#txtEmail");
            var subject = $("#txtSubject");
            var message = $("#txtMessage");

            if (name.val() == "") {
                name.focus();
                hasFocus = true;
                hasError = true;
            }
			
			if (phone.val() == "") {

                hasError = true;
                if (!hasFocus) {
                    phone.focus();
                    hasFocus = true;
                }
            }
			
			if (email.val() == "") {

                hasError = true;
                if (!hasFocus) {
                    email.focus();
                    hasFocus = true;
                }
            }

            if (subject.val() == "") {

                hasError = true;
                if (!hasFocus) {
                    subject.focus();
                    hasFocus = true;
                }
            }

            if (message.val() == "") {

                hasError = true;
                if (!hasFocus) {
                    message.focus();
                    hasFocus = true;
                }
            }

            if (hasError) {
                $("#divError").show();
                return false;
            }


        });

    });
</script>
    
</body>

</php>