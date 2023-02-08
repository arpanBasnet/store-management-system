<?php 

//require_once 'php_action/login.php';

//require_once 'php_action/dashboard.php';

// remove all session variables
session_start(); 

// destroy the session 
session_destroy(); 

header('location: index.php');	

?>