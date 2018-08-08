<?php
include_once 'header.php';
?>

<!DOCTYPE html>

<html>
<head>
	<title>Login Page</title>
  <style>
  .i {
    padding-top: 100px;
  }
  body {
      font-family: Verdana;
      margin:0;
      margin-top : 0;
      margin-bottom : 0;
  }
	button {
    background-color: rgb(51, 173, 255);
    color: white;
    padding: 14px 14px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 5%;
}

  ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background:	linear-gradient(to right, rgb(245,245,245) , rgb(51, 173, 255));
      position: fixed;
      width: 100%;
  }

  li a {
      display: block;
      color: white;
      text-align: center;
      padding: 20px 16px;
      text-decoration: none;
      float: right;
      font-size: 18px;
  }

  li a:hover {
      background-color: white;
      color: black;
  }
  .yEEsh {
    padding: 10px 16px;
    color: rgb(51, 173, 255);
    float: left;
    font-size: 30px;
    font-weight: bold;
  }
  </style>
</head>
<body>
  <ul>
    <li class = "yEEsh">C9 yEEsh</li>
    <li><a href='login.php'>Login</a></li>
    <li><a href="#contact">Gaming</a></li>
    <li><a href="blog.php">Blog</a></li>
    <li><a href="index.php">Home</a></li>
  </ul>
	<div class="i">
		<form class = "form" action="includes/login.inc.php" method = "POST">
			<label for="email">Email: </label><input type = "text" name="email" autofocus required>
			<label for="password">Password: </label><input type = "text" name="password" required>
			<button type="submit" name = "submit">Login</button>
		</form>

		<p>Don't have an account? Sign up <a href = "signup.php">here</a></p>
		<?php
		if ($_SESSION['logged']) {
		    echo "Success! You are logged in.";
		}
		?>
	</div>
</body>
</html>
