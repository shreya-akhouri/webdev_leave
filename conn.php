<?php

define('server','127.0.0.1');
define('username','root');
define('password','');
define('database','lms');

$connection=mysql_connect(server,username,password);

if($connection)
{
	mysql_select_db(database,$connection);
	//echo "Connection Successful!!";
}

?>