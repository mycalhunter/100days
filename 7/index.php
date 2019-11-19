<?
require_once 'api.php';
//$ip = '168.192.0.1'; // your ip address here
$ip = $_SERVER['REMOTE_ADDR']; //get client IP
$query = @unserialize(file_get_contents('http://ip-api.com/php/'.$ip)); //get data about IP

function get_the_browser()
{
    if(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false)
      return 'Internet explorer';
    elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Trident') !== false)
      return 'Internet explorer';
    elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox') !== false)
      return 'Mozilla Firefox';
    elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') !== false)
      return 'Google Chrome';
    elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mini') !== false)
      return "Opera Mini";
    elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Opera') !== false)
      return "Opera";
    elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Safari') !== false)
      return "Safari";
    else
      return 'Other';
 }
 ?>
   <?php
 /*
  array (
    'status' => 'success',
    'country' => 'COUNTRY',
    'countryCode' => 'COUNTRY CODE',
    'region' => 'REGION CODE',
    'regionName' => 'REGION NAME',
    'city' => 'CITY',
    'zip' => 'ZIP CODE',
    'lat' => 'LATITUDE',
    'lon' => 'LONGITUDE',
    'timezone' => 'TIME ZONE',
    'isp' => 'ISP NAME',
    'org' => 'ORGANIZATION NAME',
    'as' => 'AS NUMBER / NAME',
    'query' => 'IP ADDRESS USED FOR QUERY',
  );
 */
 ?>

<!DOCTYPE html>
<html>
<head>
  <title>Location Info | iDevHunter</title>
    <meta name="viewport" content="initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="container">
    <h1>GeoLocation Information</h1>
    <p>This information is gathered from your IP Address and Internet Browser</p>
    <?php
      if($query && $query['status'] == 'success')
      {
          echo '<div class="label">IP Address:</div>' . $ip . '<a class="compare" target="_blank" href="https://www.whatsmyip.org/">(Compare)</a>';
          echo '<br />';
          echo '<div class="label">City, State, Country:</div>' . $query['city'] . ', ' . $query['region'] . ', ' . $query['country'];
          echo '<br />';
          echo '<div class="label">Latitude / Longitude:</div>' . $query['lat'] . ', ' . $query['lon'];
          echo '<br />';
          echo '<div class="label">Browser:</div>' . get_the_browser();
          echo '<br />';
          echo '<div class="label">Screen Resolution:</div><span id="resolution"></span>';
      }
    ?>
    
    <h2>Google Maps API Javascript</h2>
    <!-- get google maps api -->
    <div id="map"></div>
    <script>
      var map;
      var LatLng = {lat: <? echo $query['lat']; ?>, lng: <? echo $query['lon']; ?>};
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: LatLng,
          zoom: 10
        });
        var marker = new google.maps.Marker({
          position: LatLng,
          map: map,
          draggable: true,
          animation: google.maps.Animation.DROP,
          title: "You are near this country!"
        });
      }
    </script>
    <script src="<? echo $api; ?>"
    async defer></script>    
    
    <!-- get screen resolution -->
    <script>
      document.getElementById("resolution").innerHTML = (screen.width + "x" + screen.height);
    </script>
</body>
</html>