var map, icon1, icon2, markerSelected, list;
var markersListOld = [];

function initMap() {
  // valor localització
  var cameraPos = {
        lat: 41.5448861,
        lng: 2.4469217
    };
    map = new google.maps.Map(document.getElementById('map'), {
        zoom: 9,
        center: cameraPos
    });
  // var uluru = {
  //   lat: 41.3850391,
  //   lng: 2.173343599999953
  // };
  // // Valor mapa
  // map = new google.maps.Map(document.getElementById('map'), {
  //   zoom: 6,
  //   center: uluru
  // });
  icon1 = {
    url: 'icon1.png',
    scaledSize: new google.maps.Size(50, 50)
  }
  icon2 = {
    url: 'icon1.png',
    scaledSize: new google.maps.Size(50, 50)
  }

  google.maps.event.addListener(map, 'click', function (event) {
    if (markerSelected) {
      markerSelected.setIcon(icon1);
      markerSelected = null;
    }
  }); 

  list = '[{"Lat": "41.38", "Lon": "2.55"}, {"Lat": "42.38", "Lon": "2.05"}]';
  console.log(JSON.parse(list));
  listNoms = '[{"Nom": "lluis", "Poblacio" : "bcn", "Provincia" : "rg", "id" : "1" }, {"Nom": "lluis", "Poblacio" : "bcn", "Provincia" : "rg", "id" : "2" }]';
  console.log(JSON.parse(listNoms)); // comvertir json
  
  putMarkers(list, listNoms, map, icon1);

  
}
// al clickar icona 
// lisener del icona
function putMarkers(list, listNoms, map, icon) {
  if (list) {
    for (var i in list) {
      /*marker {
      lat: x,
      lon: y
      }*/
      var markerPos = {
        lat: parseFloat(list[i].Lat),
        lng: parseFloat(list[i].Lon)
      };
      var marker = new google.maps.Marker({
        position: markerPos,
        map: map,
        animation: google.maps.Animation.DROP,
        icon: icon,
        bdId: list[i].id
      });

      markersListOld.push(marker);

      var content = ' <h3 > '+listNoms[i].Nom+' < /h3> <h4 > ' +
        listNoms[i].Poblacio + ', ' + listNoms[i].Provincia +
        ' </h4> <button "><a href=" / establiment / '+listNoms[i].id+'">Veure més</a></button>';
      infowindow = new google.maps.InfoWindow()

      google.maps.event.addListener(marker, 'click', (function (marker, content, infowindow) {
        return function () {
          map.panTo(marker.getPosition());
          infowindow.setContent(content);
          infowindow.open(map, marker);
          for (var j = 0; j < markersListOld.length; j++) {
            markersListOld[j].setIcon(icon);
          }
          marker.setIcon(icon2);
          markerSelected = marker;
        }
      })(marker, content, infowindow));
    }
  }
}

function search() {
  console.log('asd')
}
var delayTimer;

function changeLocation() {
  clearTimeout(delayTimer);
  delayTimer = setTimeout(function () {
    var inputValue = document.getElementById('searchBar').value;
    // Show data
    console.log(inputValue);
    changeMapLocation(inputValue);
  }, 1000);
}
/*
function attachSecretMessage(marker, secretMessage) {
var infowindow = new google.maps.InfoWindow({
content: secretMessage
});
marker.addListener('click', function() {
infowindow.open(marker.get('map'), marker);
});
}*/
function changeMapLocation(newValue) {
  if (!newValue) {
    console.log('no hay valor')
  }
  //Buscar coordenadas de valor introducido
  var uluru = {
    lat: 41.3850391,
    lng: 2.173343599999953
  };
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 6,
    center: uluru
  });
}