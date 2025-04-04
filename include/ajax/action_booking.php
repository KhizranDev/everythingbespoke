<?php

ob_start();
require_once("../initialize.php");
ini_set('memory_limit', '2048');

if(isset($_POST) && isset($_POST['action'])) {

    $action = isset($_POST['action']) ? $_POST['action'] : '';

    if ($action == "submit_booking") {

        $booking = $_POST["booking"];
        //print_r($_POST['wardrobe']);die;

        foreach($_POST['wardrobe'] as $chk1) {
            $wardrobe .= $chk1.",";
        }

        $wardrobe = rtrim($wardrobe,',');



        $response = Booking::save($booking,$wardrobe);
        //echo $response;die;

        if ($response == "000"){

            $template = file_get_contents(EMAIL_ROOT."book_appointment.html");

            $template = str_replace('{full_name}', $booking["txtFullName"], $template);
            $template = str_replace('{email}', $booking["txtEmail"], $template);
            $template = str_replace('{contact}', $booking["txtNumber"], $template);
            $template = str_replace('{occupation}', $booking["txtOccupation"], $template);
            $template = str_replace('{date}', $booking["dtpDate"], $template);
            $template = str_replace('{time}', $booking["ddlTime"], $template);
            $template = str_replace('{place}', $booking["txtPlace"], $template);
            $template = str_replace('{location}', $booking["ddlLocationName"], $template);
            $template = str_replace('{type}', $booking["ddlTypeName"], $template);
            $template = str_replace('{brand}', $booking["ddlBrandName"], $template);
            /*$template = str_replace('{fabric}', $booking["ddlFabricName"], $template);
            $template = str_replace('{article}', $booking["ddlArticleName"], $template);
            $template = str_replace('{style_type}', $booking["ddlStyleTypeName"], $template);
            $template = str_replace('{style}', $booking["ddlStyleName"], $template);*/
            $template = str_replace('{wardrobe}', $wardrobe, $template);
            $template = str_replace('{notes}', $booking["txtMessage"], $template);
            $template = str_replace('{current_year}', date('Y'), $template);

            echo $is_email = SendEmail($booking["txtEmail"],SUPPORT_EMAIL,"Booking Submit Successfully",$template);
        }

    }


}


