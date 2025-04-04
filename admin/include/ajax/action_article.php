<?php

ob_start();
require_once("../initialize.php");
$dirname = ARTICLE_DIR;

if(isset($_POST) && isset($_POST['action'])) {

    if (!isset($_SESSION['user_id'])) {
        echo "111";
        die;
    }

    $action = isset($_POST['action']) ? $_POST['action'] : '';

    if ($action == "get_data"){

        $result = Articles::find_all();
        header('Content-type: application/json');
        echo json_encode($result);

    }
    else if($action == "get_data_by_id"){

        $FormData = @$_POST;
        $result = Articles::find_all_by_id($FormData);
        header('Content-type: application/json');
        echo json_encode($result);
    }
    else if($action == "save_data"){

        //print_r($_POST);die;

        $FormData = @$_POST;

        $dirname = $dirname.strtolower($FormData["ddlTypeName"]);

        $ImageName = "";
        if(isset($_FILES['fileUpload']) && $_FILES['fileUpload']['size'] != 0) {
            //$ImageName = $_FILES["fileUpload"]["name"];

            $temp = explode(".", $_FILES["fileUpload"]["name"]);
            $ImageName = round(microtime(true)) . '.' . end($temp);

            move_uploaded_file($_FILES["fileUpload"]["tmp_name"], "$dirname".DS.$ImageName);
        }

        $result = Articles::save($FormData,$ImageName);

        if ($result > 0){
            echo "000";
        }

    }
    else if($action == "delete_data"){

        $FormData = @$_POST;
        echo $result = Articles::delete($FormData);
    }
}