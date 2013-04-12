// JavaScript Document

//Chequeamos Usuario

function formulario()
{

//Chequeamos nombre
if (document.registro.nombre.value.length==0){
   alert("Introduzca su nombre, por favor.");
   document.registro.nombre.focus();
   return false;
}

//Chequeamos cedula
if (document.registro.cedula.value.length==0){
   alert("Introduzca su cedula, por favor.");
   document.registro.cedula.focus();
   return false;
}

//Chequeamos correo
if (document.registro.email.value.length==0){
   alert("Introduzca su email, por favor.");
   document.registro.email.focus();
   return false;
}

//validamos la direccion
if (document.registro.direccion.value.length==0){
   alert("Introduzca su dirección, por favor.");
   document.registro.direccion.focus();
   return false;
}

//Chequeamos nombre para inicio
if (document.registro.username.value.length==0){
   alert("Introduzca su nombre de inicio de sesión, por favor.");
   document.registro.username.focus();
   return false;
}

//Chequeamos la clave
if (document.registro.clave.value.length==0){
   alert("Introduzca su clave, por favor.");
   document.registro.clave.focus();
   return false;
}

//document.frmRegistro.submit();
alert("¡Muchas gracias; Ha sido registrado sastifactoriamente!");
    window.location='index.html'
	document.registro.submit();
	
}



