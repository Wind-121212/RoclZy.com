<?php include "connect.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        font-family: 'Courier New', Courier, monospace;
    }
    body{
        margin: 0;
        background-image: url('istockphoto-1358966517-612x612-transformed.jpeg');
        background-repeat: no-repeat;
        background-size: cover;
       
    }
    .containerimg{
  display: block;
  margin-left: auto;
  margin-right: auto;
} 
    .cunimg{
      margin-top: auto;
      max-width: 20%;
       height: auto;
       filter: blur(1px);
       transition-duration: 1s;
    }
    .cunimg:hover{
      filter: blur(0px);
      max-width: 23%;
    }
    .topnav {
        background: #303030;
        overflow: hidden;

}
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
.topnav a:hover {
  background-color: #ddd;
  color: black;
}
.topnav a.active {
  background-color: #9CA182;
  color: white;
}
.topnav a.left {
  float: right;
}
</style>
<body>
  <div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a class="left" href="#login.php">Login</a>
</div>
</body>

</html>
