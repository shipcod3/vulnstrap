<?php
$con = mysql_connect("server", "user", "pass");
          
    if (!$con)
    {
    	die('Could not connect to the MySQL Server :( ' . mysql_error());
    }
          
    mysql_select_db("vulnex", $con);
?>