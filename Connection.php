<?php
$conn = mysqli_connect("Local Host", "root", "root", "RGU Library")

if ($conn) {
    print("Connection Successful")
}
else{
    die("Connection Failed:".mysqli_connect_error());
}
?>
