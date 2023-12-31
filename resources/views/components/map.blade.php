
@props(['mapId' => 'defaultMapId'])

<div class="w-full h-[180px]" id="{{$mapId}}"></div>
<!-- map implementation -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        let map, markers = [];
        console.log('init marker', @json($initialMarkers));
        const initialMarkers = @json($initialMarkers);

        function initMap() {
            map = L.map('{{$mapId}}', {
                center: {
                    lat: 17.461220917284052,
                    lng: 78.50484608465712,
                },
                zoom: 15
            });

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '© OpenStreetMap'
            }).addTo(map);

            map.on('click', mapClicked);
            initMarkers();
        }
        initMap();

        function initMarkers() {
            for (let index = 0; index < initialMarkers.length; index++) {
                const data = initialMarkers[index];
                const marker = generateMarker(data, index);
                marker.addTo(map).bindPopup(`<b>${data.position.lat},  ${data.position.lng}</b>`);
                map.panTo(data.position);
                markers.push(marker);
            }
        }

        function generateMarker(data, index) {
            return L.marker(data.position, {
                draggable: data.draggable
            })
                .on('click', (event) => markerClicked(event, index))
                .on('dragend', (event) => markerDragEnd(event, index));
        }

        function mapClicked($event) {
            console.log(map);
            console.log($event.latlng.lat, $event.latlng.lng);
        }

        function markerClicked($event, index) {
            console.log(map);
            console.log($event.latlng.lat, $event.latlng.lng);
        }

        function markerDragEnd($event, index) {
            console.log(map);
            console.log($event.target.getLatLng());
        }

        const data = {
            position: {
                lat: 17.461220917284052,
                lng: 78.50484608465712,
            },
            draggable: true
        };

        const marker = generateMarker(data, markers.length - 1);
        marker.addTo(map).bindPopup(`<b>${data.position.lat},  ${data.position.lng}</b>`);
        markers.push(marker);
    });
</script>