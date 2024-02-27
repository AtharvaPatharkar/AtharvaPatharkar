<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
  header("location: login.php");
  exit;
}
?>



<!DOCTYPE html>
<html>

<head>
  <title>Reservation Form</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="script.js"></script>
</head>
<style>
  nav {
    background-color: #008CBA;
    padding: 10px;
  }

  nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
  }

  nav li {
    display: inline-block;
    margin-right: 20px;
  }

  nav a {
    color: white;
    text-decoration: none;
    font-size: 18px;
  }


  #frist {
    text-align: center;
    font-size: 50px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;

  }



  /* Style the form container */
  form {
    margin: 50px auto;
    width: 500px;
    padding: 20px;
    border-radius: 10px;
    background-color: #f2f2f2;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
    font-family: Arial, sans-serif;
  }



  label {
    display: block;
    margin-bottom: 10px;
    font-weight: bold;
  }


  /* Style the input fields */
  input[type="text"],
  input[type="email"],
  input[type="tel"],
  input[type="date"],
  input[type="time"],
  input[type="number"] {
    padding: 10px;
    border-radius: 5px;
    border: none;
    box-shadow: inset 0px 0px 5px rgba(0, 0, 0, 0.1);
    width: 100%;
    margin-bottom: 15px;
    font-size: 16px;
  }

  /* Style the submit button */
  input[type="submit"] {
    background-color: #008CBA;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-top: 20px;
    font-size: 16px;
    transition: background-color 0.3s ease;
  }

  /* Change the color of the submit button on hover */
  input[type="submit"]:hover {
    background-color: #005A75;
  }



  /* Style the form header */
  h1 {
    text-align: center;
    font-size: 28px;
    margin-bottom: 30px;
    color: #008CBA;
  }

  /* Style the form subheader */
  h2 {
    font-size: 20px;
    margin-bottom: 15px;
    color: #333;
  }


  footer {
    background-color: #333;
    color: white;
    padding: 10px;
    text-align: center;
  }
</style>
<script>
  function validateForm() {
    var startTime = document.getElementById("start_time").value;
    var endTime = document.getElementById("end_time").value;
    var hallId = document.getElementById("hall_I").value;
    var guests = document.getElementById("guests").value;



    if (startTime >= endTime) {
      alert("End time must be greater than start time.");
      return false;
    }

    if (isNaN(hallId) || hallId < 1 || hallId > 10 || hallId % 1 !== 0) {
      alert("ID must be an integer between 1 and 10.");
      return false;
    }

    if (isNaN(guests) || guests < 1 || guests > 10000 || guests % 1 !== 0) {
      alert("Guests must be an integer between 1 and 10000.");
      return false;
    }


  }
</script>


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




  <p id=frist><?php echo "Your hall Id is " . $_GET['hall_I'] ?></p>


  <form method="POST" action="submit.php" onsubmit="return validateForm()">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="<?php echo $_SESSION['name']; ?>" readonly><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="<?php echo $_SESSION['email']; ?>" readonly><br><br>

    <label for="phone">Phone:</label>
    <input type="tel" id="phone" name="phone" required><br><br>

    <label for="hall_I">Hall ID:</label>
    <input type="text" id="hall_I" name="hall_I" value="<?php echo $_GET['hall_I']; ?>" readonly><br><br>


    <label for="date">Date:</label>
    <input type="date" id="date" name="date" required><br><br>

    <label for="start_time">Start Time:</label>
    <input type="time" id="start_time" name="start_time" required><br><br>

    <label for="end_time">End Time:</label>
    <input type="time" id="end_time" name="end_time" required><br><br>

    <label for="guests">Number of Guests:</label>
    <input type="number" id="guests" name="guests" required><br><br>

    <input type="submit" value="Submit">
  </form>





  <footer>
    <p>© 2023 Marriage Hall Booking System. All Rights Reserved.</p>
  </footer>

</body>

</html>