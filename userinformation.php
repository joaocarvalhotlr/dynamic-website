<?php

$connection = mysqli_connect('localhost:3307', 'root');

mysqli_select_db($connection, "website_form");

$user = $_POST['user'];
$email = $_POST['email'];
$message = $_POST['message'];

$query = "INSERT INTO `userinfodata` (`user`, `email`, `message`) VALUES ('$user', '$email', '$message')";

mysqli_query($connection, $query);

echo "MESSAGE IS SENT";

