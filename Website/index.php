<?php
include_once 'header.php';
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
h1{
  margin:0;
  padding:0;
}
h1.a{
  margin:0;
  padding-top:75px;
  padding-left: 200px;
  text-align: center;
  color: white;
}
hr {
    border: 0;
    height: 1px;
    background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));
}
hr.a{
  background-image: linear-gradient(to right, rgba(255, 255, 255, 0), rgba(255, 255, 255, 0.75), rgba(255, 255, 255, 0));
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
body {
    background-image: url("c9.PNG");
    background-size: 700px 700px;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    font-family: Verdana;
    margin:0;
    margin-top : 0;
    margin-bottom : 0;
}
.header{
  text-align: center;
}
* {
    box-sizing: border-box;
}
.column1 {

    width: 50%;
    padding-top: 100px;
    height: 500px;
    background-color: rgb(51, 173, 255,.7);
    float: right;
  }
  .column2 {
      float:left;
      width: 50%;
      padding-top: 100px;
      height: 500px;
        background-color:rgb(255,255,255,.7);
    }
  .row {
    content: "";
    display: table;
    clear: both;
    margin-left: auto;
    margin-right: auto;
    padding-bottom: 0px;
}
.center {
  display: block;
    margin-left: auto;
    margin-right: auto;
}

.top {
  background-color: rgb(0,0,0,.9);
  height: 400px;
  width: 1100px;
}
.topText {
  color: white;
  margin-left: 25%;
  margin-right: 7%
}
.MerchBox {
  background-color: white;
  height: 590px;
  width: 100%;
}

  </style>
<body>
<ul>
  <li class = "yEEsh">C9 yEEsh</li>
  <li><a href='login.php'>Login</a></li>
  <li><a href="#contact">Gaming</a></li>
  <li><a href="blog.php">Blog</a></li>
  <li><a href="index.php">Home</a></li>
</ul>
<div class = "row">
<div class = "top">
  <img src = "TonyPic.png" align= "left" alt = "profile pic" style="height:400px;width:auto;">
  <h1 class = "a">yEEsh</h1>
  <hr class = "a">
  <p class = "topText">Meet yEEsh, Cloud 9's newest addition to its CS:GO Roster. The young North American star can do it all! He's an explosive entry fragger, clinical awper, and deadly lurker. yEEsh has many talents outside of CS:GO as well. He owns a three Michellin Star butter chicken resteraunt and studied cookery under the legendary Gordon Ramsay. </p>
</div>
</div>
<div class = "row">
  <div class="column1">
    <h1 class = "header">CSGO</h1>
<p class = "header"> yEEsh is a gold nova II in matchmaking and has an free membership on faceit. He sports a positive kd of 1.2 across all competetive games. </p>
<img src = "csg.PNG" alt = "CSGO" class = "center" style="height:200px;width:auto;">
</div>
<div class="column2">
  <h1 class = "header">Cuisine</h1>
<p class = "header"> yEEsh is a world class chef with a three michellin star butter chicken. </p>
<img src = "butt chicken.jpg" alt = "butter chicken" class = "center" style="height:200px;width:auto;">
</div>
</div>
<div class = "MerchBox">
<h1 class = "header">Merch</h1>
  <hr width = 50%>
  <div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="c9Hoodie.PNG" alt="c9 Hoodie" style="height:500px;" class = "center">
        <div class="carousel-caption">
          <h3>C9 hoodie</h3>
        </div>
      </div>

      <div class="item">
        <img src="pain.jpg" alt="XXXTentacion Pain shirt" style="height:500px;"class = "center">
        <div class="carousel-caption">
          <h3>Sage of 6 Paths XXXTentacion</h3>
        </div>
      </div>

      <div class="item">
        <img src="wave.jpg" alt="waves" style="height:500px;"class = "center">
        <div class="carousel-caption">
          <h3>Waves<i class="em em-ocean"></i></h3>
        </div>
      </div>

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

</div>
</body>
</html>
