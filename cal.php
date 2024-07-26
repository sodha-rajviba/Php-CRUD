<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form action="./cal1.php" method="post">
        <input type="number" placeholder="Enter num1" name="num1">
        <input type="number" placeholder="Enter num2" name="num2">
        <select name="option">
            <option value="Addition">Addition</option>
            <option value="Substraction">Substraction</option>
            <option value="Multiplication">Multiplication</option>
            <option value="Division">Division</option>
        </select>
        <br><br>
        <input type="submit" value="Submit">
    </form>
</body> 
</html>