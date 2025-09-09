<?php
// $server='admin-login.php';
$database='tevhrsolutions';
$host='localhost';
$user='root';
$password='';
$conn=mysqli_connect($host,$user,$password,$database);
if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}
$server=basename($_SERVER['PHP_SELF']);
?>