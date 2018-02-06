<?php
    session_start();
    $current_user = $_SESSION["current_username"];
    require 'config.php';
    $epr = '';
?>


<!DOCTYPE html>
<html>
<body>

<h1>Recipe Map</h1>

<div id="map" style="width:1100px;height:690px;background:yellow"></div>

<script>
function myMap() {
  var mapCanvas = document.getElementById("map");
  var mapOptions = {
    center: new google.maps.LatLng(48, 2), zoom: 2
  };
  var map = new google.maps.Map(mapCanvas, mapOptions);

  var uluru = {lat: -25.363, lng: 131.044};

  var infowindow = new google.maps.InfoWindow({
      content: '<IMG BORDER="0" ALIGN="Left" SRC="images/blog.jpg" WIDTH="100" HEIGHT="60"> Beef'
    });

  var marker = new google.maps.Marker({
    position: uluru,
    label: 'A',
    map: map
  });
  
  marker.addListener('click', function() {
    infowindow.open(map, marker);
  });
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVnUzYcMoWpPGNxhg4goRfGvTPAETY8Gg&callback=myMap"></script>

  <?php
    $query = mysql_query("SELECT * FROM Recipe")or die(mysql_error());
    while($row = mysql_fetch_array($query))
    {
      $recipe_name = $row[0];
      $recipe_image = $row[8];

      echo "<script language='javascript'> var info_content = $recipe_name; infowindow.setContent(info_content); </script>";

  ?>


<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

</body>
</html>

