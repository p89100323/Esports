<?php
include("db/dbc.php");
session_start();
// $scourt= $_POST['scourt'];

//$_SESSION['scourt']=$scourt;
if(isset($_POST['scourt']))
         $_SESSION['scourt'] = $_POST['scourt'];
       
	header("Location:selecttime.php");
?>
