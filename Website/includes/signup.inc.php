<?php
session_start();
if (isset($_POST['submit'])){
  include_once 'dbh.inc.php';
  $email = mysqli_real_escape_string($conn,$_POST['email']);
  $password = mysqli_real_escape_string($conn,$_POST['password']);

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../signup.php?signup = email");
    exit();
  } else {
    $sql = "SELECT * FROM users WHERE user_email = '$email'";
    $result = mysqli_query($conn,$sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0 ) {
      header("Location: ../signup.php?signup=usertaken");
      exit();
    } else {
      $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
      $sql = "INSERT INTO users (user_email, user_password) Values ('$email', '$hashedPwd');";
      mysqli_query($conn, $sql);
      header("Location: ../signup.php?signup=success");
      exit();
    }
  }
} else {
  header("Location: ../signup.php");
  exit();
}
?>
