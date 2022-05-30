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

$email = $_POST['email'];

// raw value
$password = $_POST['password'];

// changed to md5 encryption
$password = md5($password);

// sql query to concatenate string
// $sql = "SELECT * FROM user_login where email = \"$email\" and password = \"$password\" ";

// sql query using single code
$sql = "SELECT * FROM user_login where email = '$email' and password = '$password' ";

// echo $sql;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while ($row = $result->fetch_assoc()) {
    // Set session
    $_SESSION['logged_in_user'] = $row['email'];
    header("location: index.php");

    if($row['role'] === 'admin'){
      header("location: index.php");
    }
    else{
      header("location: user.php");
    }
  }
} else {
  ?>
  <script>
    // alert('not athorised')
    Swal.fire({
      title: 'Not authorized',
      confirmButtonText: 'Next',
    }).then((result) => {
      /* Read more about isConfirmed, isDenied below */
      window.location.href = 'login.php';
    })
  </script>
<?php
}
$conn->close();

?>