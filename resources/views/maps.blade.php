<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css"
        integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ=="
        crossorigin="" />
    <style>
        #map {
            width: 500px;
            height: 350px
        }
    </style>
</head>

<body>

    <div class="col-6">
        <h4>Peta Persebaran Kemiskinan</h4>
        <div id="map">

        </div>
    </div>


    <script>
        var map = L.map('map').setView([51.505, -0.09], 13);

        var tiles = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

        var marker = L.marker([51.5, -0.09]).addTo(map);
    </script>
</body>

<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"
        integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
        crossorigin=""></script>

</head>

</html>

<script>
      // @foreach ($maps as $item)
                    //     @if ($item->hasilClustering[0]->cluster == 0)


                    //         var tiles = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    //             maxZoom: 19,
                    //             // attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
                    //         }).addTo(map);

                    //         var marker = L.marker([parseFloat('{{ $item->latitude }}'), parseFloat(
                    //                 '{{ $item->longitude }}')], {
                    //                 icon: red,
                    //             }).addTo(
                    //                 map)
                    //             .bindPopup('<b>{{ $item->district->name }}</b><br/> <b>{{ $item->nama }}</b>.').openPopup();
                    //     @endif

                    //     @if ($item->hasilClustering[0]->cluster == 1)


                    //         var tiles = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    //             maxZoom: 19,
                    //             // attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
                    //         }).addTo(map);

                    //         var marker = L.marker([parseFloat('{{ $item->latitude }}'), parseFloat(
                    //                 '{{ $item->longitude }}')], {
                    //                 icon: gold
                    //             }).addTo(
                    //                 map)
                    //             .bindPopup('<b>{{ $item->district->name }}</b><br/> <b>{{ $item->nama }}</b>.').openPopup();
                    //     @endif

                    //     @if ($item->hasilClustering[0]->cluster == 2)


                    //         var tiles = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    //             maxZoom: 19,
                    //             // attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
                    //         }).addTo(map);

                    //         var marker = L.marker([parseFloat('{{ $item->latitude }}'), parseFloat(
                    //                 '{{ $item->longitude }}')], {
                    //                 icon: green
                    //             }).addTo(
                    //                 map)
                    //             .bindPopup('<b>{{ $item->district->name }}</b><br/> <b>{{ $item->nama }}</b>.').openPopup();
                    //     @endif
                    // @endforeach
</script>
