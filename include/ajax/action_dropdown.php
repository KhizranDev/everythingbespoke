<?php

    ob_start();
    require_once("../initialize.php");

    if(isset($_POST) && isset($_POST['action'])) {

        $action = isset($_POST['action']) ? $_POST['action'] : '';

        if ($action == "get_types") {

            $result = Dropdown::find_all_type();
            header('Content-type: application/json');
            echo json_encode($result);

        }else if($action == "get_brand_by_type"){

            $type_id = isset($_POST['type_id']) ? $_POST['type_id'] : '';
            $result = Dropdown::find_all_brand_by_type($type_id);
            header('Content-type: application/json');
            echo json_encode($result);

        }else if($action == "get_fabric_by_brand"){

            $brand_id = isset($_POST['brand_id']) ? $_POST['brand_id'] : '';
            $result = Dropdown::find_all_fabric_by_brand($brand_id);
            header('Content-type: application/json');
            echo json_encode($result);

        }else if($action == "get_article_by_fabric"){

            $fabric_id = isset($_POST['fabric_id']) ? $_POST['fabric_id'] : '';
            $result = Dropdown::find_all_article_by_fabric($fabric_id);
            header('Content-type: application/json');
            echo json_encode($result);

        }else if($action == "get_style_type_by_type"){

            $type_id = isset($_POST['type_id']) ? $_POST['type_id'] : '';
            $result = Dropdown::find_all_style_type_by_type($type_id);
            header('Content-type: application/json');
            echo json_encode($result);

        }else if($action == "get_style_by_style_type"){

            $style_type_id = isset($_POST['style_type_id']) ? $_POST['style_type_id'] : '';
            $result = Dropdown::find_all_style_by_style_type($style_type_id);
            header('Content-type: application/json');
            echo json_encode($result);

        }else if($action == "get_locations"){

            $result = Dropdown::find_all_locations();
            header('Content-type: application/json');
            echo json_encode($result);

        }
    }
