<?php include 'header.php'; ?>

<div id="map" class="map"></div>

<!-- Membuat Fitur PopUp -->
<div class="ol-popup" id="popup">
    <a href="#" id="popup-closer" class="ol-popup-closer"></a>
    <div id="popup-content"></div>
</div>
<!-- End PopUp-->

<script type="text/javascript">
    // Membuat variabel untuk ditampilkan di layer
    var layerLaut = new ol.layer.Vector({
        source: new ol.source.Vector({
            format: new ol.format.GeoJSON(),
            url: 'data/hasilLaut.json' // PATH FILE JSON
        }),
        //membuat icon
        style: new ol.style.Style({
            image: new ol.style.Icon({
                anchor: [0.5, 46],
                anchorXUnits: 'flaticon',
                anchorYUnits: 'pixels',
                src: 'icon/location.png' // PATH FILE icon
            })
        })
        //end
    });
    //end
    // Membuat variabel untuk ditampilkan di layer
    var layerKalimantan = new ol.layer.Vector({
        source: new ol.source.Vector({
            format: new ol.format.GeoJSON(),
            url: 'data/kalimantan.json' // PATH FILE JSON
        })
    });
  
    //end
    var map = new ol.Map({
        target: 'map',
        layers: [
            new ol.layer.Tile({
                source: new ol.source.OSM()
            }), layerKalimantan, layerLaut
        ],
        view: new ol.View({
            center: ol.proj.fromLonLat([117.153709, -0.502106]),
            zoom: 6
        })
    });
</script>


<!-- Script untuk PopUp -->
<script type="text/javascript">
    var container = document.getElementById('popup'),
        content_element = document.getElementById('popup-content')
    closer = document.getElementById('popup-closer');

    //membuat close popup
    closer.onclick = function() { 
        overlay.setPosition(undefined);
        closer.blur();
        return false;
    };
    //end popup
    //membuat overlay
    var overlay = new ol.Overlay({
        element: container,
        autoPan: true,
        offset: [0, -10]
    });
    //end overlay

    map.addOverlay(overlay); //menambahkan overlay ke dalam map
    var FullScreen = new ol.control.FullScreen();
    map.addControl(FullScreen);
        //kalau icon kita di klik
    map.on('click', function(evt) { 
        var feature = map.forEachFeatureAtPixel(evt.pixel,
            function(feature, Layer) {
                return feature;
            });
        //end    
        // jika featurenya ada 
        if (feature) {
            var geometry = feature.getGeometry();
            var coord = geometry.getCoordinates();
            var content = '<img src="' + feature.get('Link_Foto')+ '" style="width:auto; height:300px"  />';
            content += '<h5> Nama Daerah : ' + feature.get('Nama_Kota_') + '</h5>';
            content += '<h5> Laut : ' + feature.get('Laut__Kg_') + ' kg</h5>';
            
            content_element.innerHTML = content;
            overlay.setPosition(coord);
            console.info(feature.getProperties());
        }
    });
        //end
</script>


<?php include 'footer.php' ?>