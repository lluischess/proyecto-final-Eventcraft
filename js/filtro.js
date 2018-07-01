  function filtroevent() {
    // filtro avanzado javascript
    var aficion = document.getElementById('aficion').value;

        var parametros = {
                "aficion" : aficion,
                "accionBuscar" : '2'
        };
    var url ='events.php';
    if (aficion == 'default') {
        $('.list-busqueda').hide(500);
        $('.item-tot').show(500);

        $('html,body').animate({
          // animacion para hacer scroll hacia abajo
            scrollTop: $(".contenedor").offset().top-100
        }, 2000);

    }else{
    $.ajax({
         type:'POST',
         url: url,
         data: parametros,
         beforeSend: function () {
                  
          },
            success: function(data)
            {
                $('.item-tot').hide(500);
                // los valores de la vista html
                $('.list-busqueda').html(data);
                $('.list-busqueda').show(500);
                // animacion para hacer scroll hacia abajo
                $('html,body').animate({
                    scrollTop: $(".contenedor").offset().top-100
                }, 1000);

            }
         });
    }
  }

