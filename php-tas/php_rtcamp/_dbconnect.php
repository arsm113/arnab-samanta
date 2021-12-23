<?php
ob_start();
session_start();
$conn=new mysqli('localhost','root','','arnab');
if(mysqli_connect_error())
{
    die ('connection not found'.mysqli_connect_error());

}

error_reporting(0);


 
?>
