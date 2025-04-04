<?php

ob_start();
require_once("../initialize.php");

if(isset($_POST) && isset($_POST['action'])) {

    if (!isset($_SESSION['user_id'])) {
        echo "111";
        die;
    }

    $action = isset($_POST['action']) ? $_POST['action'] : '';
    $id     = isset($_POST['id']) ? $_POST['id'] : '';

    if ($action == "get_data"){

        $result = Bookings::find_all();
        header('Content-type: application/json');
        echo json_encode($result);

    }else if ($action == "get_details"){

        $result = Bookings::find_all_by_id($id);
        header('Content-type: application/json');
        echo json_encode($result);

    }

}