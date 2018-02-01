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

$sql="CREATE TABLE new (name VARCHAR(50), department VARCHAR(50), username VARCHAR(30), password VARCHAR(20))";
if($conn->query($sql) === TRUE)

{
	echo"table created successfully";

}
else
{
	echo"error" .$conn->error;
}
?>