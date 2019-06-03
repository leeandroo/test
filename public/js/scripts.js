// deslizamiento del raton
new WOW().init();
// deslizamiento del raton


// configuracin de mapa

    function regular_map(){
        
        var var_location = new google.maps.LatLng(-22.447582, -68.928383);// Latitud y longitud

        
        var var_mapoptions = {
            center: var_location, zoom: 14//zoom del mapa
        };

        var var_map = new google.maps.Map(document.getElementById
            ("map-container"),
                var_mapoptions);
        
        var var_marker = new google.maps.Marker({
            position: var_location,
            map: var_map,
            title: "SERMALET"// titulo de ubicacion

        });

    }

    google.maps.event.addDomListener(window, 'load', regular_map);// inicializar maps

// configuracin de mapa


