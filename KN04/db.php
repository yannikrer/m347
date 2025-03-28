<?php
$host = 'm347-kn04a-db';
$user = 'root';
$pass = 'rootpassword';
$db = 'mydatabase';
 
$conn = new mysqli($host, $user, $pass, $db);
 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
$sql = "select Host, User from mysql.user;";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){
    echo("<li>" . $row["Host"] . " / " . $row["User"] . "</li>");
}
?>