<?php

    $connection=mysqli_connect('Localhost','root','','User');
    $query="SELECT * FROM `User_details`;";
    $result=mysqli_query($connection,$query);
    $users=mysqli_fetch_all($result,MYSQLI_ASSOC);

   // print_r($users);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body bgcolor="pink">
    <form action="./insert.php" method="post">
        <input type="text" name="name" id="" placeholder="Enter Name" autofocus><br><br>
        <input type="text" name="address" placeholder="Enter Address" id=""><br><br>
        <input type="text" name="mobileno" id="" placeholder="Enter Mobilenumber"><br><br>
        <input type="Submit" value="Submit">
    </form>
    <br><br><hr>
    <table border="1" align="center">
        <thead>
            <th>Name</th>
            <th>Address</th>
            <th>Mobilenumber</th>
            <th>Delete</th>
            <th>Update</th>
        </thead>
        <tbody>
            <?php foreach($users as $data) {?>
                    <tr>
                        <td><?php echo $data['Name']?></td>
                        <td><?php echo $data['Address']?></td>
                        <td><?php echo $data['Mobilenumber']?></td>
                        <td><a href="./delete.php?id=<?=$data['Id']?>">Delete</td>
                        <td><a href="./updatepage.php?id=<?=$data['Id']?>">Update</td>
                    </tr>
            <?php }?>
        </tbody>
    </table>
</body>
</html>