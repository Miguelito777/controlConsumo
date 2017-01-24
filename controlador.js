	$('#date').datepicker({
		format: "yyyy/mm/dd",
		startDate: '-3d',
		language: 'es' 
	})
	.on("changeDate", function(e){
		$('#date').datepicker('hide');

		document.getElementById("tableReport").innerHTML = "<img src='ajax-loader.gif'>";
		reportes = new Tienda();
		var fecha = document.getElementById("date").value;

    	x = fecha.split('/');
    	fecha = x[0]+"-"+x[1]+"-"+x[2];
		reportes.getReportDay(fecha);
	});


function showData(datos){
	document.getElementById("tableReport").innerHTML = "";
	// Creo tabla para mostrar datos
	$("#tableReport").append("<table class='table table-striped table-condensed' id='tablaDatos'><tr class='success'><th>Inicio</th><th>Fin</th><th>Bit</th><th>Nota</th><th>Unidad</th></tr></table>");
	for (var i in datos[1]) {
		$("#tablaDatos").append("<tr><td>"+datos[1][i].horaInicio+"</td><td>"+datos[1][i].horaFin+"</td><td>"+datos[1][i].bit+"</td><td>"+datos[1][i].nota+"</td><td>"+datos[1][i].unidad+"</td></tr>");
	};
	
	$("#resumen").append("<table class='table table-striped table-condensed' id='tablaDatosDos'><tr class='success'><th>Horas</th><th>Minutos</th><th>Segundos</th></tr></table>");
	
		$("#tablaDatosDos").append("<tr><td>"+datos[0].horas+"</td><td>"+datos[0].minutos+"</td><td>"+datos[0].segundos+"</td></tr>");
	
}