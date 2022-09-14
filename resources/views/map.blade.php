<!DOCTYPE html>
<html>
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>গুগল ম্যাপে অবস্থান</title>
      <link rel="shortcut icon" href="/favicon.ico">
      <!-- Bootstrap  -->
      <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
      <!-- Fontawesome  -->
      <link rel="stylesheet" href="/fontawesome/css/all.css">
      <!-- Style  -->
      <link rel="stylesheet" href="/css/style.css">
      <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
      <style type="text/css">
         body{background-image:url('/images/mosque1.png');background-repeat:repeat}#map{height:550px;margin-left:126px;border:5px solid #000}#floating-panel{padding:5px;border:1px solid #999;text-align:center;font-family:Roboto,"sans-serif";line-height:30px;position:float;top:5px;left:50%;margin-left:180px;width:350px;z-index:5;background-color:#fff}#latlng{width:500px}
      </style>
   </head>
   <body>
      @include('layouts.navbar')
      <div class="d-flex justify-content-center map-container">
         <div class='col-md-10 text-center map-profile'>
            <div class='row'>
               <div class='col-md-12 text-center'>
                  <h4 style='color:white;padding-top:15px;'><i class="fa-solid fa-map-pin"></i>&nbsp&nbspগুগল ম্যাপে <b><span style='color:#e74c3c'>{{$madrasha}}</span></b> মাদ্রাসার অবস্থান</h4>
               </div>
            </div>
         </div>
      </div>
      <div class='col-md-10 text-center justify-content-center' style='margin-top: 5px;' id="map"></div>
      <script src="/js/jquery.min.js"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=ENTER_GOOGLE_MAP_API_KEY&callback=initMap&v=weekly"
         defer></script>
      <script type="text/javascript">
         function initMap() {
           const map = new google.maps.Map(document.getElementById("map"), {
             zoom: 1,
             center: { lat: {{$latitude}}, lng: {{$longitude}} },
           });
           const geocoder = new google.maps.Geocoder();
           const infowindow = new google.maps.InfoWindow();
         
          $(document).ready(function() {
             geocodeLatLng(geocoder, map, infowindow);
           });
         }
         
         function geocodeLatLng(geocoder, map, infowindow) {
           //const input = document.getElementById("latlng").value;
           //const latlngStr = input.split(",", 2);
           const latlng = {
             lat: {{$latitude}},
             lng: {{$longitude}},
           };
           geocoder
             .geocode({ location: latlng })
             .then((response) => {
               if (response.results[0]) {
                 map.setZoom(11);
         
                 const marker = new google.maps.Marker({
                   position: latlng,
                   map: map,
                 });
         
                 infowindow.setContent(response.results[0].formatted_address);
                 infowindow.open(map, marker);
               } else {
                 window.alert("No results found");
               }
             })
             .catch((e) => window.alert("Geocoder failed due to: " + e));
         }
         window.initMap = initMap;     
      </script>
   </body>
</html>
