<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
  header("location: login.php");
  exit;
}

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    integrity="sha384-jU7Tj2zW26nl+1cTcWw+jScs1P6/VatdXKieXW9Ine/cKTaHS/uZsM6dXyMOe9jt" crossorigin="anonymous">
  <title>Welcome</title>

  <style type="text/css">
    body {
      font-family: Arial, sans-serif;
      font-size: 14px;
      background-image: url('welcomeimg.jpg');
      background-position: center;
      background-repeat: repeat;
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

    .container {
      margin-top: 20px;
    }

    .alert {
      background-color: #f8f9fa;
      border-color: #d1d3e2;
      color: #5e6e8e;
    }



    .table {
      margin: 20px auto;
      width: 100%;
      border-collapse: collapse;
      text-align: left;
      background-color: #fff;
    }

    .table th,
    .table td {
      border: 1px solid #ddd;
      text-align: left;
      padding: 8px;
    }

    .table th {
      background-color: #f9f9f9;
      font-weight: bold;
      color: #333;
      text-align: center;
    }

    .table td {
      color: #666;
    }

    .table img {
      max-width: 100%;
      height: auto;
      align-items: center;
    }

    .table .action {
      text-align: center;
    }

    .table .action a {
      display: inline-block;
      background-color: #28a745;
      color: white;
      padding: 8px 16px;
      text-decoration: none;
      border-radius: 4px;
    }

    table tbody tr:nth-child(odd) {
      background-color: #ECF0F1;
    }

    table tbody tr:nth-child(even) {
      background-color: #FFFFFF;
    }

    table td.action {
      position: relative;
    }

    table td.action a {
      display: block;
      position: absolute;
      top: 0;
      left: 0;
      text-align: center;
      color: #FFFFFF;
      background-color: #3498DB;
      text-decoration: none;
      padding: 8px;
    }

    table td.action a:hover {
      background-color: #2980B9;
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

    .hall-image {
      width: 200px;
      height: 200px;
    }
  </style>
</head>

<body>
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
  <div>
    <div class="alert alert-success" role="alert">
      <h4 class="alert-heading">Welcome -
        <?php echo $_SESSION['name'] ?>
      </h4>
      <p>One of the key advantages of a marriage hall booking system is that it streamlines the entire booking process,
        making it more efficient and convenient for both venue owners and customers. Instead of having to call or visit
        each venue individually to inquire about availability and pricing, customers can simply search for venues using
        the booking system's interface and book them in real-time.</p>

      <p>Additionally, marriage hall booking systems often come with features that help users manage their bookings,
        such as automated confirmation emails, payment processing, and calendar integrations. This helps to ensure that
        all parties involved in the booking process are on the same page and that everything runs smoothly on the day of
        the event.</p>

      <p>Overall, a marriage hall booking system can be a valuable tool for both customers and venue owners looking to
        streamline their operations and make the booking process more efficient and convenient.</p>

      <hr>

      <table class="table">
        <thead>
          <tr>
            <th>Hall id</th>
            <th>Picture</th>
            <th>Name</th>
            <th>Price</th>
            <th>Description</th>
            <th>Address</th>
            <th>Contact Us</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td><img src="img/1.jpeg" class="hall-image"></td>
            <td>The Grand Jalsa</td>
            <td>85000.0</td>
            <td>500 guest arrangement in marriage ceremony with all facilities.</td>
            <td>Akola city, Akola</td>
            <td>contact@hall1.com</td>
            <td class="action"><a href="book.php?hall_I=1">Book Now</a></td>
          </tr>
          <tr>
            <td>2</td>
            <td><img src="img/2.jpeg" class="hall-image"></td>
            <td>Maharaja Lawn</td>
            <td>975000.0</td>
            <td>700 guest arrangement in marriage ceremony with all facilities.</td>
            <td>456 Broad St, Akola</td>
            <td>contact@hall2.com</td>
            <td class="action"><a href="book.php?hall_I=2">Book Now</a></td>
          </tr>
          <tr>
            <td>3</td>
            <td><img src="img/3.jpg" class="hall-image"></td>
            <td>Tushar Celebrations</td>
            <td>100000.0</td>
            <td>1000 guest arrangement in marriage ceremony with all facilities.</td>
            <td>Dabki road, Akola</td>
            <td>contact@hall3.com</td>
            <td class="action"><a href="book.php?hall_I=3">Book Now</a></td>
          </tr>
          <tr>
            <td>4</td>
            <td><img src="img/4.jpg" class="hall-image"></td>
            <td>City Sports Club</td>
            <td>120000.0</td>
            <td>1500 guest arrangement in marriage ceremony with all facilities.</td>
            <td>321 Oak St, Akola</td>
            <td>contact@hall4.com</td>
            <td class="action"><a href="book.php?hall_I=4">Book Now</a></td>
          </tr>
          <tr>
            <td>5</td>
            <td><img src="img/5.jpg" class="hall-image"></td>
            <td>Mathura Lawn</td>
            <td>700000.0</td>
            <td>800 guest arrangement in marriage ceremony with all facilities.</td>
            <td>Main Mr, Akola</td>
            <td>contact@hall5.com</td>
            <td class="action"><a href="book.php?hall_I=5">Book Now</a></td>
          </tr>
          <tr>
            <td>6</td>
            <td><img src="img/6.jpg" class="hall-image"></td>
            <td>Harsh Mangalam, Amravati</td>
            <td>850000.0</td>
            <td>1000 guest arrangement in marriage ceremony with premium facilities.</td>
            <td>789 Main St,Akola</td>
            <td>contact@hall6.com</td>
            <td class="action"><a href="book.php?hall_I=6">Book Now</a></td>
          </tr>
          <tr>
            <td>7</td>
            <td><img src="img/7.jpg" class="hall-image"></td>
            <td>Meherkripa Resort</td>
            <td>500000.0</td>
            <td>500 guest arrangement in marriage ceremony with basic facilities.</td>
            <td>Jay sq, Akola</td>
            <td>contact@hall7.com</td>
            <td class="action"><a href="book.php?hall_I=7">Book Now</a></td>
          </tr>
          <tr>
            <td>8</td>
            <td><img src="img/8.jpg" class="hall-image"></td>
            <td>The Prime Park Hotel</td>
            <td>100000</td>
            <td>400 guest arrangement in marriage ceremony with limited facilities.</td>
            <td>Dabki road, Akola</td>
            <td>contact@hall8.com</td>
            <td class="action"><a href="book.php?hall_I=8">Book Now</a></td>
          </tr>
          <tr>
            <td>9</td>
            <td><img src="img/9.jpg" class="hall-image"></td>
            <td>Shri Krishna Mangal Parisar</td>
            <td>950000.0</td>
            <td>1200 guest arrangement in marriage ceremony with premium facilities and catering services.</td>
            <td>789 Cherry St, Alola</td>
            <td>contact@hall9.com</td>
            <td class="action"><a href="book.php?hall_I=9">Book Now</a></td>
          </tr>
          <tr>
            <td>10</td>
            <td><img src="img/10.jpg" class="hall-image"></td>
            <td>Shri Sanai Lawns</td>
            <td>600000.0</td>
            <td>600 guest arrangement in marriage ceremony with basic facilities and decoration.</td>
            <td>123 Pine St, Akola</td>
            <td>contact@hall10.com</td>
            <td class="action"><a href="book.php?hall_I=10">Book Now</a></td>
          </tr>
        </tbody>
      </table>

      <p class="mb-0">Whenever you need to, be sure to logout <a href="/login/logout.php"> using this link.</a>
      </p>

    </div>
  </div>
  <br>
  <br>
  <!--
  <div class="container">
    <div id="back-button">
      <a href="/loginsystem/logout.php"><button class="btn btn-primary">Logout</button></a>
      <button class="btn btn-secondary" onclick="window.history.back();">Back</button>
    </div>
  </div>
  -->
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
</body>

</html>