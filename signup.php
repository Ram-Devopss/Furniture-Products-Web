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

<h3 id="head">Sign Up Form🪑</h3>

<div class="inner-cont">

<form method="post" action="signup-valid.php">


<label for="username">Create Username</label>
<input type="text" name="username" id="username" required autofocus="true" autocomplete="true">
<br>
<label for="email">Enter Email</label>
<input type="email" name="email" id="email" required>
<br>
<label for="password">Create  Password</label>
<input type="password" name="password" id="password" autocomplete="false" required>

<button class="btn-sucess" onclick="postData()" type="submit">Registration</button>
</form>
</div>
</div>



<script>

function postData() {
    // Collect form data
    var formData = new FormData();
    formData.append('username', document.getElementById('username').value);
    formData.append('email', document.getElementById('email').value);
    formData.append('password'/document.getElementById('password').value);

    // Send data to PHP script using fetch
    fetch('signup-valid.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        console.log(data); // Log response from PHP
        // You can do something with the response here (e.g., update UI)
    })
    .catch(error => {
        console.error('Error:', error);
    });
}

</script>

</body>
</html>