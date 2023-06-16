<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "web_project";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
