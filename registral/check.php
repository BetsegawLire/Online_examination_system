<?php
 
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedinregistral"]) || $_SESSION["loggedinregistral"] !== true){
    header("location: login registral.php");
    exit;
}
?>
