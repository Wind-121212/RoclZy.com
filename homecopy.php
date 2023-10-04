<?php include "connect.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="istockphoto-1358966517-612x612.jpg" href="/istockphoto-1358966517-612x612.jpg/favicon.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="
https://cdn.jsdelivr.net/npm/swiper@10.3.1/swiper-bundle.min.js
"></script>
<link href="
https://cdn.jsdelivr.net/npm/swiper@10.3.1/swiper-bundle.css
" rel="stylesheet">
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
       height: 200vh;
       background-image: url(meadow-with-trees-wooden-fence.jpg);
       background-position: center;
       background-size: cover;
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
h2 , h1 {
  text-align: center;
}
.container {
  position: relative;
}
.container img { 
  margin: 50px 160px 0;
  width: 80%;
  height: 600px;
  opacity: 0.75;
  background-size: cover;
  background-position: center;
  filter: blur(3px);
}
.text {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.con{
  position: relative;
  margin-left: 20px;
  padding-top: 10vh;
  width: 30%;
  height: auto;
}
.swiper {
  width: 50vw;
  height: auto;
}
.swiper img{
  width: 100%;
  height: 50vh;
  border-radius: 20px;
}
</style>
<body>
   <div class="topnav">
   <a class="active" href="home.php">RockZy</a>
   <a href="Rock.php">Rock</a>
   <a href="map.php">Map</a>
   <a class="right" href="#User">User</a>
 </div>

 <div class="container">    
  <img src="wallpaperflare.com_wallpaper.jpg">  
    <div class="text">
     <h2>RockZy</h2>
     <h1>presented</h1>
    </div>
 </div> 
 <div class="con">
 <!-- Slider main container -->
<div class="swiper">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
    <div class="swiper-slide"><img src="michael-oeser-chBLQ_UCmgU-unsplash.jpg"></div>
    <div class="swiper-slide"><img src="michael-oeser-chBLQ_UCmgU-unsplash.jpg"></div>
    <div class="swiper-slide"><img src="michael-oeser-chBLQ_UCmgU-unsplash.jpg"></div>
    ...
  </div>
  <!-- If we need pagination -->
  <div class="swiper-pagination"></div>

  <!-- If we need navigation buttons -->
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>

 <div class="context">
</div>
</div>
</body>
<script>
        const hOne = document.querySelector('h2')

        window.addEventListener('scroll', () => {
            let current = window.scrollY;
            hOne.style.fontSize = `clamp(2rem, 35rem - ${current}px, 20rem)`;
        })
        
        const swiper = new Swiper('.swiper', {
          speed: 750,
  spaceBetween: 150,
  // Optional parameters
  direction: 'horizontal',
  loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
    clickable : true
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  autoplay:{
    delay: 3000,
  },
  effect: 'coverflow',
  depth: 20,
  scale: 2
});
    </script>
</html>    
