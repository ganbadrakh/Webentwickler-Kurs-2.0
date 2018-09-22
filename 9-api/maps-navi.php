<!DOCTYPE html>
<html>
  <head>
    <title>Navi</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 100%;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>
     
      function initMap() {

        var vienna = {lat: 48.210033, long: 16.363449};
        var hallstatt = {lat:47.562233, long: 13.649262}

        var map = new google.maps.Map(document.getElementById('map'), {
          center: vienna,
          scrollwheel: false,
          zoom: 7
        });

        var directionsDisplay = new google.maps.DirectionsRenderer({
            map: map
        });
        
        // Set destination, origin, and travel mode.
        var request = {
            destination: hallstatt,
            origin: vienna,
            travelMode: google.maps.TravelMode.DRIVING
        };

        // Pass the directions request to the direction service.
        var directionsService = new google.maps.DirectionsService();
        directionsService.route(request, function(response, status){
            if(status == google.maps.DirectionsStatus.OK) {
                // Display the route on map.
                directionsDisplay.setDirections(response);
            }
        });

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1AVbyRft4KjQfIqfvMBxUv9Qn38j8n7g&callback=initMap"
    async defer></script>
  </body>
</html>