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
$sd=$_POST["sd"];
$ed=$_POST["ed"];
$l=$_POST["l"];
$nl=$_POST["nl"];
$pisno=$_POST["pisno"];
$sql="INSERT INTO app(username, password, starting_date, end_date, no_of_days, type_of_leave, pisno) VALUES ( '$u', '$p', '$sd', '$ed', '$l', '$nl', '$pisno')";
if(mysqli_query($conn,$sql))

{
	echo"<br>&nbsp  application for leave has been sent. Please check the status on My Applications";
	echo"<br>&nbsp  The details you Entered are :-----";
	echo"<br>Username-", $_POST["u"];
	echo"<br>Password-", $_POST["p"];
	echo"<br><br>starting date-", $_POST["sd"];
	echo"<br>end date-", $_POST["ed"];
	echo"<br><br>Number of days-", $_POST["l"];
	echo"<br>type of leave-", $_POST["nl"];
	echo"<br>PIS number-", $_POST["pisno"];

}
else
{
	echo"error" .$sql . "<br>" . mysqli_error($conn);
}
	if($nl=='cl')
	{
		$sql3="UPDATE stats SET cl=cl-'$l' WHERE $l<12";
		if($conn->query($sql3)=== TRUE)
		{
			echo"<br>";
		}
	}
	if($nl=='el')
	{
		$sql3="UPDATE stats SET el=el-'$l' WHERE $l<30";
		if($conn->query($sql3)=== TRUE)
		{
			echo"<br>";
		}
	}
	if($nl=='hpl')
	{
		$sql3="UPDATE stats SET hpl=hpl-'$l' WHERE $l<15";
		if($conn->query($sql3)=== TRUE)
		{
			echo"<br>";
		}
	}
	if($nl=='ll')
	{
		$sql3="UPDATE stats SET ll=$l";
		if($conn->query($sql3)=== TRUE)
		{
			echo"<br>";
		}
	}
	if($nl=='rh')
	{
		$sql3="UPDATE stats SET rh=rh-'$l' WHERE $l<2";
		if(mysqli_query($conn,$sql3))
		{
			echo"<br>";
		}
	}
$sql2="SELECT * FROM stats WHERE username='$u' AND password='$p' ";
$result = $conn->query($sql2);
echo"<br>&nbsp  Current status after applying for leave :-----";
if($result->num_rows > 0)

{
	while($row= $result->fetch_assoc())
	{

	echo"<br>Username-", $row["username"];
	echo"<br>Password-", $row["password"];
	echo"<br>casual leave-", $row["cl"];
	echo"<br>Earned leave-", $row["el"];
	echo"<br>Half Pay Leave-", $row["hpl"];
	echo"<br>L. Leave-", $row["ll"];
	echo"<br>Restricted Holidays-", $row["rh"];
	echo"<br><br><br>";
	}
}


else
{
	echo"you havent registered yet";
}

?>