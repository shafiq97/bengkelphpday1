<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

</body>

</html>


<?php
session_start();
include 'connection.php';

$email = $_GET['email'];
$password = $_GET['password'];
$name = $_GET['name'];

$sql = "INSERT INTO `user_login`(`email`, `name`, `password`) VALUES ('$email','$name','$password')";

if ($conn->query($sql) === TRUE) {
  // echo "New record created successfully";
  header("location: login.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();





?>