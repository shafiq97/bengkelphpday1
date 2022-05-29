<?php
  include 'connection.php';
  $id = $_GET['id'];
  $sql = "UPDATE user_login SET role='admin' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
?>