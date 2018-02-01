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

$sql="CREATE TABLE app (username VARCHAR(30), password VARCHAR(20), starting_date DATE, end_date DATE,no_of_days VARCHAR(2),  type_of_leave VARCHAR(10),  pisno VARCHAR(8), status VARCHAR(20))";
if($conn->query($sql) === TRUE)

{
	echo"table created successfully";

}
else
{
	echo"error" .$conn->error;
}
?>