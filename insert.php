<?php


$con = mysqli_connect("localhost","root","","furniture");


$name = $_POST['name'];
$description = $_POST['des'];
$price = $_POST['price'];
$url = $_POST['url'];

$sql = "INSERT INTO products (product_name,des,price,URL) VALUES ('$name','$description','$price','$url')";

$result = $con->query($sql);

if($result===true)
{
    echo "Furniture Was Sucessfully Inserted";
    header("refresh:1; url=index.php");
}
else{

    echo "Furniture Was Failed To Inserted";
    header("refresh:1; url=index.php");
}
?>