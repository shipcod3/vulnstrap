<?php
include("config.php");

mysql_query("drop database vulnex");

mysql_query("create database vulnex");

mysql_select_db("vulnex", $con);

mysql_query("create table administrator (username varchar(30), password varchar(30))");

mysql_query("insert into administrator values('admin', 'password')");

mysql_query("insert into administrator values('celso', 'celso!@#')");

mysql_query("create table articles (id int, title varchar(50), body varchar(250))");

mysql_query("insert into articles values (1, 'Why We Should Party', 'Coz according to Jolly Mongrel, the most important thing in life is to celebrate it while you are still an air-breathing creature roaming on Mother Earth with fervor, humor and without hesitation.!')");

echo "<script>alert('Vulnstrap is armed and ready!');document.location.href='index.php'</script>";
?>