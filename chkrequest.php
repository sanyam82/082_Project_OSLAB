<?php
$evename=$_REQUEST["evename"];
$thename=$_REQUEST["thename"];
$dept=$_REQUEST["dept"];
$date_f=$_REQUEST["date_f"];
$date_t=$_REQUEST["date_t"];
$poster=$_REQUEST["poster"];
include("conn.php");
$query1="insert into requests values ('$evename','$thename','$dept','$date_f','$date_t','$poster')";

mysql_query($query1) or die(mysql_error());

header('location:5.php');
?>
