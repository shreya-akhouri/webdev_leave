<html>
<head>
<title>
leave management system</title>
<link rel="stylesheet" href="css/bootstrap.min.css" />

<style type="text/css">
* {
	margin: 0;
	padding: 0;
	font-family: 'Helvetica Neue', arial, sans-serif;
}
.header {
	position: fixed;
	width: 100%;
	background: #222;
	z-index: 10;
}
.header .navbar-brand {
	font-weight: 900;
}
.header .navbar {
	margin: 0;
	border: none;
}



@media (min-width: 768px) {
	.header .navbar-brand {
		padding-left: 0;
	}
	.navbar-nav {
		float: right;
	}
}

</style>
</head>
<body>
<div class="header">
	<div class="container">
		<nav class="navbar navbar-inverse" role="navigation">
        	<div class="navbar-header">
	            <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
		            <span class="sr-only"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
	            </button>
	            <a href="#" class="navbar-brand scroll-top">CCL</a>
        	</div>
        	<!--/.navbar-header-->
	        <div id="main-nav" class="collapse navbar-collapse">
	            <ul class="nav navbar-nav">
		            <li><a href="#" class="scroll-link">Home</a></li>
					<li><a href="next.php" class="scroll-link">My Application</a></li>
					<li><a href="fourth.php" class="scroll-link">Apply for leave</a></li>
	            </ul>
	        </div>
	        <!--/.navbar-collapse-->
	    </nav>
	    <!--/.navbar-->
	</div>
	<!--/.container-->
</div>
<?php
define('server','127.0.0.1');
define('username','root');
define('password','');
define('dbname','leav');

//connection
$conn=new mysqli(server, username, password, dbname);
if($conn->connect_error)
{
	die("connection failed:" .$conn->connect_error);
}
$u=$_POST["u"];
$p=$_POST["p"];

$sql="SELECT * FROM stats WHERE username='$u' AND password='$p' ";
$result = $conn->query($sql);
echo"<br>&nbsp  The details you Entered are :-----";
if($result->num_rows > 0)

{
	while($row= $result->fetch_assoc())
	{
	echo"<br><br>";
	echo"<center><br><b>Username-</b>", $row["username"],"</center>";

	echo"<center><br><b>casual leave-</b>", $row["cl"],"</center>";
	echo"<center><br><b>Earned leave-</b>", $row["el"],"</center>";
	echo"<center><br><b>Half Pay Leave-</b>", $row["hpl"],"</center>";
	echo"<center><br><b>L. Leave-</b>", $row["ll"],"</center>";
	echo"<center><br><b>Restricted Holidays-</b>", $row["rh"],"</center>";
	echo"<br><br><br>";
	}
}


else
{
	echo"<br>Casual leave-12";
	echo"<br>earned leave-30";
	echo"<br>Half Pay Leave-15";
	echo"<br>leav leave-";
	echo"<br>Restricted Holidays-2";
}
?>