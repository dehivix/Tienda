// JavaScript Document

function showLightbox() {
	document.getElementById('over').style.display='block';
	document.getElementById('fade').style.display='block';
}
function hideLightbox() {
	document.getElementById('over').style.display='none';
	document.getElementById('fade').style.display='none';
}


//calendario
function hora(){



<!-- http://www.mundojavascript.com -->

var week = new Array("Dom", "Lun", "Mar", "Mie", "Jue", "Vie", "Sab");

var monthdays = new Array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);

var today = new Date();

var month = today.getMonth()+1;

var nombre_mes='Enero';

var day = today.getDay();

var dayN = today.getDate();

var days = monthdays[month];

if (month == 1) {

  var year = today.getYear();

  if (year%4 == 0) days = 29;

}

document.write("<table border='0' cellspacing='0' cellpadding='0'>");

document.write("<tr>");

if (month==1) nombre_mes='Enero';

else if (month==2) nombre_mes='Febrero';

else if (month==3) nombre_mes='Marzo';

else if (month==4) nombre_mes='Abril';

else if (month==5) nombre_mes='Mayo';

else if (month==6) nombre_mes='Junio';

else if (month==7) nombre_mes='Julio';

else if (month==8) nombre_mes='Agosto';

else if (month==9) nombre_mes='Septiembre';

else if (month==10) nombre_mes='Octubre';

else if (month==11) nombre_mes='Noviembre';

else  nombre_mes='Diciembre';



document.write("<div align='center'>"+"<font size='3' face='Arial' ><b>"+nombre_mes);



for (var i=0; i<7; i++) {

  document.write("<td width='30' height='30'>");



  document.write("<div align='center'>" + week[i] + "</div>");

  

}

document.write("</tr>");



var jumped = 0;

var inserted = 1;

var start = day - dayN%7 + 1;

if (start < 0) start += 7;

var weeks = parseInt((start + days)/7);

if ((start + days)%7 != 0) weeks++;

for (var i=weeks; i>0; i--) {

  document.write("<tr>");

  for (var j=7; j>0; j--) {

    document.write("<td>");

    if (jumped<start || inserted>days) {

      document.write("<div align='center'></div>");

      jumped++;

    }

    else {

      if (inserted == dayN) document.write("<div align='center'>(" + inserted + ")</div>");

      else document.write("<div align='center'>" + inserted + "</div>");

      inserted++;

    }

    document.write("</td>")

  }

  document.write("</tr>");

}

document.write("</table>");

//  End -->
	
	
}