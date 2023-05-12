<?php
 
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedincommitteadmin"]) || $_SESSION["loggedincommitteadmin"] !== true){
    header("location: login committeadmin.php");
    exit;
}
?>
