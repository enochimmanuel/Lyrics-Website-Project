<?php

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "lybraryloginsys";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connecion Failed: ".mysqli_connect_error());
}