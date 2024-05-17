<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern UI with Bootstrap and Google Maps</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Your custom styles -->
    <style>
        /* Custom styles can be added here */
        #map {
            margin-bottom: 20px; /* Adding some spacing below the map */
        }
    </style>
</head>
<body>

<div class="container mt-4">
    <div id="container">
        <div id="map" class="card">
            <div id="googleMap" style="width:100%;height:400px;"></div>
        </div>
    </div>
</div>

<!-- Include your custom script.js for map initialization -->
<script src="{{ asset('js/script.js') }}"></script>

<!-- Load Google Maps API with your API key and initialize map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCMXOKfTaPb8Zw75sVG8b_jFYYOgzPk7TY&callback=initMap"></script>

</body>
</html>
