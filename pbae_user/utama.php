<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Public Bus Arival</title>
    <link rel="stylesheet" href="./css/bootstrap.css"/>
    <link rel="stylesheet" href="./js/all.min.css"/>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="./css/font-awesome.min.css"/>
</head>
<body>
    <nav class="navbar">
      <div class="navbar-container container">
          <input type="checkbox" name="" id="">
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
  
  <div class="Menu-Utama3">
      <div class="box1">
        <div class="subbox">NOPOL SB 01</div>
        <div class="box2">Kor 1 (Sekupang - Batam Centre)</div>
      </div>
  </div>
    
  <div class="Menu-Utama">
    <div class="row" style="margin-right :0px !important" style="--bs-gutter-x:none !important">
      <div class="col-md-12">
        <div id="map" style="height:400px; width:100%;"></div>
        <div class="maps" style="text-align: center;" class="img-fluid" style="border-radius: 10px;">  
        <script style="text-align: center" class="img-fluid" style="border-radius: 10px">
        // Initialize and add the map
        var map;
        function initMap() {
          // The map, centered on Central Park
          const center = { lat: 1.110100  , lng: 103.993046 };
          const options = { zoom: 11, scaleControl: true, center: center };
          map = new google.maps.Map(document.getElementById("map"), options);
          // Locations of landmarks
          const post_1 = { lat: 1.126401, lng: 103.928094 };
          const post_2 = { lat: 1.118937, lng: 103.937442 };
          const post_3 = { lat: 1.116203, lng: 103.940449};
          const post_4 = { lat: 1.117619, lng: 104.00385 };
          const post_5 = { lat: 1.125524, lng: 104.029118 };
          const post_6 = { lat: 1.129198, lng: 104.056921 };
          
          // The markers for The Dakota and The Frick Collection
          var mk1 = new google.maps.Marker({ position: post_1, map: map });
          var mk2 = new google.maps.Marker({ position: post_2, map: map });
          var mk3 = new google.maps.Marker({ position: post_3, map: map });
          var mk4 = new google.maps.Marker({ position: post_4, map: map });
          var mk5 = new google.maps.Marker({ position: post_5, map: map });
          var mk6 = new google.maps.Marker({ position: post_6, map: map });
        }
      </script>
      <!--Load the API from the specified URL -- remember to replace YOUR_API_KEY-->
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVNjQ0xxvZuZSljlbol5QxG8Dh_HY3HCQ&callback=initMap"></script>
    </div>
      
      </div>
    </div>
  </div>
    
  <div class="Menu-Utama3">
      <div class="col" >
        <div class="panggil_est1">
          <div class="time"><a>Transfer Point Sekupang - Mega Mall</a></div>
          <div class="est">Waktu kedatangan bus : 7 menit</div>
          <div class="est">Waktu perjalanan : 34 menit</div>
        </div>
      </div>
    </div>
</body>
</html>