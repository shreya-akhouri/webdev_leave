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
	            <a href="#" class="navbar-brand scroll-top">Welcome</a>
        	</div>
        	<!--/.navbar-header-->
	        <div id="main-nav" class="collapse navbar-collapse">
	            <ul class="nav navbar-nav">
		            <li><a href="#" class="scroll-link">Home</a></li>
					<li><a href="admin1.php" class="scroll-link">Executives</a></li>
					<li><a href="admin2.php" class="scroll-link">list</a></li>
					<li><a href="#" class="scroll-link">Holiday List</a></li>
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


$sql="SELECT * FROM app";
$result = $conn->query($sql);

if($result->num_rows > 0)

{
			echo"<br>";
			echo"<br>";
			echo "<table border='4'>";
			echo "<tr>";
			echo "&nbsp<th>Username</th>";
			echo "&nbsp<th>Starting date</th>";
			echo "&nbsp<th>End date</th>";
			echo "&nbsp<th>Number of days</th>";
			echo "&nbsp<th>Type of leave</th>";
			echo "&nbsp<th>Status</th>";
			echo "</tr>";
			echo "<tr>";
	while($row= $result->fetch_assoc())
	{
				echo "<tr>";
				echo "<td>&nbsp" . $row["username"] . "</td>";
				echo "<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" . $row["starting_date"] . "</td>";
				echo "<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" . $row["end_date"] . "</td>";
				echo "<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" . $row["no_of_days"] . "</td>";
				echo "<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" . $row["type_of_leave"] . "</td>";
				echo "<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" . $row["status"] . "</td>";
				echo "</tr>";
	}
				echo"</table>";
}


?>
<a class="btn" href="seventh.php">ADD</a>
</body>
</html>
