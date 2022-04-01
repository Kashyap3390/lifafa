<?php
$host="Enter server host name";
$user="Enter username ";
$pass="Enter password";
$db="Enter database name";



/*$host = "localhost";
$user = "root";
$pass = "";
$db = "lifafa";
*/

// set a secret code to access admin panel pls dont share this code to anyone be care full thanks...
$secret_code = "Enter secret code";

$conn= mysqli_connect($host,$user,$pass,$db);

if($conn){
//echo'<script>alert("Connection ok")</script>';
}
else{
		echo'<script>alert("Connection not ok")</script>';
}
 ?>