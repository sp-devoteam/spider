<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Heatmaps</title>
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 100%;
      }
      #floating-panel {
        position: absolute;
        top: 10px;
        left: 25%;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
        text-align: center;
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
      }
      #floating-panel {
        background-color: #fff;
        border: 1px solid #999;
        left: 25%;
        padding: 5px;
        position: absolute;
        top: 10px;
        z-index: 5;
      }
    </style>
  </head>

  <body>
    <div id="floating-panel">
      <button onclick="toggleHeatmap()">Toggle Heatmap</button>
      <button onclick="changeGradient()">Change gradient</button>
      <button onclick="changeRadius()">Change radius</button>
      <button onclick="changeOpacity()">Change opacity</button>
    </div>
    <div id="map"></div>
    <script>

      // This example requires the Visualization library. Include the libraries=visualization
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=visualization">

      var map, heatmap;

      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: {lat: 51.1481, lng: -0.190278},
          mapTypeId: 'roadmap'
        });

        heatmap = new google.maps.visualization.HeatmapLayer({
          data: getPoints(),
          map: map,
          radius: 40
        });
      }

      function toggleHeatmap() {
        heatmap.setMap(heatmap.getMap() ? null : map);
      }

      function changeGradient() {
        var gradient = [
          'rgba(0, 255, 255, 0)',
          'rgba(0, 255, 255, 1)',
          'rgba(0, 191, 255, 1)',
          'rgba(0, 127, 255, 1)',
          'rgba(0, 63, 255, 1)',
          'rgba(0, 0, 255, 1)',
          'rgba(0, 0, 223, 1)',
          'rgba(0, 0, 191, 1)',
          'rgba(0, 0, 159, 1)',
          'rgba(0, 0, 127, 1)',
          'rgba(63, 0, 91, 1)',
          'rgba(127, 0, 63, 1)',
          'rgba(191, 0, 31, 1)',
          'rgba(255, 0, 0, 1)'
        ]
        heatmap.set('gradient', heatmap.get('gradient') ? null : gradient);
      }

      function changeRadius() {
        heatmap.set('radius', heatmap.get('radius') ? 20 : 40);
      }

      function changeOpacity() {
        heatmap.set('opacity', heatmap.get('opacity') ? null : 0.2);
      }

      // Heatmap data: 500 Points
      function getPoints() {
        return [
new google.maps.LatLng(40.4936,-3.56676),
new google.maps.LatLng(51.1481,-0.190278),
new google.maps.LatLng(39.8626,4.21865),
new google.maps.LatLng(51.1481,-0.190278),
new google.maps.LatLng(53.4213,-6.27007),
new google.maps.LatLng(51.1481,-0.190278),
new google.maps.LatLng(60.3172,24.9633),
new google.maps.LatLng(51.4775,-0.461389),
new google.maps.LatLng(40.4936,-3.56676),
new google.maps.LatLng(51.1481,-0.190278),
new google.maps.LatLng(36.6749,-4.49911),
new google.maps.LatLng(51.1481,-0.190278),
new google.maps.LatLng(52.3086,4.76389),
new google.maps.LatLng(51.4775,-0.461389),
new google.maps.LatLng(53.4213,-6.27007),
new google.maps.LatLng(51.1481,-0.190278),
new google.maps.LatLng(59.6519,17.9186),
new google.maps.LatLng(51.1481,-0.190278),
new google.maps.LatLng(60.3172,24.9633),
new google.maps.LatLng(60.1222,19.8982),
new google.maps.LatLng(60.3172,24.9633),
new google.maps.LatLng(51.4775,-0.461389),
new google.maps.LatLng(28.4527,-13.8638),
new google.maps.LatLng(51.1481,-0.190278),
new google.maps.LatLng(41.2971,2.07846),
new google.maps.LatLng(51.1481,-0.190278),
new google.maps.LatLng(33.8209,35.4884),
new google.maps.LatLng(51.4775,-0.461389),
new google.maps.LatLng(57.6628,12.2798),
new google.maps.LatLng(59.6519,17.9186),
new google.maps.LatLng(62.5281,17.4439),
new google.maps.LatLng(57.6628,12.2798),
new google.maps.LatLng(59.6519,17.9186),
new google.maps.LatLng(62.5281,17.4439),
new google.maps.LatLng(57.6628,12.2798),
new google.maps.LatLng(59.6519,17.9186),
new google.maps.LatLng(62.5281,17.4439),
new google.maps.LatLng(57.6628,12.2798),
new google.maps.LatLng(59.3544,17.9417),
new google.maps.LatLng(62.5281,17.4439),
new google.maps.LatLng(59.3544,17.9417),
new google.maps.LatLng(57.6628,12.2798),
new google.maps.LatLng(60.3172,24.9633),
new google.maps.LatLng(57.6628,12.2798),
new google.maps.LatLng(59.3544,17.9417),
new google.maps.LatLng(57.6628,12.2798),
new google.maps.LatLng(50.0264,8.54313),
new google.maps.LatLng(50.1008,14.26),
new google.maps.LatLng(50.9014,4.48444),
new google.maps.LatLng(57.6628,12.2798),
new google.maps.LatLng(50.9014,4.48444),
new google.maps.LatLng(51.3827,-2.71909),
new google.maps.LatLng(50.0264,8.54313),
new google.maps.LatLng(57.6628,12.2798),
new google.maps.LatLng(59.6519,17.9186),
new google.maps.LatLng(62.5281,17.4439),
new google.maps.LatLng(57.6628,12.2798),
new google.maps.LatLng(59.6519,17.9186),
new google.maps.LatLng(62.5281,17.4439),
new google.maps.LatLng(57.6628,12.2798),
new google.maps.LatLng(59.6519,17.9186),
new google.maps.LatLng(62.5281,17.4439),
new google.maps.LatLng(57.6628,12.2798),
new google.maps.LatLng(59.3544,17.9417),
new google.maps.LatLng(62.5281,17.4439),
new google.maps.LatLng(57.6628,12.2798),
new google.maps.LatLng(59.6519,17.9186),
new google.maps.LatLng(62.5281,17.4439),
new google.maps.LatLng(57.6628,12.2798),
new google.maps.LatLng(59.6519,17.9186),
new google.maps.LatLng(62.5281,17.4439),
new google.maps.LatLng(57.6628,12.2798),
new google.maps.LatLng(59.3544,17.9417),
new google.maps.LatLng(62.5281,17.4439),
new google.maps.LatLng(57.6628,12.2798),
new google.maps.LatLng(59.3544,17.9417),
new google.maps.LatLng(62.5281,17.4439),
new google.maps.LatLng(57.6628,12.2798),
new google.maps.LatLng(33.6367,-84.4281),
new google.maps.LatLng(30.1945,-97.6699),
new google.maps.LatLng(25.7932,-80.2906),
new google.maps.LatLng(30.1945,-97.6699),
new google.maps.LatLng(42.2124,-83.3534),
new google.maps.LatLng(52.3086,4.76389),
new google.maps.LatLng(51.1481,-0.190278),
new google.maps.LatLng(52.3086,4.76389),
new google.maps.LatLng(52.3086,4.76389),
new google.maps.LatLng(52.3086,4.76389),
new google.maps.LatLng(52.3086,4.76389),
new google.maps.LatLng(41.2971,2.07846),
new google.maps.LatLng(51.5053,0.055278),
new google.maps.LatLng(52.3086,4.76389),
new google.maps.LatLng(51.1481,-0.190278),
new google.maps.LatLng(52.3086,4.76389),
new google.maps.LatLng(41.2971,2.07846),
new google.maps.LatLng(52.3086,4.76389),
new google.maps.LatLng(33.6367,-84.4281),
new google.maps.LatLng(35.8776,-78.7875),
new google.maps.LatLng(38.9445,-77.4558),
new google.maps.LatLng(51.9569,4.43722),
new google.maps.LatLng(42.3643,-71.0052),
new google.maps.LatLng(52.3086,4.76389),
new google.maps.LatLng(47.4647,8.54917),
new google.maps.LatLng(52.3086,4.76389),
new google.maps.LatLng(51.8413,-8.49111),
new google.maps.LatLng(52.3086,4.76389),
new google.maps.LatLng(53.4213,-6.27007),
new google.maps.LatLng(52.3086,4.76389),
new google.maps.LatLng(53.4213,-6.27007),
new google.maps.LatLng(51.3967,-3.34333),
new google.maps.LatLng(52.3086,4.76389),
new google.maps.LatLng(35.7647,140.386),
new google.maps.LatLng(52.3086,4.76389),
new google.maps.LatLng(49.0128,2.55),
new google.maps.LatLng(48.6899,9.22196),
new google.maps.LatLng(49.0128,2.55),
new google.maps.LatLng(52.3086,4.76389),
new google.maps.LatLng(49.1513,16.6944),
new google.maps.LatLng(51.4501,5.37453),
new google.maps.LatLng(51.4775,-0.461389),
new google.maps.LatLng(52.3086,4.76389),
new google.maps.LatLng(51.4775,-0.461389),
new google.maps.LatLng(51.4775,-0.461389),
new google.maps.LatLng(52.3086,4.76389),
new google.maps.LatLng(51.4775,-0.461389),
new google.maps.LatLng(52.3086,4.76389),
new google.maps.LatLng(60.3172,24.9633),
new google.maps.LatLng(60.3172,24.9633),
new google.maps.LatLng(41.2971,2.07846),
new google.maps.LatLng(51.4775,-0.461389),
new google.maps.LatLng(51.5053,0.055278),
new google.maps.LatLng(51.3967,-3.34333),
new google.maps.LatLng(37.619,-122.375),
new google.maps.LatLng(51.4775,-0.461389),
new google.maps.LatLng(53.4213,-6.27007),
new google.maps.LatLng(41.9786,-87.9048),
new google.maps.LatLng(35.8776,-78.7875),
new google.maps.LatLng(40.6398,-73.7789),
new google.maps.LatLng(53.4213,-6.27007),
new google.maps.LatLng(51.3827,-2.71909),
new google.maps.LatLng(43.3011,-2.91061),
new google.maps.LatLng(51.4775,-0.461389),
new google.maps.LatLng(41.2971,2.07846),
new google.maps.LatLng(45.4451,9.27674),
new google.maps.LatLng(50.9014,4.48444),
new google.maps.LatLng(41.2971,2.07846),
new google.maps.LatLng(51.3827,-2.71909),
new google.maps.LatLng(48.3538,11.7861),
new google.maps.LatLng(50.9014,4.48444),
new google.maps.LatLng(50.1008,14.26),
new google.maps.LatLng(51.3827,-2.71909),
new google.maps.LatLng(50.9014,4.48444),
new google.maps.LatLng(24.433,54.6511),
new google.maps.LatLng(51.4775,-0.461389),
new google.maps.LatLng(46.2381,6.10895),
new google.maps.LatLng(51.4775,-0.461389),
new google.maps.LatLng(52.3086,4.76389),
new google.maps.LatLng(51.1481,-0.190278),
new google.maps.LatLng(41.2971,2.07846),
new google.maps.LatLng(51.4775,-0.461389),
new google.maps.LatLng(48.1103,16.5697),
new google.maps.LatLng(37.9364,23.9445),
new google.maps.LatLng(41.7994,12.5949),
new google.maps.LatLng(37.9364,23.9445),
new google.maps.LatLng(50.9014,4.48444),
new google.maps.LatLng(37.9364,23.9445),
new google.maps.LatLng(40.9769,28.8146),
new google.maps.LatLng(-26.1392,28.246),
new google.maps.LatLng(25.2611,51.5651),
new google.maps.LatLng(37.9364,23.9445),
new google.maps.LatLng(40.9769,28.8146),
new google.maps.LatLng(53.4213,-6.27007),
new google.maps.LatLng(53.3537,-2.27495),
new google.maps.LatLng(53.4213,-6.27007),
new google.maps.LatLng(37.9364,23.9445),
new google.maps.LatLng(47.4647,8.54917),
new google.maps.LatLng(51.4775,-0.461389),
new google.maps.LatLng(47.4647,8.54917),
new google.maps.LatLng(37.9364,23.9445),
new google.maps.LatLng(47.4647,8.54917),
new google.maps.LatLng(51.4775,-0.461389),
new google.maps.LatLng(37.9364,23.9445),
new google.maps.LatLng(51.4775,-0.461389),
new google.maps.LatLng(51.4775,-0.461389),
new google.maps.LatLng(51.4775,-0.461389),
new google.maps.LatLng(37.9364,23.9445),
new google.maps.LatLng(48.3538,11.7861),
new google.maps.LatLng(37.619,-122.375),
new google.maps.LatLng(48.3538,11.7861),
new google.maps.LatLng(37.9364,23.9445),
new google.maps.LatLng(51.4775,-0.461389),
new google.maps.LatLng(37.9364,23.9445),
new google.maps.LatLng(47.4647,8.54917),
new google.maps.LatLng(37.9364,23.9445),
new google.maps.LatLng(40.9769,28.8146),
new google.maps.LatLng(-26.1392,28.246),
new google.maps.LatLng(40.9769,28.8146),
new google.maps.LatLng(37.9364,23.9445),
new google.maps.LatLng(47.4647,8.54917),
new google.maps.LatLng(37.9364,23.9445),
new google.maps.LatLng(47.4647,8.54917),
new google.maps.LatLng(51.4775,-0.461389),
new google.maps.LatLng(37.9364,23.9445),
new google.maps.LatLng(41.8045,12.2508),
new google.maps.LatLng(41.2971,2.07846),
new google.maps.LatLng(49.0128,2.55),
new google.maps.LatLng(37.9364,23.9445),
new google.maps.LatLng(41.8045,12.2508),
new google.maps.LatLng(40.4936,-3.56676),
new google.maps.LatLng(52.3086,4.76389),
new google.maps.LatLng(62.5281,17.4439),
new google.maps.LatLng(59.6519,17.9186),
new google.maps.LatLng(45.4451,9.27674),
new google.maps.LatLng(45.6306,8.72811),
new google.maps.LatLng(55.6179,12.656),
new google.maps.LatLng(59.6519,17.9186),
new google.maps.LatLng(62.5281,17.4439),
new google.maps.LatLng(59.6519,17.9186),
new google.maps.LatLng(45.4451,9.27674),
new google.maps.LatLng(48.3538,11.7861),
new google.maps.LatLng(45.6306,8.72811),
new google.maps.LatLng(51.1481,-0.190278),
new google.maps.LatLng(45.6306,8.72811),
new google.maps.LatLng(51.4775,-0.461389),
new google.maps.LatLng(45.6306,8.72811),
new google.maps.LatLng(55.6179,12.656),
new google.maps.LatLng(59.6519,17.9186),
new google.maps.LatLng(62.5281,17.4439),
new google.maps.LatLng(45.4451,9.27674),
new google.maps.LatLng(55.6179,12.656),
new google.maps.LatLng(59.6519,17.9186),
new google.maps.LatLng(62.5281,17.4439),
new google.maps.LatLng(45.4451,9.27674),
new google.maps.LatLng(62.5281,17.4439),
new google.maps.LatLng(51.1481,-0.190278),
new google.maps.LatLng(45.6306,8.72811),
new google.maps.LatLng(55.6179,12.656),
new google.maps.LatLng(59.6519,17.9186),
new google.maps.LatLng(62.5281,17.4439),
new google.maps.LatLng(45.4451,9.27674),
new google.maps.LatLng(51.1481,-0.190278),
new google.maps.LatLng(45.6306,8.72811),
new google.maps.LatLng(50.0264,8.54313),
new google.maps.LatLng(59.6519,17.9186),
new google.maps.LatLng(45.4451,9.27674),
new google.maps.LatLng(51.4775,-0.461389),
new google.maps.LatLng(39.8719,-75.2411),
new google.maps.LatLng(51.4775,-0.461389),
new google.maps.LatLng(45.6306,8.72811),
new google.maps.LatLng(41.2971,2.07846),
new google.maps.LatLng(45.6306,8.72811),
new google.maps.LatLng(51.1481,-0.190278),
new google.maps.LatLng(45.6306,8.72811),
new google.maps.LatLng(51.1481,-0.190278),
new google.maps.LatLng(45.6306,8.72811),
new google.maps.LatLng(51.3827,-2.71909),
new google.maps.LatLng(46.2381,6.10895),
new google.maps.LatLng(32.0114,34.8867),
new google.maps.LatLng(47.4647,8.54917),
new google.maps.LatLng(52.3086,4.76389),
new google.maps.LatLng(41.2971,2.07846),
new google.maps.LatLng(47.4647,8.54917),
new google.maps.LatLng(47.59,7.52917),
new google.maps.LatLng(51.5053,0.055278),
new google.maps.LatLng(47.59,7.52917),
new google.maps.LatLng(46.9141,7.49715),
new google.maps.LatLng(52.3086,4.76389),
new google.maps.LatLng(51.8413,-8.49111),
new google.maps.LatLng(52.3086,4.76389),
new google.maps.LatLng(47.4647,8.54917),
new google.maps.LatLng(40.4936,-3.56676),
new google.maps.LatLng(48.7253,2.35944),
new google.maps.LatLng(40.4936,-3.56676),
new google.maps.LatLng(48.7253,2.35944),
new google.maps.LatLng(40.4936,-3.56676),
new google.maps.LatLng(48.7253,2.35944),
new google.maps.LatLng(41.2971,2.07846),
new google.maps.LatLng(48.7253,2.35944),
new google.maps.LatLng(40.4936,-3.56676),
new google.maps.LatLng(48.7253,2.35944),
new google.maps.LatLng(40.4936,-3.56676),
new google.maps.LatLng(48.7253,2.35944),
new google.maps.LatLng(40.4936,-3.56676),
new google.maps.LatLng(48.7253,2.35944),
new google.maps.LatLng(42.5308,8.79319),
new google.maps.LatLng(43.4356,5.21361),
new google.maps.LatLng(41.2971,2.07846),
new google.maps.LatLng(48.7253,2.35944),
new google.maps.LatLng(40.4936,-3.56676),
new google.maps.LatLng(48.7253,2.35944),
new google.maps.LatLng(40.4936,-3.56676),
new google.maps.LatLng(48.7253,2.35944),
new google.maps.LatLng(40.4936,-3.56676),
new google.maps.LatLng(48.7253,2.35944),
new google.maps.LatLng(51.3827,-2.71909),
new google.maps.LatLng(49.0128,2.55),
new google.maps.LatLng(40.4936,-3.56676),
new google.maps.LatLng(48.7253,2.35944),
new google.maps.LatLng(52.38,13.5225),
new google.maps.LatLng(48.7253,2.35944),
new google.maps.LatLng(41.2971,2.07846),
new google.maps.LatLng(48.7253,2.35944),
new google.maps.LatLng(51.4775,-0.461389),
new google.maps.LatLng(55.6179,12.656),
new google.maps.LatLng(51.4775,-0.461389),
new google.maps.LatLng(55.6179,12.656),
new google.maps.LatLng(51.4775,-0.461389),
new google.maps.LatLng(55.6179,12.656),
new google.maps.LatLng(51.4775,-0.461389),
new google.maps.LatLng(55.6179,12.656),
new google.maps.LatLng(51.4775,-0.461389),
new google.maps.LatLng(55.6179,12.656),
new google.maps.LatLng(51.4775,-0.461389),
new google.maps.LatLng(55.6179,12.656),
new google.maps.LatLng(51.4775,-0.461389),
new google.maps.LatLng(39.5536,2.72778),
new google.maps.LatLng(51.4775,-0.461389),
new google.maps.LatLng(63.4576,10.9242),
new google.maps.LatLng(65.4611,12.2175),
new google.maps.LatLng(60.1939,11.1004),
new google.maps.LatLng(63.4576,10.9242),
new google.maps.LatLng(60.1939,11.1004),
new google.maps.LatLng(51.4775,-0.461389),
new google.maps.LatLng(59.6519,17.9186),
new google.maps.LatLng(51.4775,-0.461389),
new google.maps.LatLng(41.2971,2.07846),
new google.maps.LatLng(51.4775,-0.461389),
new google.maps.LatLng(59.6519,17.9186),
new google.maps.LatLng(51.4775,-0.461389),
new google.maps.LatLng(59.6519,17.9186),
new google.maps.LatLng(51.4775,-0.461389),
new google.maps.LatLng(60.3172,24.9633),
new google.maps.LatLng(51.4775,-0.461389),
new google.maps.LatLng(59.6519,17.9186),
new google.maps.LatLng(51.4775,-0.461389),
new google.maps.LatLng(60.3172,24.9633),
new google.maps.LatLng(51.4775,-0.461389),
new google.maps.LatLng(53.4213,-6.27007),
new google.maps.LatLng(52.5597,13.2877),
new google.maps.LatLng(51.4775,-0.461389),
new google.maps.LatLng(52.5597,13.2877),
new google.maps.LatLng(45.6739,9.70417),
new google.maps.LatLng(52.38,13.5225),
new google.maps.LatLng(52.3086,4.76389),
new google.maps.LatLng(51.3827,-2.71909),
new google.maps.LatLng(52.3086,4.76389),
new google.maps.LatLng(52.5597,13.2877),
new google.maps.LatLng(51.4775,-0.461389),
new google.maps.LatLng(52.5597,13.2877),
new google.maps.LatLng(47.4647,8.54917),
new google.maps.LatLng(49.6266,6.21152),
new google.maps.LatLng(47.4647,8.54917),
new google.maps.LatLng(52.5597,13.2877),
new google.maps.LatLng(51.2895,6.76678),
new google.maps.LatLng(52.5597,13.2877),
new google.maps.LatLng(50.0264,8.54313),
new google.maps.LatLng(41.9786,-87.9048),
new google.maps.LatLng(36.0801,-115.152),
new google.maps.LatLng(32.7336,-117.19),
new google.maps.LatLng(48.3538,11.7861),
new google.maps.LatLng(52.5597,13.2877),
new google.maps.LatLng(52.4539,-1.74803),
new google.maps.LatLng(52.5597,13.2877),
new google.maps.LatLng(50.0264,8.54313),
new google.maps.LatLng(41.2971,2.07846),
new google.maps.LatLng(48.3538,11.7861),
new google.maps.LatLng(52.5597,13.2877),
new google.maps.LatLng(49.0128,2.55),
new google.maps.LatLng(48.0695,-1.73479),
new google.maps.LatLng(49.0128,2.55),
new google.maps.LatLng(52.5597,13.2877),
new google.maps.LatLng(47.4647,8.54917),
new google.maps.LatLng(33.9425,-118.408),
new google.maps.LatLng(48.3538,11.7861),
new google.maps.LatLng(52.5597,13.2877),
new google.maps.LatLng(49.0128,2.55),
new google.maps.LatLng(48.0695,-1.73479),
new google.maps.LatLng(49.0128,2.55),
new google.maps.LatLng(52.5597,13.2877),
new google.maps.LatLng(52.3086,4.76389),
new google.maps.LatLng(52.5597,13.2877),
new google.maps.LatLng(53.4213,-6.27007),
new google.maps.LatLng(51.3827,-2.71909),
new google.maps.LatLng(43.6584,7.21587),
new google.maps.LatLng(51.3827,-2.71909),
new google.maps.LatLng(53.4213,-6.27007),
new google.maps.LatLng(51.3827,-2.71909),
new google.maps.LatLng(53.4213,-6.27007),
new google.maps.LatLng(51.3827,-2.71909),
new google.maps.LatLng(53.4213,-6.27007),
new google.maps.LatLng(51.3827,-2.71909),
new google.maps.LatLng(53.4213,-6.27007),
new google.maps.LatLng(51.3827,-2.71909),
new google.maps.LatLng(53.4213,-6.27007),
new google.maps.LatLng(51.3827,-2.71909),
new google.maps.LatLng(28.0445,-16.5725),
new google.maps.LatLng(51.3827,-2.71909),
new google.maps.LatLng(48.3538,11.7861),
new google.maps.LatLng(51.3827,-2.71909),
new google.maps.LatLng(24.433,54.6511),
new google.maps.LatLng(51.4775,-0.461389),
new google.maps.LatLng(24.433,54.6511),
new google.maps.LatLng(51.4775,-0.461389),
new google.maps.LatLng(52.3086,4.76389),
new google.maps.LatLng(51.3827,-2.71909),
new google.maps.LatLng(49.0128,2.55),
new google.maps.LatLng(51.3827,-2.71909),
new google.maps.LatLng(41.2971,2.07846),
new google.maps.LatLng(51.3827,-2.71909),
new google.maps.LatLng(-22.8089,-43.2436),
new google.maps.LatLng(50.0264,8.54313),
new google.maps.LatLng(59.6519,17.9186),
new google.maps.LatLng(62.5281,17.4439),
new google.maps.LatLng(59.6519,17.9186),
new google.maps.LatLng(55.6179,12.656),
new google.maps.LatLng(51.2895,6.76678),
new google.maps.LatLng(59.6519,17.9186),
new google.maps.LatLng(62.5281,17.4439),
new google.maps.LatLng(59.6519,17.9186),
new google.maps.LatLng(51.2895,6.76678),
new google.maps.LatLng(49.0128,2.55),
new google.maps.LatLng(59.6519,17.9186),
new google.maps.LatLng(62.5281,17.4439),
new google.maps.LatLng(51.2895,6.76678),
new google.maps.LatLng(59.6519,17.9186),
new google.maps.LatLng(51.2895,6.76678),
new google.maps.LatLng(59.6519,17.9186),
new google.maps.LatLng(62.5281,17.4439),
new google.maps.LatLng(59.6519,17.9186),
new google.maps.LatLng(51.2895,6.76678),
new google.maps.LatLng(59.6519,17.9186),
new google.maps.LatLng(62.5281,17.4439),
new google.maps.LatLng(59.6519,17.9186),
new google.maps.LatLng(51.2895,6.76678),
new google.maps.LatLng(55.6179,12.656),
new google.maps.LatLng(51.2895,6.76678),
new google.maps.LatLng(55.6179,12.656),
new google.maps.LatLng(51.2895,6.76678),
new google.maps.LatLng(39.5536,2.72778),
new google.maps.LatLng(41.2971,2.07846),
new google.maps.LatLng(51.2895,6.76678),
new google.maps.LatLng(51.4775,-0.461389),
new google.maps.LatLng(51.2895,6.76678),
new google.maps.LatLng(55.6179,12.656),
new google.maps.LatLng(59.6519,17.9186),
new google.maps.LatLng(62.5281,17.4439),
new google.maps.LatLng(59.6519,17.9186),
new google.maps.LatLng(51.2895,6.76678),
new google.maps.LatLng(59.6519,17.9186),
new google.maps.LatLng(62.5281,17.4439),
new google.maps.LatLng(59.6519,17.9186),
new google.maps.LatLng(51.2895,6.76678),
new google.maps.LatLng(59.6519,17.9186),
new google.maps.LatLng(62.5281,17.4439),
new google.maps.LatLng(59.6519,17.9186),
new google.maps.LatLng(51.2895,6.76678),
new google.maps.LatLng(59.6519,17.9186),
new google.maps.LatLng(62.5281,17.4439),
new google.maps.LatLng(59.6519,17.9186),
new google.maps.LatLng(51.2895,6.76678),
new google.maps.LatLng(59.6519,17.9186),
new google.maps.LatLng(59.6519,17.9186),
new google.maps.LatLng(50.0264,8.54313),
new google.maps.LatLng(46.2381,6.10895),
new google.maps.LatLng(50.0264,8.54313),
new google.maps.LatLng(53.6304,9.98823),
new google.maps.LatLng(59.6519,17.9186),
new google.maps.LatLng(65.5438,22.122),
new google.maps.LatLng(59.6519,17.9186),
new google.maps.LatLng(55.6179,12.656),
new google.maps.LatLng(53.6304,9.98823),
new google.maps.LatLng(59.6519,17.9186),
new google.maps.LatLng(65.5438,22.122),
new google.maps.LatLng(48.3538,11.7861),
new google.maps.LatLng(53.6304,9.98823),
new google.maps.LatLng(59.6519,17.9186),
new google.maps.LatLng(59.6519,17.9186),
new google.maps.LatLng(62.5281,17.4439),
new google.maps.LatLng(59.6519,17.9186),
new google.maps.LatLng(50.9014,4.48444),
new google.maps.LatLng(49.0128,2.55),
new google.maps.LatLng(59.6519,17.9186),
new google.maps.LatLng(62.5281,17.4439),
new google.maps.LatLng(59.6519,17.9186),
new google.maps.LatLng(56.6855,16.2876),
new google.maps.LatLng(59.6519,17.9186),
new google.maps.LatLng(62.5281,17.4439),
new google.maps.LatLng(59.6519,17.9186),
new google.maps.LatLng(62.5281,17.4439),
new google.maps.LatLng(59.6519,17.9186),
new google.maps.LatLng(62.5281,17.4439),
new google.maps.LatLng(59.6519,17.9186),
new google.maps.LatLng(65.5438,22.122),
new google.maps.LatLng(59.6519,17.9186),
new google.maps.LatLng(62.5281,17.4439),
new google.maps.LatLng(59.6519,17.9186),
new google.maps.LatLng(62.5281,17.4439),
new google.maps.LatLng(59.6519,17.9186),
new google.maps.LatLng(65.5438,22.122),
new google.maps.LatLng(59.6519,17.9186),
new google.maps.LatLng(62.5281,17.4439),
new google.maps.LatLng(59.6519,17.9186),
new google.maps.LatLng(62.5281,17.4439),
new google.maps.LatLng(59.6519,17.9186),
new google.maps.LatLng(62.5281,17.4439),
new google.maps.LatLng(59.6519,17.9186),
new google.maps.LatLng(62.5281,17.4439),
new google.maps.LatLng(59.6519,17.9186),
new google.maps.LatLng(50.0264,8.54313),
new google.maps.LatLng(41.2971,2.07846),
new google.maps.LatLng(60.1939,11.1004),
new google.maps.LatLng(-33.9648,18.6017),
new google.maps.LatLng(-26.1392,28.246),
new google.maps.LatLng(51.4775,-0.461389),
new google.maps.LatLng(33.8209,35.4884),
new google.maps.LatLng(51.4775,-0.461389),
new google.maps.LatLng(33.8209,35.4884),
new google.maps.LatLng(51.4775,-0.461389),
new google.maps.LatLng(55.6179,12.656),
new google.maps.LatLng(51.1481,-0.190278),
new google.maps.LatLng(51.1481,-0.190278),
new google.maps.LatLng(55.6179,12.656),
new google.maps.LatLng(50.9014,4.48444)
];
      }
    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAISZq1FmtMjGu6WAJmhkCkxNcYgZtYcWk&libraries=visualization&callback=initMap">
    </script>
  </body>
</html>