<?php
$con=mysql_connect("localhost","root","");
if(!isset($con))
{die("connection failed");

	}
	mysql_select_db("project",$con);
?>
