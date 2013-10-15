<?php
$id = $_REQUEST["id"];
$pass = $_REQUEST["pass"];
include("conn.php");
$rs = mysql_query("select * from login where id='$id' and pass='$pass'");
if($row = mysql_fetch_array($rs)){
	header('Location: form4.php');
	}else{
		header('Location: index.php?m=invalid username/password');
		}
?>