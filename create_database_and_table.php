<?php

//----------------------------------------------------------------------------
// Create database
$sql = "CREATE DATABASE program";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

//----------------------------------------------------------------------------
// sql to create table
$sql = "CREATE TABLE Clients (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    echo "Table Clients created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

?>
