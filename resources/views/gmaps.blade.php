<!DOCTYPE html>
<html>
<head>
	<title>Laravel 5 - Multiple markers in google map using gmaps.js</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="http://maps.google.com/maps/api/js"></script>
	{{-- <script src="https://yandex.com/maps/api/js"></script> --}}
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>


  	<style type="text/css">
    	#mymap {
      		border:1px solid red;
      		width: 800px;
      		height: 500px;
    	}
  	</style>


</head>
<body>


  <h1>Laravel 5 - Multiple markers in google map using gmaps.js</h1>


  <div id="mymap"></div>


  <script type="text/javascript">


    var locations = @php print_r(json_encode($locations)) @endphp;


    var mymap = new GMaps({
      el: '#mymap',
      lat: 21.170240,
      lng: 72.831061,
      zoom:6
    });
    var mymap = new GMaps({
      el: '#mymap',
      lat: 41.311081,
      lng: 69.240562,
      zoom:6
    });
    var mymap = new GMaps({
      el: '#mymap',
      lat: 40.747484, // google
      lng: 72.3595719, // google
    //   lat: 40.746957, yandex
    //   lng: 72.356848, yandex
      zoom:6
    });


    $.each( locations, function( index, value ){
	    mymap.addMarker({
	      lat: value.lat,
	      lng: value.lng,
	      title: value.city,
	      click: function(e) {
	        alert('This is '+value.city+', IT Firm in Andijan.');
	      }
	    });
   });


  </script>


</body>
</html>