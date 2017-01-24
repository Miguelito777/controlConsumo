function Tienda(){

}
Tienda.prototype.getReportDay = function(date){
	$.ajax({
		url : "listarflesa-1.php",
		type : "GET",
		data : {"dateReport" : date},
		success : function(data){
			var datos = $.parseJSON(data);
			showData(datos);
		}
	})
}