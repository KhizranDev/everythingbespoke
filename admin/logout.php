<?php

ob_start();
require_once("include/initialize.php");
session_destroy();
$session->logout();
redirect_to("index.php");

ob_flush();