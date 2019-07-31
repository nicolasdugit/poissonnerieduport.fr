var poissonnerieCassy = [-1.05689, 44.71007]
var poissonerieLege = [-1.152153, 44.790186]
var bassin = [-1.1409, 44.6965]


mapboxgl.accessToken = 'pk.eyJ1Ijoibmljb2xhc2R1cXVlc25lIiwiYSI6ImNqaTMyejI3ejE2dnUzdmxrdXBpMW5tM3MifQ.qeLFoY_OigVRg_GY5mul7A';
		var map = new mapboxgl.Map({
		container: 'map',
		center: bassin,
		zoom: 10,
		style: 'mapbox://styles/mapbox/streets-v10'

		});

var marker = new mapboxgl.Marker()
  .setLngLat(poissonnerieCassy)
  .addTo(map);

	var marker2 = new mapboxgl.Marker()
	  .setLngLat(poissonerieLege)
	  .addTo(map);
