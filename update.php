<?php

$id=$_POST['id'];
$name=$_POST['name'];
$address=$_POST['address'];
$mobilenumber=$_POST['mobilenumber'];

$connection=mysqli_connect('localhost','root','','User');
$query="UPDATE `User_details` SET `Name`='$name',`Address`='$address',`Mobilenumber`='$mobilenumber' WHERE `Id`='$id';";
$row=mysqli_query($connection,$query);

if ($row > 0)
    return header('Location:./form.php');
else
    echo "Failed to update data";


?>