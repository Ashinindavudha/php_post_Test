<?php 
require_once('config.php'); //copy to ---


    // sql to create table
$sql = "CREATE TABLE images (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
image VARCHAR(225) NOT NULL,
image_text text NOT NULL,
post_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Table employees created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();

 ?>