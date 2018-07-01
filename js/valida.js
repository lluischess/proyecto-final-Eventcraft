function valida(f) {
  var ok = true;
  var msg = "Debes escribir algo en los campos:\n";
  var msgClavesIguales = "¡Las Contraseñas deben ser iguals!\n";
  var msgCorreonovalido = "¡Correo no valido!\n";
  var nombre;
  var apellido;
  var email;
  var pass;
  var repitepass;
  var fecha;
  var direccion;
  var cp;
  var ciudad;
  var provincia;
  var expresion;
// validacion formulario 15/03/18

nombre = document.getElementById("Nombre").value;
apellido = document.getElementById("Apellido").value;
email = document.getElementById("mail").value;
pass = document.getElementById("Password").value;
repitepass = document.getElementById("Repit").value;
fecha = document.getElementById("date").value;
direccion = document.getElementById("Adress").value;
cp = document.getElementById("Postal").value;
ciudad = document.getElementById("City").value;
provincia = document.getElementById("provincia").value;

// Tratar campos vacios
if (nombre == "") {
  msg += "- Nombre\n";
  ok = false;
  alert(msg);
}

if (apellido == "") {
  msg += "- Apellido\n";
  ok = false;
  alert(msg);
}

if (email == "") {
  msg += "- mail\n";
  ok = false;
  alert(msg);
}

if (pass == "") {
  msg += "- Password\n";
  ok = false;
  alert(msg);
}

if (repitepass == "") {
  msg += "- Repit\n";
  ok = false;
  alert(msg);
}
// contraseñas no coinciden
if (repitepass != pass) {
  msgClavesIguales += "- Repit\n";
  alert(msgClavesIguales);
  ok = false;
}

if (fecha == "") {
  msg += "- date\n";
  ok = false;
  alert(msg);
}

if (direccion == "") {
  msg += "- Adress\n";
  ok = false;
  alert(msg);
}

if (cp == "") {
  msg += "- Postal\n";
  ok = false;
  alert(msg);
}

if (ciudad == "") {
  msg += "- City\n";
  ok = false;
  alert(msg);
}

if (provincia == "") {
  msg += "- provincia\n";
  ok = false;
  alert(msg);
}
// expresion de aceptacion para el correo
// expresion= /\w+@\w\.+[a-z]/;
// if (!expresion.test(email)) {
// alert(msgCorreonovalido);
//   ok = false;
//   }

// Validar
  if(ok == false)
  return ok;
}