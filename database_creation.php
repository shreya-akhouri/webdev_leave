<?php
define('server','127.0.0.1');
define('username','root');
define('password','');


//connection
$conn=new mysqli(server, username, password);
if($conn->connect_error)
{
	die("connection failed:" .$conn->connect_error);
}

$sql="CREATE DATABASE leavx;";
if($conn->query($sql))===TRUE)
{
	echo"database created successfully";
}
else
{
	echo"error creating database:" .$conn->error;
}
?>