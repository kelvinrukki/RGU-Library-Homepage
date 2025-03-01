<?php
include 'Connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <form>
        <label>User Name</label><br>
        <input type="text" name="User_Name" placeholder="User Name" required=""><br>
        <label>Email</label><br>
        <input type="text" name="Email" placeholder="Email" required=""><br>
        <label>Password</label><br>
        <input type="password" name="Password" required=""><br>
        <label>Repeat Password</label><br>
        <input type="password" name="Repeat_Password" required=""><br>
        <input type="Submit" value="SignUp">
    </form>
</body>
</html>
