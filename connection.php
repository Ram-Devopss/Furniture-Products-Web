
<?php



$con = mysqli_connect("localhost","root","","furniture") or die(mysqli_error($con));

if($con->connect_error)
{

    die(" Connection Failed" .$con);
}
?>