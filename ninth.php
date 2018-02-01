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
$n=$_POST["n"];
$d=$_POST["d"];
$u=$_POST["u"];
$p=$_POST["p"];
$cl=12;
$el=30;
$hpl=15;
$ll=0;
$rh=2;
$sql="INSERT INTO new(name, department, username, password) VALUES ('$n', '$d', '$u', '$p')";
if(mysqli_query($conn,$sql))

{
	echo"<br>&nbsp  The details you Entered are :-----";
	echo"<br><br>Name-", $_POST["n"];
	echo"<br>Department-", $_POST["d"];
	echo"<br>Username-", $_POST["u"];
	echo"<br>Password-", $_POST["p"];
}
else
{
	echo"error" .$sql . "<br>" . mysqli_error($conn);
}
$sql2="INSERT INTO stats(username, password, cl, el, hpl, ll, rh) VALUES ('$u', '$p', '$cl', '$el', '$hpl', '$ll', '$rh')";
if(mysqli_query($conn,$sql2))
{
	echo"<br>data save";
}
else
{
	echo"error" .$sql2 . "<br>" . mysqli_error($conn);
}
?>