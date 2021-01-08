<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>BooKBooK 위치</title>
<script type="text/javascript" src="https://openapi.map.naver.com/openapi/v3/maps.js?ncpClientId=exg6iuqkfy"></script>
<link rel="stylesheet" type="text/css" href="./css/common.css">
</head>
<body>
<style>
#map {
  width: 500px;
  height: 500px;
  margin: 50px auto;
  text-align: center;
}
#address {
  text-align: center;
  margin: 50px auto;
}
</style> 
<header>
    <?php include "header.php";?>
</header>  
    <div id="map">
      	<script>
              var mapOptions = {
                center: new naver.maps.LatLng(36.6102309,127.493571), zoom:17
              }

              var map = new naver.maps.Map('map', mapOptions)

              var marker = new naver.maps.Marker({
                map: map,
                position: mapOptions.center
              })
        </script>
    </div>
    <div id="address">
      <p>충청북도 청주시 서원구 원마루로 22번길 4</p>
    </div>
<footer>
    <?php include "footer.php";?>
</footer>
</body>
</html>
