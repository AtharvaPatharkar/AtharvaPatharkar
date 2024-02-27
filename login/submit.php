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

// Retrieve user input
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$hall_I = $_POST['hall_I'];
$date = $_POST['date'];
$start_time = $_POST['start_time'];
$end_time = $_POST['end_time'];
$guests = $_POST['guests'];

// Check if the hall is already booked for the given date
$sql = "SELECT * FROM bookings WHERE hall_I = '$hall_I' AND date = '$date'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Hall is already booked for this date
    header("location: bookexit.php");
} else {
    // Check if the user exists
    $userSql = "SELECT * FROM users WHERE email = '$email'";
    $userResult = $conn->query($userSql);

    if ($userResult->num_rows > 0) {
        // User exists, insert booking
        $insertSql = "INSERT INTO bookings (user_id, name, email, phone, hall_I, date, start_time, end_time, guests)
            VALUES (
                (SELECT user_id FROM users WHERE email = '$email'),
                '$name',
                '$email',
                '$phone',
                '$hall_I',
                '$date',
                '$start_time',
                '$end_time',
                '$guests'
            )";

        if ($conn->query($insertSql) === TRUE) {
            header("location: display.php");
        } else {
            echo "Error: " . $insertSql . "<br>" . $conn->error;
        }
    } else {
        // User does not exist
        echo "User does not exist";
    }
}

$conn->close();
?>
