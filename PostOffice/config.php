<?php
error_reporting(0);

$dbname = "podb";

$host = "localhost";
$pass = "";
$user="root";


$conn = mysqli_connect($host, $user, $pass,$dbname);
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
