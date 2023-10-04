<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Static Template</title>
    <script src="https://unpkg.com/maplibre-gl@2.1.9/dist/maplibre-gl.js"></script>
    <link
      href="https://unpkg.com/maplibre-gl@2.1.9/dist/maplibre-gl.css"
      rel="stylesheet"
    />
    <style>
      body {
        margin: 0px;
        font-family: Arial, Helvetica, sans-serif;
      }
      #map {
        top: 48px;
        position: absolute;
        height: 94.5vh;
        width: 100%;
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
    </style>
  </head>
  <body>
  <div class="topnav">
  <a class="active" href="home.php">RockZy</a>
  <a href="Rock.php">Rock</a>
  <a href="map.php">Map</a>
  <a class="right" href="#User">User</a>
</div>
    <div id="map"></div>
  </body>
  <script>
    var map = new maplibregl.Map({
      container: "map",
      style:
        "https://cloud.vallarismaps.com/core/api/styles/1.0-beta/styles/65182fd76f50689e08c02e32?api_key=oCauOPc8hv7M5ftldqvBgKA4gaW2e0GwdB7W9ylzdXtqBbNd9k4UQHMtzctbNEOY",
      center: [99.328406,9.139775],
      zoom: 10,
      pitch: 0,
      bearing: 0,
    });
    map.on("load", function () {
      map.addLayer({
        id: "geojson-data-test",
        type: "circle",
        source: {
          type: "geojson",
          data:
            "https://cloud.vallarismaps.com/core/api/features/1.0/collections/6518359a6f50689e08c02fa9/items?api_key=oCauOPc8hv7M5ftldqvBgKA4gaW2e0GwdB7W9ylzdXtqBbNd9k4UQHMtzctbNEOY"
        },
      paint:{
        "circle-color":"#AC4029"
      }
     });
      map.on("click","geojson-data-test",function(e){
        new maplibregl.Popup()
        .setLngLat(e.lngLat)
        .setHTML(`<h3>สถานที่ : </h3><p>${e.features[0].properties.name}</p>
        <h2>จังหวัด : </h2><p>${e.features[0].properties.province}</p>`)
        .addTo(map);
     });
    });
  </script>
</html>
