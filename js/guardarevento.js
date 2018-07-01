function guardarevento(f) {
	var ok = true;
	var nomevent;
	var aficion;
	var descripcion;
	var maximoparticipantes;
	var fechainicio;
	var fechafin;
	var direccionevento;
	var ciudadevento;
	var provincia;

	// mensajes de error
	var campovacio = "Los campos no pueden estar vacios:\n";



nomevent = document.getElementById("Name_event").value;
aficion = document.getElementById("aficion").value;
descripcion = document.getElementById("Desc_event").value;
maximoparticipantes = document.getElementById("Max_personas_event").value;
fechainicio = document.getElementById("fechainicio").value;
fechafin = document.getElementById("fechafin").value;
direccionevento = document.getElementById("Adresse").value;
ciudadevento = document.getElementById("Citye").value;
provincia = document.getElementById("Provinciae").value;

//validar
if (nomevent == "") {
  campovacio += "- Nombre del evento\n";
  ok = false;
  alert(campovacio);
}

if (aficion == "" || aficion == "Seleccione una Afición...") {
  campovacio += "- Elegir Afición\n";
  ok = false;
  alert(campovacio);
}

if (descripcion == "") {
  campovacio += "- Descripción\n";
  ok = false;
  alert(campovacio);
}

if (maximoparticipantes == "") {
  campovacio += "- Numero maximo de participantes\n";
  ok = false;
  alert(campovacio);
}

if (fechainicio == "") {
  campovacio += "- Fecha inicio\n";
  ok = false;
  alert(campovacio);
}
if (fechafin == "") {
  campovacio += "- Fecha Fin\n";
  ok = false;
  alert(campovacio);
}
if (direccionevento == "") {
  campovacio += "- Dirección\n";
  ok = false;
  alert(campovacio);
}
if (ciudadevento == "") {
  campovacio += "- Ciudad\n";
  ok = false;
  alert(campovacio);
}
if (provincia == "") {
  campovacio += "- Provincia\n";
  ok = false;
  alert(campovacio);
}


//guardar en json 
if(ok == false) {

	// Json para enviar a la api
// var jsondatos = 
// {
// 	"Nombre": "", 
// 	"Aficion": "", 
// 	"Descripcion": "", 
// 	"Participantes": "",
// 	"FechaInicio": "",
// 	"FechaFin": "",
// 	"Direccion": "",
// 	"Ciudad": "",
// 	"Provincia": ""
// };

//var requestURL =

 /*jsondatos.Nombre = nomevent;
 jsondatos.Aficion = aficion;
 jsondatos.Descripcion = descripcion;
jsondatos.Participantes = maximoparticipantes;
jsondatos.FechaInicio = fechainicio;
jsondatos.FechaFin = fechafin;
jsondatos.Direccion = direccionevento;
jsondatos.Ciudad = ciudadevento;
jsondatos.Provincia = provincia;

var salida = '';*/



/*for (var i = 0; i < jsondatos.length; i++) {
	jsondatos[i].Nombre =
	Things[i]
}
*/


// enviar




// fin de la validación
  return ok;
}


/*function tratarevento (nomevent,aficion,descripcion,maximoparticipantes,fechainicio,fechafin,direccionevento,ciudadevento,provincia) {

	
}
*/
