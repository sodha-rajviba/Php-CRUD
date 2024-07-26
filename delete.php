<?php

$id=$_GET['id'];

$connection=mysqli_connect('localhost','root','','User');
$query="DELETE FROM `User_details` WHERE Id=$id;";
$row=mysqli_query($connection,$query);

if($row>0)
    return header('Location:./form.php');
else
    echo "Error in process";


?>