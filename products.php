<?php

require 'connection.php';
session_start(); // Start the session

// Check if the user is logged in
$isLoggedIn = isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] === true;
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

    <!-- Favicon -->
    <link rel="icon" href="favicon/chair.ico" />

    <!-- Title  -->
    <title>Lisbon Chair Shop</title>

<style>
    li{
        list-style: none;
      font-weight: 600;
    }
</style>
</head>

<body><h2>Our Furnitures</h2>

    < clas="nav-contain">
    <?php if($isLoggedIn): ?>
        <ul class="nav-menu">
            <li class="nav-item">
                <a href="products.php" class="nav-item">Products</a>
            </li>
            <li class="nav-item">
                <a href="logout.php" class="nav-item">Logout</a>
            </li>

            <li class="nav-item">
                <a href="insert-furniture.php" class="nav-item">Furniture</a>
            </li>

        </ul>

        <?php else: ?>
            <ul class="nav-menu">
            <li class="nav-item">
                <a href="signup.php" class="nav-item">SignUp</a>
            </li>

            <li class="nav-item">
                <a href="login.php" class="nav-item">Login</a>
            </li>

        </ul>

        <?php endif; ?>
    </div>
    <!-- Container  -->
    <div class="container">
        <!-- Header  -->
        <header>
            <div class="header-text-box">
                <h1>We design and build better chairs, for a better life</h1>

                <p class="header-text">
                    In a small shop in the heart of Lisbon, we spend our days relentlessly perfecting the chair. The result is a perfect blend of beauty and comfort, that will have a lasting impact on your health.
                </p>

                <!-- Button  -->
                <a class="btn btn--big" href="#">Shop chairs</a>
            </div>

            <img class="header-img" src="images/hero.jpg" alt="Photo" />
        </header>
        <?php


require 'connection.php';


$con = mysqli_connect("localhost","root","","furniture");

$sql = "SELECT * FROM PRODUCTS";

$result = $con->query($sql);

if ($result->num_rows > 0) {

    
       echo '<section>';
          
            echo '<h2>Our bestselling chairs</h2>';

            echo '<div class="grid-3-cols">';
    while($row = $result->fetch_assoc())
    {

        echo'<figure class="chair">';
                    echo'<img src="'.$row['URL'].'" class="chair-img" alt="Chair" />';

                echo '<div class="chair-box">';
                        // <!-- Column title  -->
                       echo'<h3>'.$row['product_name'].'</h3>';

                      echo'<ul class="chair-detairls">';
                            // <!-- Row 1  -->
                           echo'<li>';
                                // <!-- Chair icon  -->
                                echo'<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="chair-icon w-6 h-6">';
                    echo'<path
                      fill-rule="evenodd"
                      d="M9 4.5a.75.75 0 01.721.544l.813 2.846a3.75 3.75 0 002.576 2.576l2.846.813a.75.75 0 010 1.442l-2.846.813a3.75 3.75 0 00-2.576 2.576l-.813 2.846a.75.75 0 01-1.442 0l-.813-2.846a3.75 3.75 0 00-2.576-2.576l-2.846-.813a.75.75 0 010-1.442l2.846-.813A3.75 3.75 0 007.466 7.89l.813-2.846A.75.75 0 019 4.5zM18 1.5a.75.75 0 01.728.568l.258 1.036c.236.94.97 1.674 1.91 1.91l1.036.258a.75.75 0 010 1.456l-1.036.258c-.94.236-1.674.97-1.91 1.91l-.258 1.036a.75.75 0 01-1.456 0l-.258-1.036a2.625 2.625 0 00-1.91-1.91l-1.036-.258a.75.75 0 010-1.456l1.036-.258a2.625 2.625 0 001.91-1.91l.258-1.036A.75.75 0 0118 1.5zM16.5 15a.75.75 0 01.712.513l.394 1.183c.15.447.5.799.948.948l1.183.395a.75.75 0 010 1.422l-1.183.395c-.447.15-.799.5-.948.948l-.395 1.183a.75.75 0 01-1.422 0l-.395-1.183a1.5 1.5 0 00-.948-.948l-1.183-.395a.75.75 0 010-1.422l1.183-.395c.447-.15.799-.5.948-.948l.395-1.183A.75.75 0 0116.5 15z"
                      clip-rule="evenodd"
                    />';
                 echo'</svg>';

                                // <!-- Span is a generic INLINE text element, it doesn't have any meaning. It's like a div element, but inline -->
                                echo'<span>'.$row['des'].'</span>';
                            echo'</li>';
                          
                           
                        
                            // <!-- Row 2  -->
                            echo'<li>';
                                // <!-- Chair icon  -->

echo'<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="chair-icon w-6 h-6">';
                    echo'<path
                      fill-rule="evenodd"
                      d="M12 2.25a.75.75 0 01.75.75v.756a49.106 49.106 0 019.152 1 .75.75 0 01-.152 1.485h-1.918l2.474 10.124a.75.75 0 01-.375.84A6.723 6.723 0 0118.75 18a6.723 6.723 0 01-3.181-.795.75.75 0 01-.375-.84l2.474-10.124H12.75v13.28c1.293.076 2.534.343 3.697.776a.75.75 0 01-.262 1.453h-8.37a.75.75 0 01-.262-1.453c1.162-.433 2.404-.7 3.697-.775V6.24H6.332l2.474 10.124a.75.75 0 01-.375.84A6.723 6.723 0 015.25 18a6.723 6.723 0 01-3.181-.795.75.75 0 01-.375-.84L4.168 6.241H2.25a.75.75 0 01-.152-1.485 49.105 49.105 0 019.152-1V3a.75.75 0 01.75-.75zm4.878 13.543l1.872-7.662 1.872 7.662h-3.744zm-9.756 0L5.25 8.131l-1.872 7.662h3.744z"
                      clip-rule="evenodd"
                    />';
                 echo'</svg>';

                               echo'<span>www.furniture.com</span>';
                            echo'</li>';

                            echo'<li>
                            <strong> Product No-'.$row['product_id'].'</strong>
                            </li>';
                        echo'</ul>';

                        // <!-- Chair price  -->

                        echo'<div class="chair-price">';
                           echo'<strong>₹'.$row['price'].'</strong>';
                            // <!-- Button  -->
                           echo'<button  onclick="addtocart(\''.$row['product_name'].'\','.$row['price'].')" class="btn btn--small">Add to cart</button>';
                        echo'</div>';
                    echo'</div>';
               echo'</figure>';
    }

    
   echo'</div>';
   echo'</section>';
} else {
    echo "0 results";
}

