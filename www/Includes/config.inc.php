<?php


// requirements
require_once('Libs/Smarty/Smarty.class.php');
require_once('Libs/PHPMailer/PHPMailerAutoload.php');
require("classes.inc.php");
require("constants.inc.php");
require("functions.inc.php");

// enable sessions
session_start();

$page = explode("/", $_SERVER["PHP_SELF"])[1];


if ($page != "index.php") {

    redirect("/");

}

?>
