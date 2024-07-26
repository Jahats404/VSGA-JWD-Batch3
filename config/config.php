<?php 

$server = 'localhost';
$user = 'root';
$password = '';
$db = 'tes';

$conn = mysqli_connect($server, $user, $password, $db);

if (!$conn) {
    die("Gagal terhubung kedatabase: " . mysqli_connect_error());
}
?>