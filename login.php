<?php
session_start(); // Start the session

// Check if the user is logged in
$isLoggedIn = isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] === true;

require 'connection.php'
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet" />

    <!-- CSS stylesheets -->
    <link rel="stylesheet" href="style.css" />

    <link rel="stylesheet" href="form-style.css">

    <!-- Favicon -->
    <link rel="icon" href="favicon/chair.ico" />

    <!-- Title  -->
    <title>Lisbon Chair Shop</title>


</head>

<body>


    <div class="out-cont">

        <h3 id="head">Login Form🪑</h3>

        <div class="inner-cont">

            <form action="login-valid.php" method="post">


                <label for="username">Enter Username</label>
                <input type="text" name="username" id="username" required autofocus="true" autocomplete="true">
                <br>

                <label for="password">Enter Password</label>
                <input type="password" name="password" id="password" autocomplete="false" required>

                <button class="btn-sucess" type="submit">Login</button>
            </form>
        </div>
    </div>


</body>

</html>