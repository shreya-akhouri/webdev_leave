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
<div class="body">
		<div class="content">
			<div id="section">
				<br><br><br>
			
				<form action="eigth.php" method="post">
					
					<br><center><strong>User Id:&nbsp&nbsp&nbsp&nbsp</strong>
					<input type="text" name="u" id="u"><br><br></center>
					<br>
					<center><input type="submit" name="submit" id="send" value="submit"></center>
				</form>
			
			</div>
		</div>
	</div>
</body>
</html>
