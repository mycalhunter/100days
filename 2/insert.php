<?php 

include 'connect.php';

// form variables
$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$lname = mysqli_real_escape_string($conn, $_POST['lname']);
$pass = mysqli_real_escape_string($conn, $_POST['password']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$message = mysqli_real_escape_string($conn, $_POST['message']);


$sql = "INSERT INTO 2_accounts (first_name, last_name, password, email, message) VALUES ('$fname', '$lname', '$pass', '$email', '$message')";

if (mysqli_query($conn, $sql)) {
  echo "new record created";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>