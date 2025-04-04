<?php

ob_start();
require_once("../initialize.php");
ini_set('memory_limit', '2048');
global $database;

if(isset($_POST) && isset($_POST['action'])) {

    $action = isset($_POST['action']) ? $_POST['action'] : '';

    if ($action == "articles"){

        $fabric_id = isset($_POST['fabric_id']) ? $_POST['fabric_id'] : '';
        $type_name = isset($_POST['type_name']) ? $_POST['type_name'] : '';

        if (isset($_POST['row'])) {

            $start = $_POST['row'];
            $limit = PAGE_LIMIT;

            $query = "SELECT id article_id,fullname,isactive,image_name FROM tbl_article WHERE isactive = 1 AND fabric_id = '$fabric_id' ORDER BY id LIMIT $start,$limit";
            $result = $database->query($query);

            if ($result->num_rows > 0) {

                $sb = "";
                while ($row = $database->fetch_assoc($result)){

                    $image_name = ARTICLE_URL.$type_name.'/'.$row["image_name"];
                    $fullname = $row["fullname"];

                    $sb .= "<div class='single-portfolio-item col-lg-3 col-sm-6 all'>
                                <div class='portfolio-item' style='background-image: url(".$image_name.");'>
                                    <a href='".$image_name."' data-lightbox='roadtrip' data-lightbox='image-1' data-title='Article # ".$fullname."' class='portfolio-desc'>
                                        <img src='".$image_name."' alt='".$fullname."' />
                                    </a>
                                </div>
                                <div class='article-name'>
                                    <span>Article # ".$fullname."</span>
                                </div>
                            </div>";

                }
                echo trim($sb);
            }
        }

    }

}