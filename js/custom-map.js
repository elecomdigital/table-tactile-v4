$(document).ready(function(){
	"use strict";

	/*--------------------------------
	 	12. Map
	---------------------------------*/

		var map;
			var getTile = function(coord, zoom, ownerDocument) {
			var div = ownerDocument.createElement('div');
			div.style.width = this.tileSize.width + 'px';
			div.style.height = this.tileSize.height + 'px';
			div.style.background = 'rgba(7, 7, 7, 0.50)';
			div.style.lineHeight = this.tileSize.height + 'px';
			return div;
	    };
		$('.minister_map_display').each(function() {
			var element = $(this).attr('id');
			map = new GMaps({
			el: '#' + element,
			center: new google.maps.LatLng(48.646644,2.271468),
			zoom:13,
			scrollwheel: false,
			styles: [
					{
						"featureType": "water",
						"elementType": "geometry",
						"stylers": [
							{
								"color": "#b3b3b3"
							},
							{
								"lightness": 17
							}
						]
					},
					{
						"featureType": "landscape",
						"elementType": "geometry",
						"stylers": [
							{
								"color": "#e0e0e0"
							},
							{
								"lightness": 20
							}
						]
					},
					{
						"featureType": "road.highway",
						"elementType": "geometry.fill",
						"stylers": [
							{
								"color": "#a8a8a8"
							},
							{
								"lightness": 17
							}
						]
					},
					{
						"featureType": "road.highway",
						"elementType": "geometry.stroke",
						"stylers": [
							{
								"color": "#dfdfdf"
							},
							{
								"lightness": 29
							},
							{
								"weight": 0.2
							}
						]
					},
					{
						"featureType": "road.arterial",
						"elementType": "geometry",
						"stylers": [
							{
								"color": "#f8f8f8"
							},
							{
								"lightness": 18
							}
						]
					},
					{
						"featureType": "road.local",
						"elementType": "geometry",
						"stylers": [
							{
								"color": "#f8f8f8"
							},
							{
								"lightness": 16
							}
						]
					},
					{
						"featureType": "poi",
						"elementType": "geometry",
						"stylers": [
							{
								"color": "#dfdfdf"
							},
							{
								"lightness": 21
							}
						]
					},
					{
						"featureType": "poi.park",
						"elementType": "geometry",
						"stylers": [
							{
								"color": "#333"
							},
							{
								"lightness": 21
							}
						]
					},
					{
						"elementType": "labels.text.stroke",
						"stylers": [
							{
								"visibility": "on"
							},
							{
								"color": "#dfdfdf"
							},
							{
								"lightness": 16
							}
						]
					},
					{
						"elementType": "labels.text.fill",
						"stylers": [
							{
								"saturation": 36
							},
							{
								"color": "#333333"
							},
							{
								"lightness": 10
							}
						]
					},
					{
						"elementType": "labels.icon",
						"stylers": [
							{
								"visibility": "on"
							}
						]
					},
					{
						"featureType": "transit",
						"elementType": "geometry",
						"stylers": [
							{
								"color": "#dfdfdf"
							},
							{
								"lightness": 19
							}
						]
					},
					{
						"featureType": "administrative",
						"elementType": "geometry.fill",
						"stylers": [
							{
								"color": "#dfdfdf"
							},
							{
								"lightness": 20
							}
						]
					},
					{
						"featureType": "administrative",
						"elementType": "geometry.stroke",
						"stylers": [
							{
								"color": "#535353"
							},
							{
								"lightness": 17
							},
							{
								"weight": 1.2
							}
						]
					}
				]
			});
			map.addMarker({
			lat: 40.7587442,
			lng:-73.9808623,
				title: 'Dhaka',
				icon:'images/map-marker.png',

			});
		});



/*-------------------------------------------------
		ministar update custom js 04-02-18
---------------------------------------------------*/

        /*-------------------------------
            m upcoming-events script:
        ---------------------------------*/
        $('#owl-upcoming-events').owlCarousel({
            items: 6,
            loop:true,
            mouseDrag:true,
            dots:false,
            nav: true,
            navText:["<i class='fa fa-long-arrow-left'></i>","<i class='fa fa-long-arrow-right'></i>"],
            smartSpeed: 1000,
            autoplay: true,
            responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:2
                    },
                    800:{
                        items:2
                    },
                    1024:{
                        items:3
                    }

                }
            });

        /*-------------------------------
            m chart section script:
        ---------------------------------*/

        $("#bars li .bar").each(function(key, bar){
            var percentage = $(this).data('percentage');

            $(this).animate({
              'height':percentage+'%'
            }, 2000);
          });



});
