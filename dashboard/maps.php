<html lang="fr" nighteye="disabled">

<head>
  <?php session_start();
  if (!isset($_SESSION['UserData']['Username'])) {
    header("location:./auth/login.php");
    exit;
  }
  ?>
  <!--
    Formulaires de Cuisinella Villennes
    HTML 5.1 
    Version 1.4
    © Léo LESIMPLE
    -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Privé">
  <meta name="author" content="Léo LESIMPLE">
  <title>Maps • Cuisinella Villennes</title>

  <link rel="stylesheet" href="./css/app.css">
  <link rel="stylesheet" href="./css/keyframes.css">

  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="57x57" href="./img/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="./img/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="./img/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="./img/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="./img/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="./img/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="./img/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="./img/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="./img/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="./img/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="./img/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./img/favicon/favicon-16x16.png">
  <link rel="manifest" href="./img/favicon/manifest.json">

  <link href="https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.css" rel="stylesheet">
  <script src="https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.js"></script>
  <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.min.js"></script>
  <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.css" type="text/css">
  <script src="./js/mapbox-directions.js"></script>
  <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.0/mapbox-gl-directions.css" type="text/css">
  <script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-language/v1.0.0/mapbox-gl-language.js'></script>

</head>

<body>
  <?php
  include('./assets/nav.php')
  ?>
  <main class="col-12">
    <div id='map' style='width: 100%; height: 100vh; border-radius:0 !important;'></div>
    <script>
      mapboxgl.accessToken = 'pk.eyJ1IjoibGVvbDQ1NiIsImEiOiJja3ByNjJ4ZG8wNDI5MnFwODYwemd3eHgxIn0.__6W_S-kcyNy4uB_mpL7UQ';
      var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [1.98393, 48.9293],
        zoom: 12,
      });

      map.on('load', () => {
        // Set the default atmosphere style
        map.setFog({});
      });

      map.on('load', () => {
        map.addSource('10m-bathymetry-81bsvj', {
          type: 'vector',
          url: 'mapbox://mapbox.9tm8dx88'
        });

        map.addLayer({
            'id': '10m-bathymetry-81bsvj',
            'type': 'fill',
            'source': '10m-bathymetry-81bsvj',
            'source-layer': '10m-bathymetry-81bsvj',
            'layout': {},
            'paint': {
              'fill-outline-color': 'hsla(337, 82%, 62%, 0)',
              // cubic bezier is a four point curve for smooth and precise styling
              // adjust the points to change the rate and intensity of interpolation
              'fill-color': [
                'interpolate',
                ['cubic-bezier', 0, 0.5, 1, 0.5],
                ['get', 'DEPTH'],
                200,
                '#78bced',
                9000,
                '#15659f'
              ]
            }
          },
          'land-structure-polygon'
        );
      });
      /* Given a query in the form "lng, lat" or "lat, lng"
       * returns the matching geographic coordinate(s)
       * as search results in carmen geojson format,
       * https://github.com/mapbox/carmen/blob/master/carmen-geojson.md */
      const coordinatesGeocoder = function(query) {
        // Match anything which looks like
        // decimal degrees coordinate pair.
        const matches = query.match(
          /^[ ]*(?:Lat: )?(-?\d+\.?\d*)[, ]+(?:Lng: )?(-?\d+\.?\d*)[ ]*$/i
        );
        if (!matches) {
          return null;
        }

        function coordinateFeature(lng, lat) {
          return {
            center: [lng, lat],
            geometry: {
              type: 'Point',
              coordinates: [lng, lat]
            },
            place_name: 'Lat: ' + lat + ' Lng: ' + lng,
            place_type: ['coordinate'],
            properties: {},
            type: 'Feature'
          };
        }

        const coord1 = Number(matches[1]);
        const coord2 = Number(matches[2]);
        const geocodes = [];

        if (coord1 < -90 || coord1 > 90) {
          // must be lng, lat
          geocodes.push(coordinateFeature(coord1, coord2));
        }

        if (coord2 < -90 || coord2 > 90) {
          // must be lat, lng
          geocodes.push(coordinateFeature(coord2, coord1));
        }

        if (geocodes.length === 0) {
          // else could be either lng, lat or lat, lng
          geocodes.push(coordinateFeature(coord1, coord2));
          geocodes.push(coordinateFeature(coord2, coord1));
        }

        return geocodes;
      };
      const geocoder = new MapboxGeocoder({
        accessToken: mapboxgl.accessToken,
        language: 'fr-FR',
        mapboxgl: mapboxgl
      });

      // Add the control to the map.
      map.addControl(
        new MapboxGeocoder({
          accessToken: mapboxgl.accessToken,
          localGeocoder: coordinatesGeocoder,
          zoom: 13,
          placeholder: 'Chercher...',
          mapboxgl: mapboxgl,
          reverseGeocode: true

        })
      );
      map.addControl(
        new mapboxgl.GeolocateControl({
          positionOptions: {
            enableHighAccuracy: true
          },
          // When active the map will receive updates to the device's location as it changes.
          trackUserLocation: true,
          // Draw an arrow next to the location dot to indicate which direction the device is heading.
          showUserHeading: true
        })
      );
      map.on('load', () => {
        // Add a new vector tile source with ID 'mapillary'.
        map.addSource('mapillary', {
          'type': 'vector',
          'tiles': [
            'https://tiles.mapillary.com/maps/vtp/mly1_public/2/{z}/{x}/{y}?access_token=MLY|4142433049200173|72206abe5035850d6743b23a49c41333'
          ],
          'minzoom': 6,
          'maxzoom': 12
        });
        map.addLayer({
            'id': 'mapillary', // Layer ID
            'type': 'line',
            'source': 'mapillary', // ID of the tile source created above
            // Source has several layers. We visualize the one with name 'sequence'.
            'source-layer': 'sequence',
            'layout': {
              'line-cap': 'round',
              'line-join': 'round'
            },
            'paint': {
              'line-opacity': 0.6,
              'line-color': 'rgba(53, 175, 109,0)',
              'line-width': 2
            }
          },
          'road-label' // Arrange our new layer beneath this layer
        );
      });
      map.addControl(
        new MapboxDirections({
          accessToken: mapboxgl.accessToken
        }),
        'top-left'
      );
      //lets say you have initialized a mydirections object
      mydirections = L.mapbox.directions();

      //after a route has been retrieved and drawn
      //the distance in meters is available
      // lets say there is only one route availble(route[0])
      console.log(mydirections.directions.routes[0].distance);
      //tadummmmm in meters

      map.addControl(new mapboxgl.NavigationControl());
      map.on('load', () => {
        map.addSource('mapbox-dem', {
          'type': 'raster-dem',
          'url': 'mapbox://mapbox.mapbox-terrain-dem-v1',
          'tileSize': 512,
          'maxzoom': 14
        });
        map.setTerrain({
          'source': 'mapbox-dem',
          'exaggeration': 1.5
        });

        map.addLayer({
          'id': 'sky',
          'type': 'sky',
          'paint': {
            // set up the sky layer to use a color gradient
            'sky-type': 'gradient',
            // the sky will be lightest in the center and get darker moving radially outward
            // this simulates the look of the sun just below the horizon
            'sky-gradient': [
              'interpolate',
              ['linear'],
              ['sky-radial-progress'],
              0.8,
              'rgba(135, 206, 235, 1.0)',
              1,
              'rgba(0,0,0,0.1)'
            ],
            'sky-gradient-center': [0, 0],
            'sky-gradient-radius': 90,
            'sky-opacity': [
              'interpolate',
              ['exponential', 0.1],
              ['zoom'],
              5,
              0,
              22,
              1
            ]
          }
        });
      });
      map.on('load', () => {
        // Insert the layer beneath any symbol layer.
        const layers = map.getStyle().layers;
        const labelLayerId = layers.find(
          (layer) => layer.type === 'symbol' && layer.layout['text-field']
        ).id;

        // The 'building' layer in the Mapbox Streets
        // vector tileset contains building height data
        // from OpenStreetMap.
        map.addLayer({
            'id': 'add-3d-buildings',
            'source': 'composite',
            'source-layer': 'building',
            'filter': ['==', 'extrude', 'true'],
            'type': 'fill-extrusion',
            'minzoom': 15,
            'paint': {
              'fill-extrusion-color': '#aaa',

              // Use an 'interpolate' expression to
              // add a smooth transition effect to
              // the buildings as the user zooms in.
              'fill-extrusion-height': [
                'interpolate',
                ['linear'],
                ['zoom'],
                15,
                0,
                15.05,
                ['get', 'height']
              ],
              'fill-extrusion-base': [
                'interpolate',
                ['linear'],
                ['zoom'],
                15,
                0,
                15.05,
                ['get', 'min_height']
              ],
              'fill-extrusion-opacity': 0.6
            }
          },
          labelLayerId
        );
      });

      const language = new MapboxLanguage();
      map.addControl(language);
    </script>
</body>

</html>