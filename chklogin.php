<?php
$user=$_REQUEST["user"];
$pass=$_REQUEST["pass"];
include("conn.php");
$rs=mysql_query("select * from login where user='$user' and pass='$pass'");
header('location:5.php');
?>
