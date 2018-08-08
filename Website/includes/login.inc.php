<?php
if (isset($_POST['submit'])){
include 'dbh.inc.php';
$email = mysqli_real_escape_string($conn,$_POST['email']);
$password = mysqli_real_escape_string($conn,$_POST['password']);

$sql = "SELECT *  FROM users WHERE user_email = '$email'";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
  if ($resultCheck < 1) {
    header("Location: ../login.php?login=error");
    exit();
  } else {
    if ($row = mysqli_fetch_assoc($result)) {
      $hashedPwdCheck = password_verify($password , $row['user_password']);
      if ($hashedPwdCheck == true) {
        session_start();
        $_SESSION['logged'] = TRUE;
        $_SESSION['u_email'] = $row['user_email'];
        $_SESSION['u_password'] = $row['user_password'];
          header("Location: ../login.php?login=success");
          exit();
      } else {
        header("Location: ../login.php?login=error");
        exit();
      }
    }
  }
}else {
  header("Location: ../login.php?login=error");
  exit();
}
?>
