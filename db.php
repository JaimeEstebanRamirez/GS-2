<?php
/* Database connection settings */
$host = 'webappgroupswitzerland-mysqldbserver.mysql.database.azure.com';
$user = 'mysqldbuser@webappgroupswitzerland-mysqldbserver';
$pass = '@Italy2018';
$db = 'gsdb2';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
