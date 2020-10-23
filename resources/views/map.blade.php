<div id="mapid" style="width: 100%; height: 500px;"></div>
<script>

    $(document).ready(loadMap);

    var map = L.map('mapid').setView([52.37707, 9.73811], 13);
    var markers = [];
    var hash = new L.Hash(map);

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
                    markers[store.id] = L.marker([store.lat, store.lng], {icon: getMarker(store.last_stock)})
                        .bindPopup(
                            '<b>Verfügbarkeit: ' + store.last_stock + ' Packungen</b>' +
                            '<br /><hr />' + store.name + '' +
                            '<br />' + store.address +
                            '<br /> Zuletzt aktualisiert: ' + store.last_checked
                        )
                        .addTo(map);
                });
            }
        });
    }

    function getLevelFromStock(stock) {
        if (stock == 0) return 0;
        if (stock < 10) return 1;
        if (stock < 50) return 2;
        if (stock < 100) return 3;
        return 4;
    }

    function getMarker(stock) {
        return L.icon({
            iconUrl: '/images/icons/toilet-paper-' + getLevelFromStock(stock) + '.png',
            iconSize: [34, 34],
            iconAnchor: [17, 17],
        });
    }


</script>
