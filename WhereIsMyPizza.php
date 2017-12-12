<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">  
        <link rel="stylesheet" href="css/style.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>  
		<script type="text/javascript"  src="js/LoadFile.js"></script> 
        <title>Where is My Pizza</title>

        <style>
            #map {
              height: 300px;
              width: 80%;
              max-height: 80%;

              margin-left: 10%;
              margin-right: 10%;

             }
             #ordertext {
               font-size: 100%;
               margin: 2%;
               color: #f3a816;
               text-align: left;
               text-align: center;
               margin-left: 10%;
              }
        </style>

        <!--animate-->
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.0/animate.min.css">
        <link rel="stylesheet" type="text/css" href="css/animate.css" />
        <!--jquery-->
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>  
        <!--waypoints-->
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.4/waypoints.min.js"></script>
        <script src="js/waypoints.js" type="text/javascript"></script>
        <!--fonts-->
        <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine"><!--pizza-->
        <link href="https://fonts.googleapis.com/css?family=Timmana" rel="stylesheet">
        <!--css-->
        <link rel="stylesheet" type="text/css" href="css/style_menu.css"/>	
        
    </head>
    <body> 
            <!--  HEADER SECTION -->
            <?php include 'header.php';?>
            <!--Remaining section-->
            <!-- Continue Coding here -->
            <div id="ordertext"> Order NO.##123456 </br></div>
            
            <div id="map" align="center" valign="center"></div>
            <script>
              function initMap() {
                var position = {lat: 42.339244, lng: -71.090835};
                var map = new google.maps.Map(document.getElementById('map'), {
                  zoom: 15,
                  center: position
                });  

                var contentString = 'We Will be there in 10 minutes.';
                var infowindow = new google.maps.InfoWindow({
                  content: contentString
                  
                  });
                var marker = new google.maps.Marker({
                  position: position,
                  map: map
                });
                marker.addListener('click', function() {
                  infowindow.open(map, marker);
                });
                infowindow.open(map,marker);
              }
            </script>

            <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7L9U76qc4yzpJCBz1hSplChJxB7zkRlI&callback=initMap">
            </script>
            </div>

            <div id="ordertext"> Driver Phone Number: 123-456-789 </br></div>
            <div id="inner-wrapper">
              <section class="one-third"></section>     
              <section class="one-third"></section>
            </div>  
            <div class="clearfix"></div>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
        <script  src="js/CartFunction.js"></script> 
        <script >onlinePizzaCart.displayCarttotal();</script>
    </body>
</html>