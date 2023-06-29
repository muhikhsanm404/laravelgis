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
            height: 250px;

        }

        h1 {
            color: red;
        }
    </style>

</head>

<body>

    @extends('layouts.app')

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
                    <h1 align="center"> Selamat Hari Raya Idul Adha 2023 <h1>
                            <div id="map"></div>
                            <hr>
                            <script>
                                var map = L.map('map').setView([-8.099095988658021, 112.18379475618751], 18);

                                // Hybrid: s, h;
                                // Satellite: s;
                                // Streets: m;
                                // Terrain: p;

                                // var Esri_WorldImagery = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
                                //     attribution: 'Tiles &copy; Esri &mdash; Source: Esri, i-cubed, USDA, USGS, AEX, GeoEye, Getmapping, Aerogrid, IGN, IGP, UPR-EGP, and the GIS User Community'
                                // }).addTo(map);

                                L.tileLayer('http://{s}.google.com/vt?lyrs=s&x={x}&y={y}&z={z}', {
                                    maxZoom: 20,
                                    subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
                                }).addTo(map);

                                //menambahkan marker
                                var maker = L.marker([-8.099095988658021, 112.18379475618751]).addTo(map).on('click', function(e) {
                                    alert(e.LatLng);
                                });

                                maker.bindPopup("<b>hello siberman!</b></br>I am a popup.").openPopup();



                                //custome marker
                                // var greenIcon = L.icon({
                                //     iconUrl: 'leaf-green.png',
                                //     shadowUrl: 'leaf-shadow.png',

                                //     iconSize: [38, 95], // size of the icon
                                //     shadowSize: [50, 64], // size of the shadow
                                //     iconAnchor: [22, 94], // point of the icon which will correspond to marker's location
                                //     shadowAnchor: [4, 62], // the same for the shadow
                                //     popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
                                // });

                                // L.marker([-8.099095988658021, 112.18379475618751], {
                                //     icon: greenIcon
                                // }).addTo(map);

                                //POLYLINE

                                // create a red polyline from an array of LatLng points
                                var latlngs = [
                                    [
                                        -8.09866951317727,
                                        112.1841119508203
                                    ],
                                    [

                                        -8.099301738167455,
                                        112.1840255884157
                                    ],
                                    [
                                        -8.099343007888677,
                                        112.1832146068254

                                    ],
                                    [
                                        -8.098799533949148,
                                        112.18269351012736

                                    ]
                                ];

                                var polyline = L.polyline(latlngs, {
                                    color: 'pink'
                                }).addTo(map);

                                polyline.setStyle({
                                    color: 'red',
                                    weight: 5,
                                    // lineCap: 'square'
                                });

                                // zoom the map to the polyline
                                map.fitBounds(polyline.getBounds());

                                polyline.on('click', (e) => {
                                    alert();
                                    polyline.setStyle({
                                        color: 'yellow',
                                        weight: 5,

                                    });

                                })



                                // L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                                //     maxZoom: 19,
                                //     attribution: 'Map data &copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
                                //         'Imagery &copy <a href="http://www.mapbox.com/">Mapbox</a>',
                                //     id: 'mapbox/streets-v11',
                                //     tileSize: 512,
                                //     zoomOffset: -1
                                // }).addTo(map);
                            </script>

                            <div class="card-body">
                                @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                                @endif

                                {{ __('You are logged in!') }}
                            </div>

                            <div class="card-footer">
                                <a href="{{route('logout')}}" class="btn btn-danger">Logout</a>

                            </div>
                </div>
            </div>
        </div>
        <footer>
            <p align=center>&copy Muh Ikhsan</p>
        </footer>
    </div>
    @endsection
</body>


</html>