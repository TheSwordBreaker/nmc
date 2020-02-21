<?php
include_once 'header.php';
include_once 'locations_model.php';
?>
<div id="map"></div>
<script>
  var map;
  var marker;
  var infowindow;
  var red_icon=
  var purple_icon=<?php get_all_locations()?>
  function initmap()
  {
      var giza={lat:46.87916, lng:-3.32910};
      infowindow=new google.maps.Infowindow();
      map=new google.maps,Map(document.getElementById('map'),{
          center :giza,
          zoom:7
      });

  }gg