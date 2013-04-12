// JavaScript Document

//Chequeamos Usuario

function formulario()
{
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
    document.registro.submit();
	window.location='index.html'

}



