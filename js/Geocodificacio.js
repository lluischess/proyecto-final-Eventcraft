 var geocoder;
  var map;
  function initialize() {
    geocoder = new google.maps.Geocoder();
    var latlng = new google.maps.LatLng(41.3850639, 2.1734034999999494);
    var mapOptions = {
      zoom: 8,
      center: latlng
    }
    map = new google.maps.Map(document.getElementById('map'), mapOptions);
  }

  function codeAddress() {
    var address = document.getElementById('address').value;
    geocoder.geocode( { 'address': address}, function(results, status) {
      if (status == 'OK') {
        map.setCenter(results[0].geometry.location);
        var marker = new google.maps.Marker({
            map: map,
            position: results[0].geometry.location
        });
      } else {
        alert('La Ubicación no existe: ' + status);
      }
    });

    // parametros de la busqueda por direccion i por aficion
    var parametros = {
                "address" : address,
                "accionBuscar" : '1'
        };
    var url ='events.php';
    if (address == '') {
        $('.list-busqueda').hide(500);
        $('.item-tot').show(500);

        $('html,body').animate({
            scrollTop: $(".contenedor").offset().top-100
        }, 2000);

    }else{
    $.ajax({
      // post en ajax para pasar los datos de la busqueda
         type:'POST',
         url: url,
         data: parametros,
         beforeSend: function () {
                  
                },
            success: function(data)
            {
                $('.item-tot').hide(500);
                $('.list-busqueda').html(data);
                $('.list-busqueda').show(500);
                // animacion para hacer scroll hacia abajo
                $('html,body').animate({
                    scrollTop: $(".contenedor").offset().top-100
                }, 2000);

            }
         });
    }
  }