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

  body {
  
    color: #333333; /* Dark gray text color */
    font-family: Arial, sans-serif; /* Specify your preferred font family */
  }

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


  .container {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    text-align: center;
  }

  h1 {
    font-size: 50px;
    font-weight: bold;
    margin-bottom: 20px;
    color: yellowgreen;
  }

  p {
    font-size: 24px;
    line-height: 1.5;
    text-align: justify;
    color:#00688B;
    
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
    <h1>The hall is already booked for the given date.</h1>
    <p>We regret to inform you that the hall is already booked for the requested date. We kindly request you to consider selecting another date for your event. We apologize for any inconvenience this may cause and assure you that we will make every effort to accommodate your needs on a different date.</p>
    <a href="welcome.php" class="back-button">Back to Form</a>
  </div>

  <div id="back-button">
    <a href="/loginsystem/logout.php"><button>Logout</button></a>
    <button onclick="window.history.back();">Back</button>
  </div>


  <script src="script.js"></script>
</body>

</html>