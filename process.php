<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get the recognized text from the POST request
$text = $_POST["text"];

// Insert the text into a table named "speech"
$sql = "INSERT INTO speech (text) VALUES ('$text')";
if ($conn->query($sql) === TRUE) {
  echo "Record inserted successfully";
} else {
  echo "Error inserting record: " . $conn->error;
}

$conn->close();
?>