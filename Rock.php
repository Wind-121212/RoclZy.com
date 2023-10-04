<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
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
.topnav a.right {
  float: right;
  cursor: pointer;
}
.cont{
    margin: 0;
    position: relative;
    width: auto;
    height: auto;
    align-items: center;
    justify-content: center;
}
.cont img{
    position: relative;
    margin: 20px 30px 0;
    width: 15%;
    height: auto;
    cursor: pointer;
    filter: blur(0px);
    opacity: 1;
    transition-duration: 0.5s
}
img:hover{
    width: 15.5%;
    height: auto;
    filter: blur(1px);
    opacity: 0.5;
}
.content{
  position: absolute;
  top: 100%;
  left: 50%;
  transform: translate(-50%, -50%);
}.tablink {
  background-color: #555;
  color: white;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 17px;
  width: 25%;
}

.tablink:hover {
  background-color: #777;
}

/* Style the tab content */
.tabcontent {
  color: white;
  display: none;
  padding: 50px;
  text-align: center;
}
</style>
<body>
  <div class="tab-contant">
    <div id="Rock 1">
      <h1>Rock 1</h1>
      <p>ROck</p>
    </div>
    <div id="Rock 2">
      <h1>Rock 1</h1>
      <p>ROck this</p>
    </div>
    <div id="Rock 3">
      <h1>Rock 1</h1>
      <p>ROck that</p>
    </div>
  </div>
</body>
</html>