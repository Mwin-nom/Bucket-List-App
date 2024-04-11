<?php


$SERVER = "localhost";
$USERNAME = "root";
$PASSWD = "";
$DATABASE = "bucketlist.sql";

$connection = new mysqli($SERVER,$USERNAME,$PASSWD,
$DATABASE) or die ("could not connect database");



//check the connection
if($connection->connect_error){
    die("Connection failed");
}

?>