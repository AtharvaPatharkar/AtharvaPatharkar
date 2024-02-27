<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marriage Hall Booking System-Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('/login/indeximg.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            font-family: 'Helvetica Neue', sans-serif;
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

        button {
            padding: 10px 20px;
            font-size: 18px;
            font-weight: bold;
            color: #fff;
            background-color: #f7931e;
            border: none;
            border-radius: 5px;
            margin-right: 20px;
            cursor: pointer;
        }

        p {
            font-size: 24px;
            color: black;
            line-height: 1.5;
        }

        h1 {
            font-size: 48px;
            font-weight: bold;
            color: #4b4b4b;
            text-transform: uppercase;
            margin-bottom: 20px;
        }

        #about p {
            color: red;
            font: Comic;
        }

        /* Define styles for the back button */
        #back-button {
            position: fixed;
            bottom: 0px;
            width: fit-content;
            padding: 10px;
            background-color: #f2f2f2;
            color: red;
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

        footer {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>

<body>
    <header>
        <div id="advantages1">
            <nav>
                <ul>
                    <li><a href="/login/index.php">Home</a></li>
                    <li><a href="/login/nav/aboutus.html">About Us</a></li>
                    <li><a href="/login/nav/services.html">Services</a></li>
                    <li><a href="/login/nav/contactus.html">Contact Us</a></li>
                </ul>
            </nav>

        </div>

    </header>

    <section id="image" class="container mt-5">
        <h1 class="text-center">Welcome to the Akola City Marriage Hall Booking Website.</h1>
    </section>

    <section class="container mt-5">
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <img src="Home_image/image1.jpg" class="card-img-top" alt="Image 1">
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img src="Home_image/image2.jpg" class="card-img-top" alt="Image 2">
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img src="Home_image/image3.jpg" class="card-img-top" alt="Image 3">
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img src="Home_image/image4.jpg" class="card-img-top" alt="Image 4">
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img src="Home_image/image5.jpg" class="card-img-top" alt="Image 5">
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img src="Home_image/image6.jpg" class="card-img-top" alt="Image 6">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div id="back-button">
            <a href="/login/login_db.php">
                <button>Login/Signup</button>
            </a>
            <button onclick="window.history.back();">Back</button>
        </div>
    </section>

    <footer class="bg-dark text-white mt-5 py-1">
        <div class="container text-center">
            <p>© 2023 Marriage Hall Booking System. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>