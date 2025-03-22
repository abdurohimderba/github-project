<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school_project";

// create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM students WHERE id=1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Success";
} else {
    echo "No data found";
}
$conn->close();
