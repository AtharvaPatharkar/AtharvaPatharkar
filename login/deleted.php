<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loginsystem15";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['bookingId'])) {
    $bookingId = $_POST['bookingId'];

    // Delete the row from the bookings table
    $sql = "DELETE FROM bookings WHERE booking_id = '$bookingId'";

    if ($conn->query($sql) === TRUE) {
        echo "Row deleted successfully";
    } else {
        echo "Error deleting row: " . $conn->error;
    }
}

$conn->close();

header("location: search.php");
?>