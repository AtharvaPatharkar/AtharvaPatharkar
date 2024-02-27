<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loginsystem15";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if (mysqli_query($conn, $sql)) {
    echo "";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

// Select database
mysqli_select_db($conn, $dbname);

// Create table users
$sql = "CREATE TABLE IF NOT EXISTS users (
    user_id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    dt DATETIME(6) NOT NULL
)";

if (mysqli_query($conn, $sql)) {
    echo "";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

// Create table halls
$sql = "CREATE TABLE IF NOT EXISTS halls (
    hall_I INT(11) PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    description VARCHAR(255) NOT NULL,
    address VARCHAR(255) NOT NULL,
    contact_email VARCHAR(100) NOT NULL
)";

if (mysqli_query($conn, $sql)) {
    echo "Table created successfully<br>";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

// Insert rows into halls (ignore duplicate entries)
$sql = "INSERT IGNORE INTO halls (hall_I, name, price, description, address, contact_email) VALUES
    (1, 'The Grand Jalsa', 85000.0, '500 guest arrangement in marriage ceremony with all facilities', 'Akola city, Akola', 'contact@hall1.com'),
    (2, 'Maharaja Lawn', 975000.0, '700 guest arrangement in marriage ceremony with all facilities.', '456 Broad St, Akola', 'contact@hall2.com'),
    (3, 'Tushar Celebrations', 100000.0, '1000 guest arrangement in marriage ceremony with all facilities.', 'Dabki road, Akola', 'contact@hall3.com'),
    (4, 'City Sports Club', 120000.0, '1500 guest arrangement in marriage ceremony with all facilities.', '321 Oak St, Akola', 'contact@hall4.com'),
    (5, 'Mathura Lawn', 700000.0, '800 guest arrangement in marriage ceremony with all facilities.', 'Main Mr, Akola', 'contact@hall5.com'),
    (6, 'Harsh Mangalam, Amravati', 850000.0, '1000 guest arrangement in marriage ceremony with premium facilities.', '789 Main St,Akola', 'contact@hall6.com'),
    (7, 'Meherkripa Resort', 500000.0, '500 guest arrangement in marriage ceremony with basic facilities.', 'Jay sq, Akola', 'contact@hall7.com'),
    (8, 'The Prime Park Hotel', 100000, '400 guest arrangement in marriage ceremony with limited facilities.', 'Dabki road, Akola', 'contact@hall8.com'),
    (9, 'Shri Krishna Mangal Parisar', 950000.0, '1200 guest arrangement in marriage ceremony with premium facilities and catering services.', '789 Cherry St, Alola', 'contact@hall9.com'),
    (10, 'Shri Sanai Lawns', 600000.0, '600 guest arrangement in marriage ceremony with basic facilities and decoration.', '123 Pine St, Akola', 'contact@hall10.com')";

if (mysqli_query($conn, $sql)) {
    echo "Rows inserted into halls table successfully<br>";
} else {
    echo "Error inserting rows into halls table: " . mysqli_error($conn);
}

// Create table bookings
$sql = "CREATE TABLE IF NOT EXISTS bookings (
    booking_id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    hall_I INT(11) NOT NULL,
    user_id INT(11) NOT NULL,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    date DATE NOT NULL,
    start_time TIME NOT NULL,
    end_time TIME NOT NULL,
    guests INT(11) NOT NULL,
    FOREIGN KEY (hall_I) REFERENCES halls(hall_I),
    FOREIGN KEY (user_id) REFERENCES users(user_id)
)";

if (mysqli_query($conn, $sql)) {
    echo "Table created successfully<br>";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

header("location: login.php");

?>
