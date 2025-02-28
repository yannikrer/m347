<?php
$servername = "practical_boyd";  // WICHTIG: Name des Containers, nicht "localhost"
$username = "root";
$password = "rootpassword";
$database = "mydatabase";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
}

$sql = "select Host, User from mysql.user;";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){
        echo($row["Host"] . " / " . $row["User"] . "<br />");
}
//var_dump($result);
?>

