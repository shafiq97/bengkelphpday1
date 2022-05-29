<?php
include 'connection.php';
$id = $_GET['id'];

$sql = "DELETE FROM user_login WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
  echo "Deleted successful";
} else {
  echo "Error deleting record: " . $conn->error;
}
?>