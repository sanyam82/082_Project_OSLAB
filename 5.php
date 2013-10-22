
<!DOCTYPE html>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />


</head>
<body>
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="menu">
			<ul>
				<li class="current_page_item"><a href="5.php" accesskey="1" title="">Events List</a></li>
				<li><a href="6.php" accesskey="2" title="">Add Event</a></li>
				<li><a href="index.php" accesskey="5" title="">Logout</a></li>
			</ul>
    </div>
		<div id="logo">
			<h1><a href="#">Ongoing Events In Campus</a></h1>
			<span><span style="color:black">Explore</span> be a part of every event</span></div>
	</div>
</div>
<div id="wrapper1">
	<div id="welcome" class="container">
		<div class="title">
			<h2>Events List		</h2>
		</div>
		<div class="content">
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
echo '<table align="center" border="2px"><tr><td>Event name</td><td>Theme</td><td>department</td><td>date from</td><td>date to</td></tr>';
if(($i = mysql_num_rows($result)))
{
	for($j = 0;$j<$i;$j++)
	{
		echo '<tr><td>'.mysql_result($result,$j,"evename").'</td><td>'.mysql_result($result,$j,"thename").'</td><td>'.mysql_result($result,$j,"dept").'</td><td>'.mysql_result($result,$j,"date_f").'</td><td>'.mysql_result($result,$j,"date_t").'</td></tr>';
		}
	}
?>
			
	</div>
</div>

	</div>
</div>

</body>
</html>
