<?php

ob_start();
require_once("../initialize.php");
$dirname = BRAND_DIR;

if(isset($_POST) && isset($_POST['action'])) {

    if (!isset($_SESSION['user_id'])) {
        echo "111";
        die;
    }

    $action = isset($_POST['action']) ? $_POST['action'] : '';

    if ($action == "get_data"){

        $result = Brands::find_all();
        header('Content-type: application/json');
        echo json_encode($result);

    }
    else if($action == "save_data"){

        //print_r($_POST);die;

        $FormData = @$_POST;

        $ImageName = "";
        if(isset($_FILES['fileUpload']) && $_FILES['fileUpload']['size'] != 0) {
            $ImageName = $_FILES["fileUpload"]["name"];
            move_uploaded_file($_FILES["fileUpload"]["tmp_name"], "$dirname".DS.$_FILES["fileUpload"]["name"]);
        }

        $result = Brands::save($FormData,$ImageName);

        if ($result > 0){
            echo "000";
        }

    }
    else if($action == "delete_data"){

        $FormData = @$_POST;
        echo $result = Brands::delete($FormData);
    }
}