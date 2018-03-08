google.charts.load('current', { "packages": ['map'], "mapsApiKey": "AIzaSyD9pql4axkjBh-oDlw3wX-hKAr67pN6-G4" });
google.charts.setOnLoadCallback(drawMap);

function drawMap() {
  var data = google.visualization.arrayToDataTable([
    ['Lat', 'Long', 'Name'],
    ['48.862', '-123.287', 'Paris']
  ]);

var options = {
  showTooltip: true,
  showInfoWindow: true
};

var map = new google.visualization.Map(document.getElementById('implantMap'));

map.draw(data, options);
};