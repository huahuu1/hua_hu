<?php 
session_start();
$name =  $_SESSION['myname'];

echo $name;
// header('location: index.php');