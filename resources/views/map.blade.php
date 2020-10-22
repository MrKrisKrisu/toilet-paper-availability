<div id="mapid" style="width: 100%; height: 500px;"></div>
<script>

    var mymap = L.map('mapid').setView([52.37707, 9.73811], 13);

    L.tileLayer('https://osmcache.k118.de/carto/{z}/{x}/{y}.png', {
        maxZoom: 18,
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors',
    }).addTo(mymap);

    @foreach(\App\Models\Store::all() as $store)
    L.marker([{{$store->lat}}, {{$store->lng}}])
        .bindPopup('<b>Verfügbarkeit: {{$store->currentStock}} Packungen</b><br /><hr />{{$store->address}}')
        .addTo(mymap);
    @endforeach


</script>