$con->close();

?>

        <!-- Footer  -->
        <footer>
         Hey User You Can add New Products, Insert New Item Its Shown On Home Header
        </footer>

        <div class="orders">

<hr>
<h2 id="order_head" class="features-text" style="text-align:center">
    Your Orders
</h2>
<h3 style="text-align: center;" id="cart">~ Empty</h3>
<h3><strong id="realprice">0</strong></h3>
<hr>
<button  onclick="checkout()" class="btn btn--small">Place Order</button>

</div>
    </div>


    
<script>

var carts = [];


function addtocart(name, price){
console.log(name,price);

carts.push({'name':name,"price":price});
//once inserted display the orders

display_orders();
}


function display_orders()
{

    console.log(carts);
var order_head =document.getElementById('order_head');
//checking cond
if(carts.length>0)
{
    
var cartelements =document.getElementById('cart')
cartelements.innerHTML ="";
carts.forEach(item =>{
    var itemDiv = document.createElement('div');
itemDiv.classList.add('card', 'mb-3');// Optional: Add a class for styling
// Create the HTML content for the item
itemDiv.innerHTML = `
 <div class="card-body">
        <h5 class="card-title">${item.name}</h5>
        <p class="card-text">₹ ${item.price}</p>
    </div>
`;

// Append the item div to the cart element
cartelements.appendChild(itemDiv);

    
});
addprice();
}

}


function addprice()
{
  let total = 0;

  carts.forEach(item=>{
            total += item.price;
        });
    document.getElementById('realprice').textContent = ` Total Price ₹${total}`;


}

function checkout()
{

if(carts.length>0)
{
    window.alert("Order Has Been Placed");
    carts.pop;
    var cartelements =document.getElementById('cart')
    cartelements.innerHTML ="";
    var order_head =document.getElementById('order_head');

        order_head.innerHTML ="";
        document.getElementById('realprice').textContent = ` Total Price ₹ 0`;

}
else
{
    window.alert("Pls Select Some Product");

}
}



</script>
</body>

</html>

