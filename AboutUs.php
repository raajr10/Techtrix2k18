<!DOCTYPE html>
<html lang="en">
<head>
  <title>About Us - ISTE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </style>
</head>
<body>
	<div id="image" class="container-fluid">
		<div class="row"><div class="col-sm-3"></div>
			<div class="col-sm-4">
		      <div class="container">
		        <img class="img-responsive" src="isteimage.jpg" alt="Logo" height="400" width="600">
		      </div>
		    </div>
		</div>
	</div>
	<br>
    <div id="about" class="container-fluid">
	  <div class="row">
	    <div class="col-sm-6">
	      <h2>About ISTE</h2><br>
	      <p class="text-justify">ISTE aims at developing not only technical temperament of budding engineers but also overall personality, reasoning and presentation skills.ISTE has a good reputation in the field of technical education and it strives hard in order to cultivate a fraternal spirit among teachers, administrators, technicians, investigators, practitioners and industrialists.In todays world of excessive competition it becomes mandatory that along with technical excellence a person be able to put forth his/her ideas well.</p>
		  <p>This is what ISTE aims at- to develop technical as well as soft skills of a person. Events like TPP, Open Hardware etc. expose the students to the technical field and Debates, Group discussions develop the very needed confidence in each individual. thus ISTE aims at shaping a good individual and a technician at the same time. For more details go to www.isteonline.com</p>
	    </div>
	    <div class="col-sm-6">
		    <div id="googleMap" style="height:400px;width:100%;"></div>
			<script>
			function myMap() {
			var myCenter = new google.maps.LatLng(19.045630, 72.888897);
			var mapProp = {center:myCenter, zoom:16, scrollwheel:false, draggable:false, mapTypeId:google.maps.MapTypeId.ROADMAP};
			var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
			var marker = new google.maps.Marker({position:myCenter});
			marker.setMap(map);
			}
			</script>
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBd2QsmUhRbVwPKlZ_DhJyVBDdyNEHCZZI&callback=myMap"></script>
		</div>
		</div>
	</div>
</body>
</html>