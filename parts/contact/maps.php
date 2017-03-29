<div class="contact-maps-section">
  <div class="wrap-maps">
    <div class="left-map">
      <div id="left-map"></div>
    </div>
    <div class="right-map">
      <div id="right-map"></div>
    </div>
  </div>
</div>


<script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKus-6grL7OZgnEogkvih8hiRGUhXjPjU"></script>

<script type="text/javascript">
  // When the window has finished loading create our google map below
  google.maps.event.addDomListener(window, 'load', init);

  function init() {

    var styles = [{
      "featureType": "all",
      "elementType": "labels.text.fill",
      "stylers": [{"saturation": 36}, {"color": "#333333"}, {"lightness": 40}]
    }, {
      "featureType": "all",
      "elementType": "labels.text.stroke",
      "stylers": [{"visibility": "on"}, {"color": "#ffffff"}, {"lightness": 16}]
    }, {
      "featureType": "all",
      "elementType": "labels.icon",
      "stylers": [{"visibility": "off"}]
    }, {
      "featureType": "administrative",
      "elementType": "geometry.fill",
      "stylers": [{"color": "#fefefe"}, {"lightness": 20}]
    }, {
      "featureType": "administrative",
      "elementType": "geometry.stroke",
      "stylers": [{"color": "#fefefe"}, {"lightness": 17}, {"weight": 1.2}]
    }, {
      "featureType": "landscape",
      "elementType": "geometry",
      "stylers": [{"color": "#f5f5f5"}, {"lightness": 20}]
    }, {
      "featureType": "poi",
      "elementType": "geometry",
      "stylers": [{"color": "#f5f5f5"}, {"lightness": 21}]
    }, {
      "featureType": "poi.park",
      "elementType": "geometry",
      "stylers": [{"color": "#dedede"}, {"lightness": 21}]
    }, {
      "featureType": "road.highway",
      "elementType": "geometry.fill",
      "stylers": [{"color": "#ffffff"}, {"lightness": 17}]
    }, {
      "featureType": "road.highway",
      "elementType": "geometry.stroke",
      "stylers": [{"color": "#ffffff"}, {"lightness": 29}, {"weight": 0.2}]
    }, {
      "featureType": "road.arterial",
      "elementType": "geometry",
      "stylers": [{"color": "#ffffff"}, {"lightness": 18}]
    }, {
      "featureType": "road.local",
      "elementType": "geometry",
      "stylers": [{"color": "#ffffff"}, {"lightness": 16}]
    }, {
      "featureType": "transit",
      "elementType": "geometry",
      "stylers": [{"color": "#f2f2f2"}, {"lightness": 19}]
    }, {"featureType": "water", "elementType": "geometry", "stylers": [{"color": "#e9e9e9"}, {"lightness": 17}]}];


    leftMap();
    rightMap();

    function leftMap() {
      var mapOptions = {
        zoom: 15,
        center: new google.maps.LatLng(42.424254, 19.272448),
        styles: styles
      };
      var mapElement = document.getElementById('left-map');
      var map = new google.maps.Map(mapElement, mapOptions);
      var marker = new google.maps.Marker({
        position: new google.maps.LatLng(42.424254, 19.272448),
        map: map,
        icon: '/images/pin-o.png',
        title: 'Snazzy!'
      });
    }

    function rightMap() {
      var mapOptions = {
        zoom: 15,
        center: new google.maps.LatLng(42.446284, 19.250572),
        styles: styles
      };
      var mapElement = document.getElementById('right-map');
      var map = new google.maps.Map(mapElement, mapOptions);
      var marker = new google.maps.Marker({
        position: new google.maps.LatLng(42.446284, 19.250572),
        map: map,
        icon: '/images/pin-g.png',
        title: 'Snazzy!'
      });
    }

  }
</script>
