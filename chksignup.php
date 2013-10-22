<?php
$fname=$_REQUEST["fname"];
$lname=$_REQUEST["lname"];
$rollno=$_REQUEST["rollno"];
$dept=$_REQUEST["dept"];
$user=$_REQUEST["user"];
$pass=$_REQUEST["pass"];
include("conn.php");
$query1="insert into signup values ('$fname','$lname','$rollno','$dept','$user','$pass')";
$query2="insert into login values ('$user','$pass')";
mysql_query($query1) or die(mysql_error());
mysql_query($query2) or die(mysql_error());
header('location:5.php');
?>
