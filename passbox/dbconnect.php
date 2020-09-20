<?php 
$server="localhost";
$username="root";
$password="";
$db="passbox";

/*MAKING DATABASE CONNECTION */
$conn=mysqli_connect($server,$username,$password,$db);
if(!$conn){
    die("ERROR". mysqli_connect_error());
}




?>