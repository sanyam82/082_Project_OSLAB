
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
				<li class="current_page_item"><a href="6.php" accesskey="1" title="">Add Event</a></li>
				<li><a href="5.php" accesskey="2" title="">Events list</a></li>
				<li><a href="index.php" accesskey="5" title="">Logout</a></li>
			</ul>
    </div>
		<div id="form1">
        <form enctype="multipart/form-data" action="chkrequest.php">
        <table align="center">
        <tr>
        <td>Event Name:</td>
        <td><input type="text" align="middle" name="evename" required></td>
        </tr>
        <tr>
        <td>Theme Name:</td>
        <td><input type="text" align="middle" name="thename" required></td>
        </tr>
        <tr>
             <td>Department :</td>
             <td><select id="dept" name="dept"  ><option>MCA</option><option>MBA</option><option>ARCH</option><option>ECE</option><option>CIVIL</option><option>COMPSCI</option><option>META</option><option>PROD</option><option>CHEM</option><option>MECH</option><option>ICE</option><option>EEE</option>
             </select></td></tr>
       
        <tr>
        <td>Date <strong>:</strong>  From</td>
        <td><input type="date" align="middle" name="date_f" required></td><td>to</td><td><input type="date" name="date_t" align="middle" required></td>
        
        </tr>
        <tr>
        <td><input type="file" align="middle" name="poster"></td></tr>
        <tr><td><input type="submit" align="middle" value="Request"></td></tr>
        </table>
         
        </form>
        </div>
        </div>
</div>

</div>

</body>
</html>
