<?php

$name=$_POST['name'];
$address=$_POST['address'];
$mobileno=$_POST['mobileno'];

echo "Hello <br>" ;

$connection=mysqli_connect('localhost','root','','User');
$query="INSERT INTO `User_details` (`Name`,`Address`,`Mobilenumber`) VALUES ('$name','$address','$mobileno');";
$row=mysqli_query($connection,$query);
 
if($row>0)
    return header('Location:./form.php');
else
    echo "Error!";

echo "<br>";
?>