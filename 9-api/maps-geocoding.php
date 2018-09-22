<?php
echo file_get_contents("https://maps.googleapis.com/maps/api/geocode/json?address=1600+Amphitheatre+Parkway,+Mountain+View,+CA&key=AIzaSyCqYivhZzvG3Wzd8_cu0Uq8k2rTjfZ1654");

?>

<html>
    <head>
        <title>Geocoding einer Adresse</title>
    </head>

    <body>
        <script>
        src="https://code.jquery.com/jquery-3.3.1.min.js";
        </script>

        <script type="text/javascript">
            var position = {};

            $.ajax({
                url:"https://maps.googleapis.com/maps/api/geocode/json?address=1600+Amphitheatre+Parkway,+Mountain+View,+CA&key=AIzaSyCqYivhZzvG3Wzd8_cu0Uq8k2rTjfZ1654",
                type: "GET",
                success: function(data){
                
                    $.each(data["results"][0]["address_components"], function(key, value){

                        if(value["types"][0] == "country"){

                            alert(value["long_name"]);
                        }

                    })
                }
            })
        </script>
    </body>
</html>