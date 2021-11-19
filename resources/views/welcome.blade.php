<!DOCTYPE html>
<html>
<head>
  <title>Hotel Template</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
  </style>
</head>

<body class="w3-light-grey">
  <!-- Navigation Bar -->
  <div class="w3-bar w3-white w3-large">
    <a href="#" class="w3-bar-item w3-button w3-red w3-mobile"><i class="fa fa-bed w3-margin-right"></i>Logo</a>
    <a href="rooms" class="w3-bar-item w3-button w3-mobile">Rooms</a>
    <a href="about" class="w3-bar-item w3-button w3-mobile">About</a>
    <a href="contact" class="w3-bar-item w3-button w3-mobile">Contact</a>
    <a href="contact" class="w3-bar-item w3-button w3-right w3-light-grey w3-mobile">Book Now</a>
  </div>
  <!-- Header -->
  <header class="w3-display-container w3-content" style="max-width:1500px;">
    <img class="w3-image" src="img/logo.jpg" alt="The Hotel" style="min-width:1000px" width="1500" height="800">
    <div class="w3-display-left w3-padding w3-col l6 m8">
      <div class="w3-container w3-red">
        <h2><i class="fa fa-bed w3-margin-right"></i>Hotel Name</h2>
      </div>
      <div class="w3-container w3-white w3-padding-16">
        <form action="/action_page.php" target="_blank">
          <div class="w3-row-padding" style="margin:0 -16px;">
            <div class="w3-half w3-margin-bottom">
              <label><i class="fa fa-calendar-o"></i> Check In</label>
              <input class="w3-input w3-border" type="text" placeholder="DD MM YYYY" name="CheckIn" required>
            </div>
            <div class="w3-half">
              <label><i class="fa fa-calendar-o"></i> Check Out</label>
              <input class="w3-input w3-border" type="text" placeholder="DD MM YYYY" name="CheckOut" required>
            </div>
          </div>
          <div class="w3-row-padding" style="margin:8px -16px;">
            <div class="w3-half w3-margin-bottom">
              <label><i class="fa fa-male"></i> Adults</label>
              <input class="w3-input w3-border" type="number" value="1" name="Adults" min="1" max="6">
            </div>
            <div class="w3-half">
              <label><i class="fa fa-child"></i> Kids</label>
            <input class="w3-input w3-border" type="number" value="0" name="Kids" min="0" max="6">
            </div>
          </div>
          <button class="w3-button w3-dark-grey" type="submit"><i class="fa fa-search w3-margin-right"></i> Search availability</button>
        </form>
      </div>
    </div>
  </header>

  <!-- Add Google Maps -->
  <script>
  function myMap() {
    myCenter=new google.maps.LatLng(41.878114, -87.629798);
    var mapOptions= {
      center:myCenter,
      zoom:12, scrollwheel: false, draggable: false,
      mapTypeId:google.maps.MapTypeId.ROADMAP
    };
    var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

    var marker = new google.maps.Marker({
      position: myCenter,
    });
    marker.setMap(map);
  }
  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
  <!--
  To use this code on your website, get a free API key from Google.
  Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
  -->
</body>
</html>