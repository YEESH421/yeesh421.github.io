<?php
include_once 'header.php';
?>
<!DOCTYPE html>
<html>
<style>
body {
    font-family: Verdana;
    margin:0;
    margin-top : 0;
    margin-bottom : 0;
}
hr {
    border: 0;
    height: 1px;
    background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));
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
.container {
    position: relative;
    text-align: center;
    color: 	white;
    font-size: 300px;
    font-weight: 300;
}
.centered {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
  }
  .post{
    margin-left: 10%;
    height: 400px;
    width: auto;
  }

  .column1 {
      width: 75%;
      padding-top: 100px;
      float: left;
    }
    .column2 {
        float:right;
        width: 25%;
        padding-top: 100px;
      }
.center{
  text-align: center;
  font-size:40px;
  font-weight: lighter;
}

</style>
<body>
  <div class="container">
    <div class="centered">Tony</div>
<ul>
  <li class = "yEEsh">C9 yEEsh</li>
  <li><a href='login.php'>Login</a></li>
  <li><a href="#contact">Gaming</a></li>
  <li><a href="blog.php">Blog</a></li>
  <li><a href="index.php">Home</a></li>
</ul>
<img src = "gyradosCrop.jpg" alt = "gyrados" style="width:100%;height:auto;">
</div>
<h1 class = "center">My Life.</h1>
<hr width = 900px>
<div class = "column1">
  <div class="post">
  <a href="Post1.php"><h1>First Post</h1><a>
    <img src = "tonyBiopic-1.jpg" alt = "biopic">
    <p>A picture of me for my first ever post.</p>
  </div>
</div>
</div>
</div>
<div class = "column2">
<h2>Related Posts</h2>
  <img src = "stock1.jpg" alt = "smexy pic" style="width:400px;height:auto;">
  <h3><a href = "Stock.php">Lake</a></h3>
    <p>That is a good looking picture.</p>
  <img src = "stock2.jpg" alt = "smexy pic2" style="width:400px;height:auto;">
    <h3><a href = "Stock.php">Starry Night</a></h3>
      <p>That is another good looking picture.</p>
</div>
</body>
</html>
