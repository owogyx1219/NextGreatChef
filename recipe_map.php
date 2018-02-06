<?php
    session_start();
    $current_user = $_SESSION["current_username"];
    require 'config.php';
?>
    
<!DOCTYPE html>
<html>

<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>

<body>

<h1>Recipe Map</h1>

<div id="map" style="width:1100px;height:690px;background:yellow"></div>

<script>
function myMap() {
    var mapCanvas = document.getElementById("map");
    var mapOptions = {
        center: new google.maps.LatLng(28, 2), zoom: 2
    };
    var map = new google.maps.Map(mapCanvas, mapOptions);

    var American = {lat:37.09, lng:-95.71}
    var Chinese = {lat:40, lng:116.5}
    var Japanese = {lat:35.7, lng:139.69}
    var Italian = {lat:41.87, lng:12.57}
    var Mexican = {lat:23.63, lng:-102.55}
    var Indian = {lat: 20.59, lng:78.96}
    var Korean = {lat:35.90, lng:127.76}
    var Vietnam = {lat:14.05, lng:108.27}
    var Brazil = {lat:-14.23, lng:-51.92}
    var Argentina = {lat:-38.42, lng:-63.62}
    var Canada = {lat:56.13, lng:-106.35}
    var Russia = {lat:61.52, lng:105.32}
    var UK = {lat:55.38, lng:-3.44}
    var Australia = {lat:-25.28, lng:133.78}
    var Africa = {lat:-4.04, lng:21.76}

    var contentString1 = 
      '<a href="http://nextgreatchef.web.engr.illinois.edu/recipe_american.php">'+
      'List of American Food</a> '+
      '</p>'+
      '</div>'+
      '</div>';

    var contentString2 = 
      '<a href="http://nextgreatchef.web.engr.illinois.edu/recipe_chinese.php">'+
      'List of Chinese Food</a> '+
      '</p>'+
      '</div>'+
      '</div>';

    var contentString3 = 
      '<a href="http://nextgreatchef.web.engr.illinois.edu/recipe_japanese.php">'+
      'List of Japanese Food</a> '+
      '</p>'+
      '</div>'+
      '</div>';   

    var contentString4 = 
      '<a href="http://nextgreatchef.web.engr.illinois.edu/recipe_italian.php">'+
      'List of Italian Food</a> '+
      '</p>'+
      '</div>'+
      '</div>';   

    var contentString5 = 
      '<a href="http://nextgreatchef.web.engr.illinois.edu/recipe_mexican.php">'+
      'List of Mexican Food</a> '+
      '</p>'+
      '</div>'+
      '</div>';  

    var contentString6 = 
      '<a href="http://nextgreatchef.web.engr.illinois.edu/recipe_indian.php">'+
      'List of Indian Food</a> '+
      '</p>'+
      '</div>'+
      '</div>';  

    var contentString7 = 
      '<a href="http://nextgreatchef.web.engr.illinois.edu/recipe_korean.php">'+
      'List of Korean Food</a> '+
      '</p>'+
      '</div>'+
      '</div>';  

    var contentString8 = 
      '<a href="http://nextgreatchef.web.engr.illinois.edu/recipe_vietnam.php">'+
      'List of Vietnam Food</a> '+
      '</p>'+
      '</div>'+
      '</div>';

    var contentString9 = 
      '<a href="http://nextgreatchef.web.engr.illinois.edu/recipe_brazilian.php">'+
      'List of Brazilian Food</a> '+
      '</p>'+
      '</div>'+
      '</div>';

    var contentString10 = 
      '<a href="http://nextgreatchef.web.engr.illinois.edu/recipe_argentinian.php">'+
      'List of Argentinian Food</a> '+
      '</p>'+
      '</div>'+
      '</div>';

    var contentString11 = 
      '<a href="http://nextgreatchef.web.engr.illinois.edu/recipe_canadian.php">'+
      'List of Canadian Food</a> '+
      '</p>'+
      '</div>'+
      '</div>';

    var contentString12 = 
      '<a href="http://nextgreatchef.web.engr.illinois.edu/recipe_russian.php">'+
      'List of Russian Food</a> '+
      '</p>'+
      '</div>'+
      '</div>';     

    var contentString13 = 
      '<a href="http://nextgreatchef.web.engr.illinois.edu/recipe_uk.php">'+
      'List of United Kindom Food</a> '+
      '</p>'+
      '</div>'+
      '</div>';

    var contentString14 = 
      '<a href="http://nextgreatchef.web.engr.illinois.edu/recipe_australian.php">'+
      'List of Australian Food</a> '+
      '</p>'+
      '</div>'+
      '</div>';

    var contentString15 = 
      '<a href="http://nextgreatchef.web.engr.illinois.edu/recipe_african.php">'+
      'List of African Food</a> '+
      '</p>'+
      '</div>'+
      '</div>';

    var infowindow1 = new google.maps.InfoWindow({
        content: contentString1
    });

    var infowindow2 = new google.maps.InfoWindow({
        content: contentString2
    });

    var infowindow3 = new google.maps.InfoWindow({
        content: contentString3
    });

    var infowindow4 = new google.maps.InfoWindow({
        content: contentString4
    });

    var infowindow5 = new google.maps.InfoWindow({
        content: contentString5
    });

    var infowindow6 = new google.maps.InfoWindow({
        content: contentString6
    });

    var infowindow7 = new google.maps.InfoWindow({
        content: contentString7
    });

    var infowindow8 = new google.maps.InfoWindow({
        content: contentString8
    });

    var infowindow9 = new google.maps.InfoWindow({
        content: contentString9
    });

    var infowindow10 = new google.maps.InfoWindow({
        content: contentString10
    });

    var infowindow11 = new google.maps.InfoWindow({
        content: contentString11
    });

    var infowindow12 = new google.maps.InfoWindow({
        content: contentString12
    });

    var infowindow13 = new google.maps.InfoWindow({
        content: contentString13
    });

    var infowindow14 = new google.maps.InfoWindow({
        content: contentString14
    });

    var infowindow15 = new google.maps.InfoWindow({
        content: contentString15
    });

    var marker1 = new google.maps.Marker({
        position: American,
        icon: 'images/american.png',
        //icon: 'https://maxcdn.icons8.com/Color/PNG/24/Food/hamburger-24.png',
        map: map
    });
    
    var marker2 = new google.maps.Marker({
        position: Chinese,
        icon: 'images/china.png',
        //icon: 'https://maxcdn.icons8.com/Color/PNG/24/Food/rice_bowl-24.png',
        map: map
    });

    var marker3 = new google.maps.Marker({
        position: Japanese,
        icon: 'images/japanese.png',
        //icon: 'https://maxcdn.icons8.com/Color/PNG/24/Cultures/sushi-24.png',
        map: map
    });

    var marker4 = new google.maps.Marker({
        position: Italian,
        icon: 'images/italy.png',
        //icon: 'https://maxcdn.icons8.com/Color/PNG/24/Food/spaghetti-24.png',
        map: map
    });

    var marker5 = new google.maps.Marker({
        position: Mexican,
        icon: 'images/mexican.png',
        //icon: 'https://maxcdn.icons8.com/Color/PNG/24/Food/wrap-24.png',
        map: map
    });

    var marker6 = new google.maps.Marker({
        position: Indian,
        icon: 'images/indian.png',
        //icon: 'https://maxcdn.icons8.com/Color/PNG/24/Food/rack_of_lamb-24.png',
        map: map
    });

    var marker7 = new google.maps.Marker({
        position: Korean,
        icon: 'images/korean.png',
        //icon: 'https://maxcdn.icons8.com/Color/PNG/24/Food/paella-24.png',
        map: map
    });

    var marker8 = new google.maps.Marker({
        position: Vietnam,
        icon: 'images/vietnam.png',
        //icon: 'https://maxcdn.icons8.com/Color/PNG/24/Food/noodles-24.png',
        map: map
    });

    var marker9 = new google.maps.Marker({
        position: Brazil,
        icon: 'images/brazil.png',
        //icon: 'https://maxcdn.icons8.com/Color/PNG/24/Food/noodles-24.png',
        map: map
    });

    var marker10 = new google.maps.Marker({
        position: Argentina,
        icon: 'images/argentina.png',
        //icon: 'https://maxcdn.icons8.com/Color/PNG/24/Food/noodles-24.png',
        map: map
    });

    var marker11 = new google.maps.Marker({
        position: Canada,
        icon: 'images/canada.png',
        //icon: 'https://maxcdn.icons8.com/Color/PNG/24/Food/noodles-24.png',
        map: map
    });

    var marker12 = new google.maps.Marker({
        position: Russia,
        icon: 'images/russia.png',
        //icon: 'https://maxcdn.icons8.com/Color/PNG/24/Food/noodles-24.png',
        map: map
    });

    var marker13 = new google.maps.Marker({
        position: UK,
        icon: 'images/uk.png',
        //icon: 'https://maxcdn.icons8.com/Color/PNG/24/Food/noodles-24.png',
        map: map
    });

    var marker14 = new google.maps.Marker({
        position: Australia,
        icon: 'images/australia.png',
        //icon: 'https://maxcdn.icons8.com/Color/PNG/24/Food/noodles-24.png',
        map: map
    });

    var marker15 = new google.maps.Marker({
        position: Africa,
        icon: 'images/africa.png',
        map: map
    });

    marker1.addListener('click', function() {
        infowindow1.open(map, marker1);
    });

    marker2.addListener('click', function() {
        infowindow2.open(map, marker2);
    });

    marker3.addListener('click', function() {
        infowindow3.open(map, marker3);
    });

    marker4.addListener('click', function() {
        infowindow4.open(map, marker4);
    });

    marker5.addListener('click', function() {
        infowindow5.open(map, marker5);
    });

    marker6.addListener('click', function() {
        infowindow6.open(map, marker6);
    });

    marker7.addListener('click', function() {
        infowindow7.open(map, marker7);
    });

    marker8.addListener('click', function() {
        infowindow8.open(map, marker8);
    });

    marker9.addListener('click', function() {
        infowindow9.open(map, marker9);
    });

    marker10.addListener('click', function() {
        infowindow10.open(map, marker10);
    });

    marker11.addListener('click', function() {
        infowindow11.open(map, marker11);
    });

    marker12.addListener('click', function() {
        infowindow12.open(map, marker12);
    });

    marker13.addListener('click', function() {
        infowindow13.open(map, marker13);
    });

    marker14.addListener('click', function() {
        infowindow14.open(map, marker14);
    });

    marker15.addListener('click', function() {
        infowindow15.open(map, marker15);
    });
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVnUzYcMoWpPGNxhg4goRfGvTPAETY8Gg&callback=myMap"></script>


<a href="https://icons8.com">Icon pack by Icons8</a>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

</body>
</html>
