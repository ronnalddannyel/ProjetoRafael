

    </div><!--  Final breadcumb-->

   
  <style>
    #map { height: 1000px; }

</style>
            <div id="map"></div>

<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
  var map = L.map('map').setView([2.877196, -60.629532], 16);

  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
  }).addTo(map);

  
  $.getJSON('veredasGeo.geojson', function(data) {
    L.geoJSON(data, {
      onEachFeature: function (feature, layer) {
        layer.on('click', function(e) {
          var nomeLote = feature.properties.nome; 
          
          $.ajax({
            url: 'buscar_informacoes_lote.php',
            type: 'POST',
            data: { nome_lote: nomeLote },
            success: function(data) {
               layer.bindPopup(data).openPopup();
            }
          });
        });
      }
    }).addTo(map);
  });
</script>














</main>


<?php include "../../footer.php"; ?>
