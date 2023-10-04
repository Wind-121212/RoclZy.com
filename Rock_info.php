<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>    *{
        font-family: Arial, Helvetica, sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body{
       background-image: url(meadow-with-trees-wooden-fence.jpg);
       background-position: center;
       background-repeat: no-repeat;
    }

    .topnav {
        background: #303030;
        overflow: hidden;
      }
.topnav a{
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
.topnav h1{
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
.topnav a.right {
  float: right;
  cursor: pointer;
}
</style>
<body>
<div class="topnav">
   <a class="active" href="home.php">RockZy</a>
   <a href="Rock.php">Rock</a>
   <a href="map.php">Map</a>
   <a class="right" href="#User">User</a>
 </div>
</body>
</html>