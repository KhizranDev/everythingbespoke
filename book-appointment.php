<?php

    ob_start();
?>


<!DOCTYPE html>
<php lang="en">

<head>
    <meta http-equiv="content-type" content="text/php; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Book Appointment | Everything Bespoke</title>

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
    <link href='js/notification/css/jquery.notifyBar.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <style>
        .select2-selection__rendered {
            line-height: 35px !important;
        }
        .select2-container .select2-selection--single {
            height: 50px !important;
        }
        .select2-selection__arrow {
            height: 50px !important;
        }
        .select2-selection__rendered{
            margin-top: 7px;
            margin-left: 15px;
        }

        p.parsley-success {
            color: #468847;
            background-color: #DFF0D8;
            border: 1px solid #D6E9C6; }

        p.parsley-error {
            color: #B94A48;
            background-color: #F2DEDE;
            border: 1px solid #EED3D7; }

        ul.parsley-errors-list {
            list-style: none;
            color: #e74c3c;
            padding-left: 0; }

        input.parsley-error, textarea.parsley-error, select.parsley-error {
            background: #FAEDEC;
            border: 1px solid #E85445;
        }

        input.parsley-error:focus, textarea.parsley-error:focus, select.parsley-error:focus {
            background: #FAEDEC;
            border: 1px solid #E85445;
        }

        .select2-hidden-accessible.parsley-error ~ ul ~ .select2-container--default .select2-selection--single {
            border-color: #f34943 !important;
        }

        .select2-hidden-accessible.parsley-success ~ ul ~ .select2-container--default .select2-selection--single {
            border-color: #31ce77 !important;
        }

        .validation-class{
            background-color: #fe3030;
            color: white;
        }

    </style>

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
                            <h2 class="breadcrumb__title">Book An Appointment</h2>
                        </div>
                        <ul class="breadcrumb__list">
                            <li class="breadcrumb__list-active"><a href="index.php">Home</a></li>
                            <li>Book An Appointment</li>
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
       START CONTACT AREA
================================= -->
    <section class="contact-area section--padding">
        <div class="container">
            <div class="row">
			
			<div class="col-lg-2">
			</div>
			
                <div class="col-lg-8">
                    <div class="contact-form-action contact-form-item">
                        <form method="post" action="#" id="frmBooking" data-parsley-validate="true">
                            <div class="row">

                                <div class="col-lg-12">

                                    <div class="form-group">
                                        <label for="txtFullName">Name </label>
                                        <input class="form-control" type="text" id="txtFullName" placeholder = "Please enter your full name" name="txtFullName"
                                               required data-parsley-pattern="^[a-zA-Z ]+$">
                                    </div>

                                    <div class="form-group">
                                        <label for="txtNumber">Phone Number</label>
                                        <input class="form-control" type="text" id="txtNumber" placeholder = "Please enter your phone number" name="txtNumber">
                                    </div>

                                    <div class="form-group">
                                        <label for="txtEmail">Occupation</label>
                                        <input class="form-control" type="text" id="txtOccupation" placeholder = "Please enter your occupation" name="txtOccupation">
                                    </div>

                                    <div class="form-group">
                                        <label for="txtEmail">Email</label>
                                        <input class="form-control" type="email" id="txtEmail" placeholder = "Please enter your email address" name="txtEmail">
                                    </div>

                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="dtpDate">Date of Visit</label>
                                        <input class="form-control" type="date" id="dtpDate" name="dtpDate" placeholder="DD-MMM-YYYY" value="" min="1997-01-01" max="2030-12-31" pattern="\d{4}-\d{2}-\d{2}">
									</div>
								</div>
								 
								<div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="txtNumber">Time of Visit</label>
                                        <select class="form-control js-example-basic-single" id="ddlTime" name="ddlTime" placeholder="DD-MMM-YYYY">
                                            <option value="10:00 AM - 11:00 AM"> 10:00 AM - 11:00 AM </option>
                                            <option value="11:00 AM - 12:00 PM"> 11:00 AM - 12:00 PM </option>
                                            <option value="12:00 PM - 01:00 PM"> 12:00 PM - 01:00 PM </option>
                                            <option value="01:00 PM - 02:00 PM"> 01:00 PM - 02:00 PM </option>
                                            <option value="02:00 PM - 03:00 PM"> 02:00 PM - 03:00 PM </option>
                                            <option value="03:00 PM - 04:00 PM"> 03:00 PM - 04:00 PM </option>
                                            <option value="04:00 PM - 05:00 PM"> 04:00 PM - 05:00 PM </option>
                                            <option value="05:00 PM - 06:00 PM"> 05:00 PM - 06:00 PM</option>
                                            <option value="06:00 PM - 07:00 PM"> 06:00 PM - 07:00 PM</option>
                                            <option value="07:00 PM - 08:00 PM"> 07:00 PM - 08:00 PM</option>
                                            <option value="08:00 PM - 09:00 PM"> 08:00 PM - 09:00 PM</option>
                                        </select>
                                    </div>
								</div>
								
								<div class="col-lg-12">
									<div class="form-group">
										<label for="ddlLocation">Location</label>
										<select class="form-control js-example-basic-single" id="ddlLocation" name="ddlLocation" onchange="document.getElementById('ddlLocationName').value=this.options[this.selectedIndex].text"
                                                data-parsley-required="true" data-parsley-min="1" data-parsley-error-message="Kindly select Location">
											<option value="0">Please select a location</option>
										</select>
                                        <!--<ul class="parsley-errors-list filled myproperlabel"><li class="parsley-custom-error-message locations">Kindly select Location</li></ul>-->
										<input type="hidden" name="ddlLocationName" id="ddlLocationName" value="" />
									</div>
								</div>
									
								<div class="col-lg-12">
									<div class="form-group">
										<label for="txtFullName">Address</label>
										<input class="form-control" type="text" id="txtPlace" placeholder = "If choosing home or office, please enter your address in the field." name="txtPlace">
									</div>
								</div>
                                

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="ddlType">What are you interested in?</label>
                                        <select class="form-control js-example-basic-single" id="ddlType" name="ddlType" onchange="document.getElementById('ddlTypeName').value=this.options[this.selectedIndex].text">
                                            <option value="0">Please select a service</option>
                                        </select>
                                        <input type="hidden" name="ddlTypeName" id="ddlTypeName" value="Please select a service" />
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="ddlBrand">Brands</label>
                                        <select class="form-control js-example-basic-single" id="ddlBrand" name="ddlBrand" onchange="document.getElementById('ddlBrandName').value=this.options[this.selectedIndex].text">
                                            <option value="0">Please select a brand</option>
                                        </select>
                                        <input type="hidden" name="ddlBrandName" id="ddlBrandName" value="" />
                                    </div>
                                </div>

                                <br /><br />

                                <div class="col-lg-12">

                                    <div class="form-group">

                                        <label for="chkWardrobe">Do you prefer to build a ? </label> <br />

                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="chkWardrobe[]" value="Business Wardrobe">
                                            <label>Business Wardrobe</label>
                                        </label>
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="chkWardrobe[]" value="Casual Wardrobe">
                                            <label>Casual Wardrobe</label>
                                        </label>
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="chkWardrobe[]" value="Wedding Wardrobe">
                                            <label>Wedding Wardrobe</label>
                                        </label>

                                        <input type="hidden" name="chkWardrobeSave" id="chkWardrobeSave" value="" />

                                    </div>

                                </div>

                                <!--<div class="col-lg-6" style="display: none;">
                                    <div class="form-group">
                                        <label for="ddlFabric">Fabrics</label>
                                        <select class="form-control js-example-basic-single" id="ddlFabric" name="ddlFabric" onchange="document.getElementById('ddlFabricName').value=this.options[this.selectedIndex].text">
                                            <option value="0">Please select a Fabrics</option>
                                        </select>
                                        <input type="hidden" name="ddlFabricName" id="ddlFabricName" value="" />
                                    </div>
                                </div>

                                <div class="col-lg-6" style="display: none;">
                                    <div class="form-group">
                                        <label for="ddlArticle">Articles</label>
                                        <select class="form-control js-example-basic-single" id="ddlArticle" name="ddlArticle" onchange="document.getElementById('ddlArticleName').value=this.options[this.selectedIndex].text">
                                            <option value="0">Please select a article</option>
                                        </select>
                                        <input type="hidden" name="ddlArticleName" id="ddlArticleName" value="" />
                                    </div>
                                </div>

                                <div class="col-lg-12" style="display: none;">
                                    <div class="form-group">
                                        <label for="ddlStyle">Style Type</label>
                                        <select class="form-control js-example-basic-single" id="ddlStyleType" name="ddlStyleType" onchange="document.getElementById('ddlStyleTypeName').value=this.options[this.selectedIndex].text">
                                            <option value="0">Please select a style type</option>
                                        </select>
                                        <input type="hidden" name="ddlStyleTypeName" id="ddlStyleTypeName" value="" />
                                    </div>

                                </div>

                                <div class="col-lg-12" style="display: none;">
                                    <div class="form-group">
                                        <label for="ddlStyle">Style</label>
                                        <select class="form-control js-example-basic-single" id="ddlStyle" name="ddlStyle" onchange="document.getElementById('ddlStyleName').value=this.options[this.selectedIndex].text">
                                            <option value="0">Please select a style</option>
                                        </select>
                                        <input type="hidden" name="ddlStyleName" id="ddlStyleName" value="" />
                                    </div>

                                </div>-->

                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea class="form-control" rows="8" id="txtMessage" name="txtMessage" placeholder="Please mention here your more requirements and details" maxlength="500"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <button type="button" id="btnSubmit" name="submit" class="theme-btn btn-book-appointment">Submit Your Booking
                                            <span class="la la-caret-right"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
				
			<div class="col-lg-2">
			</div>
				
            </div>
        </div>
    </section>
    <!-- ================================
       END CONTACT AREA
================================= -->

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
    <!-- Notify Bar Js -->
    <script src="js/notification/jquery.notifyBar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <!-- Parsley -->
    <!--<script src="js/parsleyjs/dist/parsley.min.js"></script>
    <script src="js/parsleyjs/src/parsley.css"></script>-->

    <script>

        $().ready(function() {

            $('.js-example-basic-single').select2();

            GetType()
            GetLocation()

            $(document).on('change', '#ddlType', function () {
                GetBrand($(this).val())
                GetStyleType($(this).val())
                GetStyle($(this).val())
                GetFabric($('#ddlBrand').val())
                GetArticle($('#ddlFabric').val())
            });

            $(document).on('change', '#ddlBrand', function () {
                GetFabric($(this).val())
            });

            $(document).on('change', '#ddlFabric', function () {
                GetArticle($(this).val())
            });

            $(document).on('change', '#ddlStyleType', function () {
                GetStyle($(this).val())
            });

            $(document).on('click', '#btnSubmit', function () {

                let booking = $('#frmBooking').serializeFormJSON();
                /*console.log(booking);
                return false;*/
                //alert($('#frmBooking').parsley().validate())

                //$('#frmBooking').parsley().validate()
                var myCheckboxes = new Array();
                $("input:checked").each(function() {
                    myCheckboxes.push($(this).val());
                });
                //$("#chkWardrobeSave").val(myCheckboxes);

                //console.log(myCheckboxes);
                //return false;

                if (validate()){

                    $.notifyBar({
                        cssClass: "validation-class",
                        html: "All fields are mandatory and required",
                        delay: 2000,
                        animationSpeed: "normal"
                    });

                    return false;
                }

                $('#btnSubmit').addClass('disabled');
                $('#btnSubmit').text('Process....');

                $.ajax({
                    type: "POST",
                    url: "include/ajax/action_booking.php",
                    data: {
                        action: "submit_booking",
                        booking: booking,
                        wardrobe: myCheckboxes
                    },
                    success: function(data) {

                        console.log("Response from server: " + data);
                        //alert(data);

                        let SuccessMessage = "Appointment has been booked successfully!";

                        $('#btnSubmit').removeClass('disabled');
                        $('#btnSubmit').text('Submit Your Booking');

                        if (data === "000"){

                            $.notifyBar({
                                cssClass: "success",
                                html: SuccessMessage,
                                delay: 2000,
                                animationSpeed: "normal"
                            });

                            setTimeout(function () { window.location.reload() }, 3000);

                        }else{
                            $.notifyBar({
                                cssClass: "error",
                                html: "Appointment booking failed, Kindly try again...",
                                delay: 2000,
                                animationSpeed: "normal"
                            });
                        }
                    }
                });

            });

        });

        (function ($) {
            $.fn.serializeFormJSON = function () {

                var o = {};
                var a = this.serializeArray();
                $.each(a, function () {
                    if (o[this.name]) {
                        if (!o[this.name].push) {
                            o[this.name] = [o[this.name]];
                        }
                        o[this.name].push(this.value || '');
                    } else {
                        o[this.name] = this.value || '';
                    }
                });
                return o;
            };
        })(jQuery);

        const validate = () => {
            let errCount = 0;
            var myForm = document.getElementById("frmBooking");
            for (var i = 0; i < myForm.elements.length; i++) {

                const name = myForm.elements[i].name
                const type = myForm.elements[i].type

                //console.log("name", name)
                //console.log("type", type)
                //console.log("value", $(`[name=${name}]`).val())

                if (type === 'text' && $(`[name=${name}]`).val() === '' && name != "txtId") {
                    errCount++;
                }

                if (type === 'select-one' && $(`[name=${name}]`).val() == 0) {
                    errCount++;
                }
            }

            return errCount > 0;
        }

        function GetType() {

            $.ajax({
                type: "POST",
                url: "include/ajax/action_dropdown.php",
                dataType: "json",
                data: {
                    'action': 'get_types'
                }
            }).done(function (data) {
                //console.log("get_types", data);

                $('#ddlType').empty();

                $('<option/>', {value: "0", html: "Please select a service"}).appendTo('#ddlType');

                $.each(data, function (index, value) {

                    $('<option/>', {
                        value: value["Id"],
                        html: value["FullName"]
                    }).appendTo('#ddlType');
                });

                $("#ddlType").find('option:eq(0)').prop('selected', true);


            }).fail(function (data) {
                //console.log(data);
            }).always(function () {

            });

        }

        function GetBrand(type_id) {

            $.ajax({
                type: "POST",
                url: "include/ajax/action_dropdown.php",
                dataType: "json",
                data: {
                    'action': 'get_brand_by_type',
                    'type_id': type_id
                }
            }).done(function (data) {
                //console.log("get_brand_by_type", data);

                $('#ddlBrand').empty();

                $('<option/>', {value: "0", html: "Please select a brand"}).appendTo('#ddlBrand');

                $.each(data, function (index, value) {

                    $('<option/>', {
                        value: value["Id"],
                        html: value["FullName"]
                    }).appendTo('#ddlBrand');
                });

                $("#ddlBrand").find('option:eq(0)').prop('selected', true);


            }).fail(function (data) {
                //console.log(data);
            }).always(function () {

            });

        }

        function GetFabric(brand_id) {

            $.ajax({
                type: "POST",
                url: "include/ajax/action_dropdown.php",
                dataType: "json",
                data: {
                    'action': 'get_fabric_by_brand',
                    'brand_id': brand_id
                }
            }).done(function (data) {
                //console.log("get_fabric_by_brand", data);

                $('#ddlFabric').empty();

                $('<option/>', {value: "0", html: "Please select a Fabrics"}).appendTo('#ddlFabric');

                $.each(data, function (index, value) {

                    $('<option/>', {
                        value: value["Id"],
                        html: value["FullName"]
                    }).appendTo('#ddlFabric');
                });

                $("#ddlFabric").find('option:eq(0)').prop('selected', true);


            }).fail(function (data) {
                //console.log(data);
            }).always(function () {

            });

        }

        function GetArticle(fabric_id) {

            $.ajax({
                type: "POST",
                url: "include/ajax/action_dropdown.php",
                dataType: "json",
                data: {
                    'action': 'get_article_by_fabric',
                    'fabric_id': fabric_id
                }
            }).done(function (data) {
                //console.log("get_article_by_fabric", data);

                $('#ddlArticle').empty();

                $('<option/>', {value: "0", html: "Please select a article"}).appendTo('#ddlArticle');

                $.each(data, function (index, value) {

                    $('<option/>', {
                        value: value["Id"],
                        html: value["FullName"]
                    }).appendTo('#ddlArticle');
                });

                $("#ddlArticle").find('option:eq(0)').prop('selected', true);


            }).fail(function (data) {
                //console.log(data);
            }).always(function () {

            });

        }

        function GetStyleType(type_id) {

            $.ajax({
                type: "POST",
                url: "include/ajax/action_dropdown.php",
                dataType: "json",
                data: {
                    'action': 'get_style_type_by_type',
                    'type_id': type_id
                }
            }).done(function (data) {
                //console.log("get_style_type_by_type", data);

                $('#ddlStyleType').empty();

                $('<option/>', {value: "0", html: "Please select a style type"}).appendTo('#ddlStyleType');

                $.each(data, function (index, value) {

                    $('<option/>', {
                        value: value["Id"],
                        html: value["FullName"]
                    }).appendTo('#ddlStyleType');
                });

                $("#ddlStyleType").find('option:eq(0)').prop('selected', true);


            }).fail(function (data) {
                //console.log(data);
            }).always(function () {

            });

        }

        function GetStyle(style_type_id) {

            $.ajax({
                type: "POST",
                url: "include/ajax/action_dropdown.php",
                dataType: "json",
                data: {
                    'action': 'get_style_by_style_type',
                    'style_type_id': style_type_id
                }
            }).done(function (data) {
                //console.log("get_style_by_style_type", data);

                $('#ddlStyle').empty();

                $('<option/>', {value: "0", html: "Please select a style"}).appendTo('#ddlStyle');

                $.each(data, function (index, value) {

                    $('<option/>', {
                        value: value["Id"],
                        html: value["FullName"]
                    }).appendTo('#ddlStyle');
                });

                $("#ddlStyle").find('option:eq(0)').prop('selected', true);


            }).fail(function (data) {
                //console.log(data);
            }).always(function () {

            });

        }

        function GetLocation() {

            $.ajax({
                type: "POST",
                url: "include/ajax/action_dropdown.php",
                dataType: "json",
                data: {
                    'action': 'get_locations'
                }
            }).done(function (data) {
                //console.log("get_locations", data);

                $('#ddlLocation').empty();

                $('<option/>', {value: "0", html: "Select"}).appendTo('#ddlLocation');

                $.each(data, function (index, value) {

                    $('<option/>', {
                        value: value["Id"],
                        html: value["FullName"]
                    }).appendTo('#ddlLocation');
                });

                $("#ddlLocation").find('option:eq(0)').prop('selected', true);


            }).fail(function (data) {
                //console.log(data);
            }).always(function () {

            });

        }

    </script>

</body>

