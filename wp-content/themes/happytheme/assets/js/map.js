function initMap() {
            let essec = { lat: 48.892831, lng: 2.239160 };
            let map = new google.maps.Map(document.getElementById('map'), {
                zoom: 15,
                center: essec,
                disableDefaultUI: true,
                scrollwheel: false,
                styles: [
                    {
                        "featureType": "road.arterial",
                        "elementType": "labels",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "labels",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                ]
            });

            map.panBy(-200, 0)

            let marker = new google.maps.Marker({
                position: essec,
                map: map
            });
        }