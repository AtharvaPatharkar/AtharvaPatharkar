<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Marriage Hall Booking System</title>
  <link rel="stylesheet" href="styles.css">
</head>
<style>
  * {
    box-sizing: border-box;
  }

  <style>body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    margin: 0;
    padding: 20px;
    background-image: url('searchimg.jpg');
  }



  #advantages1 nav {
    background-color: #008CBA;
    padding: 10px;
    align-items: top;
    margin: 10px;
  }

  #advantages1 nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
  }

  #advantages1 nav li {
    display: inline-block;
    margin-right: 20px;
  }

  #advantages1 nav a {
    color: white;
    text-decoration: none;
    font-size: 18px;
  }



  h1 {
    color: #333333;
    text-align: center;
  }

  form {
    text-align: center;
    margin-bottom: 20px;
  }

  input[type="text"] {
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 5px;
    width: 300px;
  }

  button[type="submit"] {
    padding: 10px 20px;
    font-size: 16px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }

  button[type="submit"]:hover {
    background-color: #0062cc;
  }

  hr {
    border: none;
    border-top: 1px solid #ccc;
    margin: 20px 0;
  }

  .results {
    max-width: 600px;
    margin: 0 auto;
    background-color: white;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  }

  .results p {
    margin-bottom: 10px;
  }

  .no-results {
    text-align: center;
    color: #333333;
    font-weight: bold;
  }


  .back-button {
    display: block;
    width: 100px;
    margin: 20px auto 0;
    padding: 10px;
    background-color: #008CBA;
    color: white;
    text-align: center;
    text-decoration: none;
    border-radius: 5px;
  }

  .back-button:hover {
    background-color: #00688B;
  }

  /* Define styles for the back button */

  #back-button {
    position: fixed;
    bottom: 20px;
    left: 10%;
    transform: translateX(-50%);
    width: fit-content;
    padding: 10px;
    background-color: #f2f2f2;
  }

  #back-button a {
    text-decoration: none;
  }

  #back-button button {
    padding: 10px 20px;
    margin-right: 10px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    font-weight: bold;
    color: #fff;
    background-color: #007bff;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  #back-button button:hover {
    background-color: #0062cc;
  }

  #back-button button:last-child {
    background-color: #dc3545;
  }

  #back-button button:last-child:hover {
    background-color: #c82333;
  }
</style>

<body
  style="background-image: url('searchimg.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
  <!-- Your HTML content here -->

  <header>
    <div id="advantages1">
      <nav>
        <ul>
          <!--
                    <li><a href="/login/index.php">Home</a></li>
                    <li><a href="/login/nav/aboutus.html">About Us</a></li>
                    <li><a href="/login/nav/services.html">Services</a></li>
                    <li><a href="/login/nav/contactus.html">Contact Us</a></li>
  -->
          <li><a href="/login/Search.php">Search</a></li>
          <li><a href="/login/logout.php">Logout</a></li>
        </ul>
      </nav>

    </div>

  </header>

  <div class="container">
    <h1>Thank you for booking your marriage hall with us!</h1>
    <p>We are pleased to confirm that your booking has been successful. Our team will be in touch soon to confirm the
      details of your booking. If you have any questions in the meantime, please don't hesitate to reach out to us.</p>




    <h1>Search Booking details</h1>

    <form method="POST" action="">
      <input type="text" name="name" placeholder="Name">
      <input type="text" name="email" placeholder="Email">
      <input type="text" name="phone" placeholder="Phone">
      <button type="submit" name="searchNameEmailPhone">Search by Name, Email, and Phone</button>
    </form>
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

    // Check if the search by name, email, and phone form is submitted
    if (isset($_POST['searchNameEmailPhone'])) {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];

      // Query to search for information in the database by name, email, and phone
      $sql = "SELECT * FROM bookings WHERE name = '$name' AND email = '$email' AND phone = '$phone'";

      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        echo '<div class="results">';
        // Display search results
        while ($row = $result->fetch_assoc()) {
          echo "<p><strong>Booking ID:</strong> " . $row['booking_id'] . "</p>";
          echo "<p><strong>Hall ID:</strong> " . $row['hall_I'] . "</p>";
          echo "<p><strong>Name:</strong> " . $row['name'] . "</p>";
          echo "<p><strong>Email:</strong> " . $row['email'] . "</p>";
          echo "<p><strong>Phone:</strong> " . $row['phone'] . "</p>";
          echo "<p><strong>Date:</strong> " . $row['date'] . "</p>";
          echo "<p><strong>Start Time:</strong> " . $row['start_time'] . "</p>";
          echo "<p><strong>End Time:</strong> " . $row['end_time'] . "</p>";
          echo "<p><strong>Guests:</strong> " . $row['guests'] . "</p>";
          echo "<hr>";
        }
        echo '</div>';
      } else {
        echo '<p class="no-results">No results found.</p>';
      }
    }

    $conn->close();
    ?>


    <a href="welcome.php" class="back-button">Back to Form</a>
  </div>

  <div id="back-button">
    <a href="/login/logout.php"><button>Logout</button></a>
    <button onclick="window.history.back();">Back</button>
  </div>


  <script src="script.js"></script>
</body>

</html>