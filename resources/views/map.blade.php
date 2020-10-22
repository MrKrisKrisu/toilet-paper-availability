<div id="mapid" style="width: 100%; height: 500px;"></div>
<script>

    $(document).ready(loadMap);

    var map = L.map('mapid').setView([52.37707, 9.73811], 13);
    var markers = [];

    L.tileLayer('https://osmcache.k118.de/carto/{z}/{x}/{y}.png', {
        maxZoom: 18,
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors',
    }).addTo(map);

    map.on('dragend', loadMap);

    function loadMap() {
        $.ajax({
            'url': '/api/stores' +
                '?north=' + map.getBounds().getNorth() +
                '&west=' + map.getBounds().getWest() +
                '&south=' + map.getBounds().getSouth() +
                '&east=' + map.getBounds().getEast(),
            success: function (data) {
                $.each(data, function (i, store) {
                    if (store.id in markers) return;
                    markers[store.id] = L.marker([store.lat, store.lng])
                        .bindPopup('<b>Verfügbarkeit: ' + store.currentStock + ' Packungen</b><br /><hr />' + store.address)
                        .addTo(map);
                });
            }
        });
    }


</script>
