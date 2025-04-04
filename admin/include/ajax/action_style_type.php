<?php

ob_start();
require_once("../initialize.php");

if(isset($_POST) && isset($_POST['action'])) {

    if (!isset($_SESSION['user_id'])) {
        echo "111";
        die;
    }

    $action = isset($_POST['action']) ? $_POST['action'] : '';

    if ($action == "get_data"){

        $result = StyleType::find_all();
        header('Content-type: application/json');
        echo json_encode($result);

    }
    else if($action == "get_data_by_id"){

        $FormData = @$_POST;
        $result = StyleType::find_all_by_id($FormData);
        header('Content-type: application/json');
        echo json_encode($result);
    }
    else if($action == "save_data"){

        //print_r($_POST);die;

        $FormData = @$_POST;

        $result = StyleType::save($FormData);

        if ($result > 0){
            echo "000";
        }

    }
    else if($action == "delete_data"){

        $FormData = @$_POST;
        echo $result = StyleType::delete($FormData);
    }
}