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

// if(isset($_POST['femaleCb'])){
//   echo "Female";
// }
// if(isset($_POST['maleCb'])){
//   echo "male";
// }

if (isset($_POST['adminSubmit'])) {
  $target_dir = "uploads/";
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  $myFilename = basename($_FILES["fileToUpload"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

  // Check if image file is a actual image or fake image
  if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
      echo "File is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
    } else {
      echo "File is not an image.";
      $uploadOk = 0;
    }
  }

  // Check if file already exists
  if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
  }

  // Check file size
  if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
  }

  // Allow certain file formats
  if (
    $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif"
  ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
  }

  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  }

  $email = $_POST['email'];
  $password = $_POST['password'];
  $password = md5($password);
  $name = $_POST['name'];

  $sql = "INSERT INTO `user_login`(`email`, `name`, `password`, `image`) VALUES ('$email','$name','$password', '$myFilename')";

  if ($conn->query($sql) === TRUE) {
    // echo "New record created successfully";
    header("location: login.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }


}

if (isset($_POST['genderSelect'])) {
  echo $_POST['genderSelect'];
}

// $email = $_GET['email'];
// $password = $_GET['password'];
// $password = md5($password);
// $name = $_GET['name'];

// $sql = "INSERT INTO `user_login`(`email`, `name`, `password`) VALUES ('$email','$name','$password')";

// if ($conn->query($sql) === TRUE) {
//   // echo "New record created successfully";
//   header("location: login.php");
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }

$conn->close();





?>