<?php
$showAlert = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'partials/_dbconnect.php';
    $name = $_POST["name"];
    $username = $_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    // $exists=false;

    // Check whether this username exists
    $existSql = "SELECT * FROM `users` WHERE email = '$username'";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);
    if ($numExistRows > 0) {
        // $exists = true;
        $showError = "Username Already Exists";
    } else {
        // $exists = false; 
        if (($password == $cpassword)) {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users` ( `name`,`email`, `password`, `dt`) VALUES ('$name','$username', '$password', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $showAlert = true;
            }
        } else {
            $showError = "Passwords do not match";
        }
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Marriage Hall Booking System-SignUp</title>

    <style>
        body {
            background-image: url('/login/loginimg.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            font-family: 'Helvetica Neue', sans-serif;
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
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .form-group label {
            font-weight: bold;
        }

        .form-control {
            border: none;
            border-bottom: 2px solid #ccc;
            border-radius: 0;
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #2388ed;
        }

        .btn-primary {
            background-color: #2388ed;
            border: none;
            border-radius: 3px;
        }

        .btn-primary:hover {
            background-color: #1f72b7;
        }

        .container1 {
            width: 80%;
            margin: auto;
            text-align: center;
        }

        .slider1 {
            height: 0px;
            background-color: #ccc;
        }

        .btn1 {
            margin-top: 20px;
        }

        .btn1 button {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }

        .btn1 button:hover {
            background-color: #3e8e41;
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

</head>

<body
    style="background-image: url('loginimg.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">

    <nav>
        <ul>
            <li><a href="/login/index.php">Home</a></li>
            <li><a href="/login/nav/aboutus.html">About Us</a></li>
            <li><a href="/login/nav/services.html">Services</a></li>
            <li><a href="/login/nav/contactus.html">Contact Us</a></li>
        </ul>
    </nav>

    <?php
    if ($showAlert) {
        echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is now created and you can login
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> ';
    }
    if ($showError) {
        echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> ' . $showError . '
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> ';
    }
    ?>

    <div class="container1">
        <div class="slider1"></div>
        <div class="btn1">
            <button class="login1" onclick="window.location.href='login.php'">Login</button>
            <button class="signup1" onclick="window.location.href='signup.php'">Signup</button>
        </div>
    </div>

    <div class="container my-4">
        <h1 style="text-align: center; color: rgb(238, 109, 10);">Signup to our website</h1>
        <form action="/login/signup.php" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" required placeholder="Enter your Name">
            </div>
            <div class="form-group">
                <label for="email">Username/Email</label>
                <input type="email" maxlength="50" class="form-control" id="email" name="email"
                    aria-describedby="emailHelp" placeholder="Enter your Email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" maxlength="23" class="form-control" id="password" name="password" required
                    placeholder="Enter your Password">
            </div>
            <div class="form-group">
                <label for="cpassword">Confirm Password</label>
                <input type="password" class="form-control" id="cpassword" name="cpassword" required
                    placeholder="Enter your Confirm Password">
                <small id="emailHelp" class="form-text text-muted">Make sure to type the same password</small>
            </div>

            <button type="submit" class="btn btn-primary" style="text-align: center;">SignUp</button>
        </form>
    </div>
    <!-- 
    <div id="back-button">

      <button onclick="window.history.back();">Back</button>   
    </div>
-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>

</html>