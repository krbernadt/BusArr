<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Public Bus Arival</title>
    <link rel="stylesheet" href="./css/bootstrap.css" />
    <link rel="stylesheet" href="./js/all.min.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="./css/font-awesome.min.css" />
  </head>
  <body>
    <nav class="navbar">
      <div class="navbar-container container">
        <input type="checkbox" name="" id="" />
        <div class="hamburger-lines">
          <span class="line line1"></span>
          <span class="line line2"></span>
          <span class="line line3"></span>
        </div>
        <ul class="menu-items">
          <li>&emsp;<i class="fas fa-route"></i><a href="pilih_rute.php">&emsp;Rute</a></li>
          <li>&emsp;<i class="far fa-calendar-check"></i><a href="jadwal.php">&emsp;Jadwal</a></li>
          <li>&emsp;<i class="far fa-user"></i><a href="profil.php">&emsp;Profil</a></li>
        </ul>
      </div>
    </nav>
    <div class="Menu-track">
      <div class="box1">
        <div class="subbox">NOPOL SB 01</div>
        <div class="box2">Kor 1 (Sekupang - Batam Centre)</div>
      </div>
    </div>
    <div class="box1">
    <div id="map">
    <div id="msg">
    <div>
      <script>
        // Initialize and add the map
        var map;
        function initMap() {
          // The map, centered on Central Park
          const center = { lat: 1.0790361582873025, lng: 104.02831808325529 };
          const options = { zoom: 15, scaleControl: true, center: center };
          map = new google.maps.Map(document.getElementById("map"), options);
          // Locations of landmarks
          const post_1 = { lat: 1.128591286850608, lng: 104.11818695159968 };
          const post_2 = { lat: 1.1244570742894846, lng: 104.11252176913618 };
          // The markers for The Dakota and The Frick Collection
          var mk1 = new google.maps.Marker({ position: post_1, map: map });
          var mk2 = new google.maps.Marker({ position: post_2, map: map });
        }
      </script>
      <!--Load the API from the specified URL -- remember to replace YOUR_API_KEY-->
      <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVNjQ0xxvZuZSljlbol5QxG8Dh_HY3HCQ&callback=initMap"></script>
    </div>
    </div>
    </div>
      </div>
      <div class="box1">
        <div>test</div>
      </div>
  </body>
</html>
