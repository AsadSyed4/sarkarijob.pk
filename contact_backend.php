<?php
require 'connection.php';

$name = $_POST["name"];
$email = $_POST["email"];
$contact = $_POST["contact"];
$message = $_POST["message"];

$sql = "INSERT INTO `contact_us` (`name`, `email`, `contact`, `message`) VALUES ('$name','$email','$contact','$message')";
$result_sql = mysqli_query($con,$sql);
if ($result_sql)
{
    header("location:index.php?success=Message Sent!");
}
else
{
    header("location:contact.php?error=Message not sent!");
}
?>