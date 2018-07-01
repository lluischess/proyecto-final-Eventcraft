function validalogin(f) {
  var ok = false;
  var msg = "Faltan campos por completar:\n";
  var nombre;
  var pass;


nombre = document.getElementById("Nombre").value;
//nombre = $("#Nombre").val();
pass = document.getElementById("Password").value;


if (nombre == "") {
  msg += "- Nombre\n";
  ok = false;
  alert(msg);
}

if (pass == "") {
  msg += "- Password\n";
  ok = false;
  alert(msg);
}

 if(ok == false)
  return ok;

}


/*var requestURL = 'https://mdn.github.io/learning-area/javascript/oojs/json/superheroes.json';

var request = new XMLHttpRequest();

request.open('GET', requestURL);
request.responseType = 'json';
request.send();
request.onload = function() {
  var superHeroes = request.response;
  console.log(superHeroes)
  //populateHeader(superHeroes);
  //showHeroes(superHeroes);
}*/


// $(document).ready(function() {

//     $('#myform').submit(function() {

//         $.ajax({
            
//             url: 'http://localhost:50143/api/login',
//             type: "POST",
//             data: {
//                 username: $("#Nombre").val(),
//                 password: $("#Password").val()
//             },
//             contentType: "application/json",
//             statusCode: {
//               200: function (data) {
//                   window.location.replace('http://localhost:8080/Evencraft-web/index.php');

//               },
//               404: function (data) {
//                   alert("No se encontro el usuario");
//               }
//             }
//             /*success: function(data)
//             {

//                 if (data === ) {
//                     window.location.replace('admin.php');
//                 }
//                 else {
//                     alert(data);
//                 }
//             }*/
//         });

//     });

// });