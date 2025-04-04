<?php

ob_start();
require_once("../initialize.php");

if(isset($_POST) && isset($_POST['action'])) {

    $action = isset($_POST['action']) ? $_POST['action'] : '';

    if ($action == "login"){

        $username = trim($_POST['user_id']);
        $password = trim($_POST['password']);
        $password= encrypt_decrypt("encrypt","$password");
        //echo $password;die;
        // Check database to see if username/password exist.
        $found_user = UserLogin::authenticate($username, $password);
        //print_r($found_user);die;

        if ($found_user) {

            $session->login($found_user);
            //print_r($session->login($found_user));die;
            //print_r($found_user);die;

            $_SESSION['user_id'] = $found_user->email;
            $_SESSION['user_type'] = $found_user->login_type;
            $_SESSION['login_id'] = $found_user->id;
            $_SESSION['user_name'] = $found_user->full_name;

            //print_r($_SESSION);die;

            $sql = "UPDATE tbl_users SET last_login = NOW() WHERE id = '".$found_user->id."'";
            $database->query($sql);

            //log_action('Login', "{$found_user->username} logged in.");
            //echo $_SESSION['role_id'];die;

            //redirect_to("dashboard.php");

            echo "000";

        } else {
            echo "111";
        }

    }
}