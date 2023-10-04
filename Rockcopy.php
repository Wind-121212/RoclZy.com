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
}
</style>
<body>
   <div class="topnav">
   <a class="active" href="home.php">RockZy</a>
   <a href="Rock.php">Rock</a>
   <a href="map.php">Map</a>
   <a class="right" href="#User">User</a>
 </div>
<div class="cont">
     <a href="Rock_info.php"><img src="pngwing.com (1).png"></a>
     <a href="#B"><img src="pngwing.com (1).png"></a>
     <a href="#C"><img src="pngwing.com (1).png"></a>
     <a href="#D"><img src="pngwing.com (1).png"></a>
     <a href="#E"><img src="pngwing.com (1).png"></a>
     <a href="#F"><img src="pngwing.com (1).png"></a>
     <a href="#G"><img src="pngwing.com (1).png"></a>
     <a href="#H"><img src="pngwing.com (1).png"></a>
     <a href="#I"><img src="pngwing.com (1).png"></a>
     <a href="#J"><img src="pngwing.com (1).png"></a>
</div>
<div style="text-align:center">
<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot" onclick="currentSlide(2)"></span>
<span class="dot" onclick="currentSlide(3)"></span>
<span class="dot" onclick="currentSlide(4)"></span>
<span class="dot" onclick="currentSlide(5)"></span>
<span class="dot" onclick="currentSlide(6)"></span>
<span class="dot" onclick="currentSlide(7)"></span>
</div>
</body>
<script>
  let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>
</html>