<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "users";
$conn = new mysqli($servername, $username, $password, $db_name);
if(conn->connect-error){
    die("Connection failed".$conn->connect-error);
}
echo "Successfull";
?>