<?php

mysql_connect('localhost','root','');
mysql_select_db('project');	

$q=mysql_query("CREATE TABLE `project`.`qww` ( `sdasdad` DATE NOT NULL , `dvsfsd` VARCHAR(22) NOT NULL ) ENGINE = InnoDB");

if($q)
echo "SUccess";
else
echo mysql_error();
?>