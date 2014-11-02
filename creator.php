<?php

$server = ""; //Address of your server (example 127.0.0.1)
$user = ""; //User of your database
$password = ""; //Password of your database (if necessary)
$database = ""; //Name of your database

$connection = mysql_connect($server, $user, $password);
mysql_select_db($database, $connection);

@header('Contente-type:text/html; charset=utf-8', 1);

//This is just an example, if you are knowledge into SQL,
//you can do any type of table whatever you want

$sql = "CREATE TABLE `registry` (
     `id` int( 15 ) NOT NULL AUTO_INCREMENT,
     `name` varchar(255) NOT NULL,
     `password` varchar(255) NOT NULL,
     `email` varchar(255) NOT NULL,
     `ip` varchar(255) NOT NULL,
    PRIMARY KEY (`id`)
    ) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;";

echo mysql_query($sql) or die(mysql_error());
echo "Database created successfully!";
?>