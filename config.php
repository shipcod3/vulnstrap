<?php
$con = mysql_connect("localhost", "username", "pass");
          
    if (!$con)
    {
    	die('Could not connect to the MySQL Server :( ' . mysql_error());
    }
          
?>
