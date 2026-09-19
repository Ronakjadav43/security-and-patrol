<?php
$host = "localhost";
$user = "testsecurity786";
$pass = "B2h#hv80";
$dbname = "aviorcon_security";
$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }
$sql = file_get_contents("database/schema.sql");
if ($conn->multi_query($sql)) {
    echo "Database setup successfully!";
} else {
    echo "Error setting up database: " . $conn->error;
}
$conn->close();
?>
