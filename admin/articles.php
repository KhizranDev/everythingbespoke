<?php

ob_start();
require_once("include/initialize.php");

global $database;


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

        .ajax-loader {
            visibility: visible;
            /*background-color: rgba(255,255,255,0.7);*/
            position: absolute;
            z-index: +100 !important;
            width: 100%;
            height:100%;
        }

        .ajax-loader img {
            position: absolute;
            top:20%;
            left:42%;
            transform: translate(10px, 10px);
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
                    <h3 class="page-title"> Articles </h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Settings</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Articles</li>
                        </ol>
                    </nav>
                </div>

                <div class="row">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body" style="min-height: 500px;">
                                <h4 class="card-title"><button type="button" class="btn btn-primary btn-fw" id="btnAdd">Add Article</button> </h4>
                                <!--<p class="card-description"> Add class <code>.table</code></p>-->
                                <div class="table-responsive" id="divData">

                                </div>

                                <div class="ajax-loader">
                                    <img src="assets/images/loader-2.gif" width="100" class="img-responsive" />
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
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Add Fabric</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">

                                    <!--<h4 class="card-title">Default form</h4>
                                    <p class="card-description"> Basic form layout </p>-->

                                    <form class="forms-sample" id="frmData" enctype="multipart/form-data">

                                        <div class="form-group">
                                            <label for="ddlType">Service Type</label>
                                            <select class="js-example-basic-single" id="ddlType" name="ddlType" style="width:100%" onchange="document.getElementById('ddlTypeName').value=this.options[this.selectedIndex].text">
                                                <option value="0">Select</option>
                                            </select>
                                            <input type="hidden" name="ddlTypeName" id="ddlTypeName" value="Please select a service" />
                                        </div>

                                        <div class="form-group">
                                            <label for="ddlBrand">Brand</label>
                                            <select class="js-example-basic-single" id="ddlBrand" name="ddlBrand" style="width:100%">
                                                <option value="0">Select</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="ddlFabric">Fabric</label>
                                            <select class="js-example-basic-single" id="ddlFabric" name="ddlFabric" style="width:100%">
                                                <option value="0">Select</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>File upload</label>
                                            <input type="file" class="file-upload-default" id="fileUpload" name="fileUpload">
                                            <div class="input-group col-xs-12">
                                                <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                                                <span class="input-group-append">
                                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                                </span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="txtColorName">Color Name</label>
                                            <input type="text" class="form-control" id="txtColorName" name="txtColorName" placeholder="Color Name">
                                        </div>

                                        <div class="form-group">
                                            <label for="txtArticleName">Article Name</label>
                                            <input type="text" class="form-control" id="txtArticleName" name="txtArticleName" placeholder="Article Name">
                                        </div>

                                        <div class="form-group">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input chkIsActive" id="chkIsActive" name="chkIsActive" checked='checked'> Active <i class="input-helper"></i>
                                                </label>
                                            </div>
                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="btnSave">Save changes</button>
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

<!--https://loading.io/-->

<script>
    $(document).ready(function () {

        GetData()
        GetType(0)
        GetBrand(0,0)
        GetFabric(0,0)

        let DataId = 0;

        $(document).on('click', '#btnAdd', function () {
            Clear()
            $('#ModalForm').modal({ backdrop: 'static', keyboard: false });
            $('#ModalForm').modal('show');
        });

        $(document).on('click', '.btnEdit', function () {

            Clear()

            DataId = this.id

            $.ajax({
                type: "POST",
                url: "include/ajax/action_article.php",
                dataType: "json",
                data: {
                    'dataid'  : DataId,
                    'action'  : 'get_data_by_id'
                }
            }).done(function (data) {

                console.log(data);

                let type = data.TypeId
                let brand = data.BrandId
                let fabric = data.FabricId
                let article = data.FullName
                let color = data.ColorName
                let active = data.IsActive == 1 ? true : false

                $('.chkIsActive').prop('checked', active);

                GetType(type)
                GetBrand(type,brand)
                GetFabric(brand,fabric)

                $("#txtArticleName").val(article)
                $("#txtColorName").val(color)

                $('#ModalForm').modal({ backdrop: 'static', keyboard: false });
                $('#ModalForm').modal('show');

            });

        });

        $(document).on('click', '.btnDelete', function (e) {

            e.preventDefault()

            DataId = this.id

            $.confirm({
                text: "Are you sure you want to delete that?",
                title: "Confirmation required",
                confirm: function (button) {
                    //DeleteData(DataId);
                },
                cancel: function (button) {
                    // nothing to do

                },
                confirmButton: "Yes I am",
                cancelButton: "No",
                post: true,
                confirmButtonClass: "btn-danger",
                cancelButtonClass: "btn-default",
                dialogClass: "modal-dialog delete_confirmation" // Bootstrap classes for large modal
            });
        });

        $(document).on('click', '#btnSave', function () {

            //let booking = $('#frmData').serialize()

            let Form_data = new FormData($('#frmData')[0]);
            Form_data.append('action', 'save_data');
            Form_data.append('dataid', DataId);

            /*for (var pair of Form_data.entries()){
                    console.log(pair[0] + ' - ' + pair[1]);
            }
            return false;*/

            if ($("#txtArticleName").val() == "" || $("#ddlType").val() == 0 || $("#ddlBrand").val() == 0 || $("#ddlFabric").val() == 0){
                return false;
            }

            $("#btnSave").attr('disabled', 'disabled').html('Processing...');

            $.ajax({
                type: "POST",
                url: "include/ajax/action_article.php",
                async: true,
                contentType: false,
                processData: false,
                cache: false,
                data: Form_data,
                success: function(data) {

                    console.log("Response from server: " + data);
                    //alert(data);

                    let SuccessMessage = "Data has been Saved successfully!";

                    $("#btnSave").text('Save changes');

                    if (data === "000"){

                        $.notifyBar({
                            cssClass: "success",
                            html: SuccessMessage,
                            delay: 2000,
                            animationSpeed: "normal"
                        });

                        $('#ModalForm').modal('hide');
                        Clear()

                        GetData()

                    } else if(data === "111"){
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
                        $("#btnSave").removeAttr('disabled');
                    }
                }
            });

        });

        $('#ddlType').on('change', function(e) {
            e.preventDefault()

            $('#ddlFabric').empty();
            $('<option/>', {value: "0", html: "Please select a fabric"}).appendTo('#ddlFabric');

            GetBrand($(this).val(), 0)
        });

        $('#ddlBrand').on('change', function(e) {
            e.preventDefault()
            GetFabric($(this).val(), 0)
        });

    });

    function Clear(){
        $("#txtArticleName").val('')
        $(".file-upload-info").val('')
        $("#txtColorName").val('')
        $("#ddlType").val(0).trigger('change');
        $("#ddlBrand").val(0).trigger('change');
        $("#ddlFabric").val(0).trigger('change');
        $("#btnSave").removeAttr('disabled');
    }

    function GetType(type_id) {

        $.ajax({
            type: "POST",
            url: "../include/ajax/action_dropdown.php",
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
                    html: value["FullName"],
                    selected: value["Id"] == type_id
                }).appendTo('#ddlType');
            });

            if (type_id == 0){
                $("#ddlType").find('option:eq(0)').prop('selected', true);
            }

        }).fail(function (data) {
            //console.log(data);
        }).always(function () {

        });

    }

    function GetBrand(type_id,brand_id) {

        $.ajax({
            type: "POST",
            url: "../include/ajax/action_dropdown.php",
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
                    html: value["FullName"],
                    selected: value["Id"] == brand_id
                }).appendTo('#ddlBrand');
            });

            if (brand_id == 0){
                $("#ddlBrand").find('option:eq(0)').prop('selected', true);
            }


        }).fail(function (data) {
            //console.log(data);
        }).always(function () {

        });

    }

    function GetFabric(brand_id,fabric_id) {

        $.ajax({
            type: "POST",
            url: "../include/ajax/action_dropdown.php",
            dataType: "json",
            data: {
                'action': 'get_fabric_by_brand',
                'brand_id': brand_id
            }
        }).done(function (data) {
            //console.log("get_fabric_by_brand", data);

            $('#ddlFabric').empty();

            $('<option/>', {value: "0", html: "Please select a fabric"}).appendTo('#ddlFabric');

            $.each(data, function (index, value) {

                $('<option/>', {
                    value: value["Id"],
                    html: value["FullName"],
                    selected: value["Id"] == fabric_id
                }).appendTo('#ddlFabric');
            });

            if (fabric_id == 0){
                $("#ddlFabric").find('option:eq(0)').prop('selected', true);
            }


        }).fail(function (data) {
            //console.log(data);
        }).always(function () {

        });

    }

    function GetData(){

        let ArticleDir = "<? echo ARTICLE_URL ?>"

        let _html = "";

        _html += `<table class="table data-table table-bordered">`;
        _html += `    <thead>
                            <tr>
                                <th>ID</th>
                                <th>Service Type</th>
                                <th>Brand Name</th>
                                <th>Fabric Name</th>
                                <th>Article Name</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                          </thead>`;


        $.ajax({
            type: "POST",
            url: "include/ajax/action_article.php",
            dataType: "json",
            data: {
                'action'  : 'get_data'
            },
            cache: false,
            beforeSend : function(){
                $('.ajax-loader').css("visibility", "visible");
            },
            success: function(data){

                //$('#loading-image').hide();

                _html += `    <tbody>`;

                $.each(data, function (index, value) {

                    let type_name = value["TypeName"].toLowerCase()
                    type_name = type_name.toLowerCase();

                    _html += `<tr>
                                <td>${doesFileExist(ArticleDir + type_name + '/' + value["ImageName"])}</td>
                                <td>${value["TypeName"]}</td>
                                <td>${value["BrandName"]}</td>
                                <td>${value["FabricName"]}</td>
                                <td>${value["FullName"]}</td>
                                <td> <img src="${ ArticleDir + type_name + '/' + value["ImageName"] }" alt="${value["FullName"]}" style="width: 150px; height: 80px; border-radius: 0%!important;" /> </td>
                                <td class="center">
                                    <a class="btn btn-info btn-sm btnEdit" id="${value["Id"]}" href="javascript:;">
                                       <i class="mdi mdi-table-edit"></i> Edit
                                    </a>
                                    <a class="btn btn-danger btn-sm btnDelete" href="#" id="${value["Id"]}">
                                        <i class="mdi mdi-playlist-remove"></i> Delete
                                    </a>
                                </td>
                            </tr>`;

                });

                _html += `    </tbody>`;
                _html += `    </table>`;

                $("#divData").html(_html);
                DataTableInit()

            },complete: function(){
                //$('.ajax-loader').css("visibility", "hidden");
            }
        })
    }

    function DeleteData(id){

        $.ajax({
            type: "POST",
            url: "include/ajax/action_fabric.php",
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
            "bLengthChange": false,
            "bFilter": true,
            "bInfo": false,
            "bAutoWidth": false,
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

    const validate = () => {
        let errCount = 0;
        var myForm = document.getElementById("frmData");
        for (var i = 0; i < myForm.elements.length; i++) {

            const name = myForm.elements[i].name
            const type = myForm.elements[i].type

            console.log("name", name)
            console.log("type", type)
            //console.log("value", $(`[name=${name}]`).val())

            if (type === 'text' && $(`[name=${name}]`).val() === '') {
                errCount++;
            }

            if (type === 'select-one' && $(`[name=${name}]`).val() == 0) {
                errCount++;
            }
        }
        return errCount > 0;
    }

    function doesFileExist(urlToFile) {
        console.log(urlToFile)
        var xhr = new XMLHttpRequest();
        xhr.open('HEAD', urlToFile, false);
        xhr.send();
        console.log(xhr.status);

        if (xhr.status == "404") {
            return false;
        } else {
            return true;
        }
    }

</script>

</body>
</html>
