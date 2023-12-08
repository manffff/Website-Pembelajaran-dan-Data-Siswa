<?php
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "pwk";

$con = mysqli_connect($host,$user,$pass,$db_name);
if(!$con){
    die ("berhasil konek" . mysqli_connect_error());
}
?>