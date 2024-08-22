<?php
session_start(); // Start the session

// Check if the user is logged in
$isLoggedIn = isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] === true;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Furniture</title>
</head>
<body>
    
<div class="out-cont">
    <h1>
        Admin Panel
    </h1>
    <hr>

<h3 id="head">Insert Form🪑</h3>

<div class="inner-cont">

<form action="insert.php" method="post">


<label for="name">Enter Furniture Name</label>
<input type="text" name="name" id="name" required autofocus="true" autocomplete="true">
<br>

<label for="des">Enter Description Name</label>
<input type="text" name="des" id="des" autocomplete="true" required>
<br>
<label for="price">Enter Price</label>
<input type="range" name="price" min="0" max="99999" step="100" value="500"  id="price" autocomplete="true" required>
<p id="amount">Amount : </p>
<br>
<label for="url">Enter Url Link</label>
<input type="url" name="url" id="url" autocomplete="true" required>
<br>
<button class="btn-sucess"  onclick="postData()" type="submit">Insert</button>
</form>
</div>
</div>

<script>


    var price_set =document.getElementById('price');
    var display_price =document.getElementById('amount');


    price_set.onclick =function()
    {
        display_price.innerHTML = `Amount :₹ ${price_set.value}`;
    }
</script>
</body>
</html>