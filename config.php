<?php
$con = mysql_connect("localhost", "root", "mysqlroot123");
          
    if (!$con)
    {
    	die('Could not connect to the MySQL Server :( ' . mysql_error());
    }
          
?>
