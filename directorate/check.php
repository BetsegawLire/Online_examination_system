<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedindirectorate"]) || $_SESSION["loggedindirectorate"] !== true){
    header("location: login directorate.php");
    exit;
}
?>