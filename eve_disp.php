<?php
$conn= mysql_connect("localhost","root","");
$database =mysql_select_db("project",$conn);
if(!$conn)
{
	echo 'connectio failed.....';
	die(mysql_error());
	}
$query="select * from events";
$result=mysql_query($query,$conn) or die(mysql_error());
echo '<table><caption><h2>Events List</h2></caption><tr><td>event name</td><td>event theme</td><td>department</td><td>date from</td><td>date to</td></tr>';
if(($i = mysql_num_rows($result)))
{
	for($j = 0;$j<$i;$j++)
	{
		echo '<tr><td>'.mysql_result($result,$j,"evename").'</td><td>'.mysql_result($result,$j,"thename").'</td><td>'.mysql_result($result,$j,"dept").'</td><td>'.mysql_result($result,$j,"date_f").'</td><td>'.mysql_result($result,$j,"date_t").'</td></tr>';
		}
	}
?>
