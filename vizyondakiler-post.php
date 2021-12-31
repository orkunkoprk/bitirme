<?php
require 'inc/config.php';
error_reporting(0);
$servername="localhost";
$username="root";
$password="";
$dbname="ders";
$conn = new mysqli($servername,$username,$password,$dbname);
$new = mysqli_set_charset($conn,"utf8");
if($conn->connect_error){
    die("Bağlantı Hatası: ". $conn->connect_error);

}


$bul = "SELECT * FROM cinema";
$kayit = $conn->query($bul);




?>