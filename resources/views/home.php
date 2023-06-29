<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LATIHAN WEB GIS</title>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <script src="https://unpkg.com/esri-leaflet@3.0.10/dist/esri-leaflet.js"></script>

    <script src="http://unpkg.com/leaflet@latest/dist/leaflet.js"></script>
    <script src="/resources/js/leatflet-provider.js"></script>

    <style>
        #map {
            height: 500px;
        }
    </style>

</head>

<body>
    <h1 align="center"> Selamat Hari Raya Idul Adha 2023 <h1>
            <div id="map"></div>
</body>
<script>
    var map = L.map('map').setView([-8.099095988658021, 112.18379475618751], 18);

    var Esri_WorldImagery = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
        attribution: 'Tiles &copy; Esri &mdash; Source: Esri, i-cubed, USDA, USGS, AEX, GeoEye, Getmapping, Aerogrid, IGN, IGP, UPR-EGP, and the GIS User Community'
    }).addTo(map);

    // L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    //     maxZoom: 19,
    //     attribution: 'Map data &copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
    //         'Imagery &copy <a href="http://www.mapbox.com/">Mapbox</a>',
    //     id: 'mapbox/streets-v11',
    //     tileSize: 512,
    //     zoomOffset: -1
    // }).addTo(map);
</script>
<footer>
    <p>&copy PT. Ikhsan Gans.</p>
</footer>

</html>