<?php

ob_start();
require_once("include/initialize.php");

global $database;


/*echo $password = base64_encode(hash('sha1', "1234"));
die;*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><? echo PROJECT_NAME ?> Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->

    <link rel="stylesheet" href="assets/vendors/datatable/jquery.dataTables.min.css">

    <link rel="stylesheet" href="assets/vendors/select2/select2.min.css">
    <link rel="stylesheet" href="assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">

    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->

    <link rel="stylesheet" href="assets/vendors/notification/css/jquery.notifyBar.css">

    <link rel="shortcut icon" href="assets/images/favicon.png"/>

    <style>
        .btnEdit, .btnDelete{
            line-height: 2;
        }
        .close{
            display: none;
        }
        .td-sample {
            max-width: 100px;
            text-overflow: ellipsis;
            white-space: pre-wrap;
            overflow: hidden;
        }
        .dataTables_filter {
            margin-top: 26px;
        }
    </style>

</head>
<body>

<div class="container-scroller">

    <!-- sidebar start -->
    <? include 'include/layout/sidebar.php' ?>
    <!-- sidebar ends -->

    <!-- page-body-wrapper start -->
    <div class="container-fluid page-body-wrapper">

        <!-- navbar start -->
        <? include 'include/layout/navbar.php' ?>
        <!-- navbar ends -->

        <!-- main-panel start -->

        <div class="main-panel">

            <!-- content-wrapper start -->
            <div class="content-wrapper">
                <div class="page-header">
                    <h3 class="page-title"> Appointment </h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <!--<li class="breadcrumb-item"><a href="#">Settings</a></li>-->
                            <li class="breadcrumb-item active" aria-current="page">Appointment</li>
                        </ol>
                    </nav>
                </div>
                <div class="row">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <!--<h4 class="card-title"><button type="button" class="btn btn-primary btn-fw" id="btnAdd">Add Style</button> </h4>-->
                                <!--<p class="card-description"> Add class <code>.table</code></p>-->
                                <div class="table-responsive" id="divData">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->

            <!-- footer start -->
            <? include 'include/layout/footer.php' ?>
            <!-- footer ends -->

        </div>

        <!-- main-panel ends -->

    </div>
    <!-- page-body-wrapper ends -->


    <div class="modal fade" id="ModalForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Booking Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 grid-margin stretch-card">

                            <div class="card">
                                <div class="card-body">

                                    <table class="table table-bordered">
                                      <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Type Name</th>
                                            <th>Brand Name</th>
                                            <th>Schedule Date</th>
                                            <th>Time</th>
                                            <th>Wardrobe</th>
                                        </tr>
                                     </thead>

                                        <tbody id="divDetails">

                                        </tbody>

                                    </table>


                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 grid-margin stretch-card">

                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Schedule Place</h4>
                                    <p id="pPlace"> that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution </p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 grid-margin stretch-card">

                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Message</h4>
                                    <p id="pMessage"> that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution </p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- plugins:js -->
<script src="assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->


<!-- inject:js -->
<script src="assets/js/off-canvas.js"></script>
<script src="assets/js/hoverable-collapse.js"></script>
<script src="assets/js/misc.js"></script>
<script src="assets/js/settings.js"></script>
<script src="assets/js/todolist.js"></script>
<!-- endinject -->


<script src="assets/vendors/datatable/jquery.dataTables.min.js"></script>
<script src="assets/vendors/select2/select2.min.js"></script>

<script src="assets/js/file-upload.js"></script>
<script src="assets/js/typeahead.js"></script>
<script src="assets/js/select2.js"></script>
<script src="assets/vendors/notification/jquery.notifyBar.js"></script>
<script src="assets/vendors/confirm/jquery.confirm.js"></script>

<script>

    let id = 0;

    $(document).ready(function () {

        GetData()

        $(document).on('click', '.btnDetails', function () {
            id = this.id;
            GetDetails();
        });

    });

    function GetData(){

        $.ajax({
            type: "POST",
            url: "include/ajax/action_booking.php",
            dataType: "json",
            data: {
                'action'  : 'get_data'
            }
        }).done(function (data) {

            //console.log(data);

            let _html = "";

            _html += `<table class="table data-table table-bordered">`;
            _html += `    <thead>
                            <tr>
                                <th>ID</th>
                                <th>Full Name</th>
                                <th>Number</th>
                                <th>Occupation</th>
                                <th>Email</th>
                                <th>Datetime</th>
                            </tr>
                          </thead>`;


            _html += `    <tbody>`;

            $.each(data, function (index, value) {

                _html += ` <tr class="btnDetails" style="cursor: pointer;" title="Click here to details" id="${value["Id"]}">
                            <td>${value["Id"]}</td>
                            <td>${value["FullName"]}</td>
                            <td>${value["Number"]}</td>
                            <td>${value["Occupation"]}</td>
                            <td>${value["Email"]}</td>
                            <td>${value["BookingDatetime"]}</td>
                          </tr> `;
            });

            _html += `    </tbody>`;
            _html += `    </table>`;

            $("#divData").fadeIn().html(_html);
            DataTableInit()

        });
    }

    function GetDetails(){

        let _html = "";

        $.ajax({
            type: "POST",
            url: "include/ajax/action_booking.php",
            dataType: "json",
            data: {
                'id'      : id,
                'action'  : 'get_details'
            },
            cache: false,
            beforeSend : function(){
                //$('.ajax-loader').css("visibility", "visible");
            },
            success: function(data){

                //console.log(data)
                _html += `<tr>
                    <td>${data["Id"]}</td>
                    <td>${data["TypeName"]}</td>
                    <td>${data["BrandName"]}</td>
                    <td>${data["ScheduleDate"]}</td>
                    <td>${data["ScheduleTime"]}</td>
                    <td>${data["Wardrobe"]}</td>
                </tr>`;

                $("#divDetails").html(_html);

                $("#pPlace").html(data["SchedulePlace"]);
                $("#pMessage").html(data["Message"]);

            },complete: function(){
                //$('.ajax-loader').css("visibility", "hidden");
                $('#ModalForm').modal({ backdrop: 'static', keyboard: false });
                $('#ModalForm').modal('show');
            }
        })
    }

    function DeleteData(id){

        $.ajax({
            type: "POST",
            url: "include/ajax/action_brand.php",
            data: {
                'dataid'  : id,
                'action'  : 'delete_data'
            }
        }).done(function (data) {
            console.log(data);

            if (data == "000"){

                $.notifyBar({
                    cssClass: "success",
                    html: "Data deleted successfully..!",
                    delay: 2000,
                    animationSpeed: "normal"
                });
                GetData()
            }
            else if(data === "111"){
                $.notifyBar({
                    cssClass: "warning",
                    html: "Session expired kindly login again..!",
                    delay: 2000,
                    animationSpeed: "normal"
                });
            }
            else{
                $.notifyBar({
                    cssClass: "error",
                    html: "Something went wrong, try again later..!",
                    delay: 2000,
                    animationSpeed: "normal"
                });
            }
        });

    }

    function DataTableInit(){
        $('.data-table').dataTable({
            "destroy": true,
            "bPaginate": true,
            "bLengthChange": true,
            "bFilter": true,
            "bInfo": true,
            "bAutoWidth": true,
            "order": [[ 0, "desc" ]],
            "ordering": false
        });
    }

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

</script>

</body>
</html>
