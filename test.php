<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: "Lato", sans-serif;}

.tablink {
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

#London {background-color:red;}
#Paris {background-color:green;}
#Tokyo {background-color:blue;}
#Oslo {background-color:orange;}
</style>
</head>
<body>

<p>Click on the buttons inside the tabbed menu:</p>

<div id="London" class="tabcontent">
  <h1>London</h1>
  <p>London is the capital city of England.</p>
</div>

<div id="Paris" class="tabcontent">
  <h1>Paris</h1>
  <p>Paris is the capital of France.</p> 
</div>

<div id="Tokyo" class="tabcontent">
  <h1>Tokyo</h1>
  <p>Tokyo is the capital of Japan.</p>
</div>

<div id="Oslo" class="tabcontent">
  <h1>Oslo</h1>
  <p>Oslo is the capital of Norway.</p>
</div>

<button class="tablink" onclick="openCity('London', this, 'red')" id="defaultOpen">London</button>
<button class="tablink" onclick="openCity('Paris', this, 'green')">Paris</button>
<button class="tablink" onclick="openCity('Tokyo', this, 'blue')">Tokyo</button>
<button class="tablink" onclick="openCity('Oslo', this, 'orange')">Oslo</button>

</body>
</html> 
