function cargarPagina (url) {
  $('#contenedor').load(url);
}

google.charts.load("current", {packages:["corechart"]});
google.charts.setOnLoadCallback(drawChart);
function drawChart() {
	var formData = new FormData();        
	formData.append("opcion",4);
	var array = null;
	/*generar metodo que me traera los datos de la base de datos de gastos*/ 
	$.ajax({
		url : "../controler/ctrGasto.php",
		type : "post",
		dataType : "html",
		data : formData,
		async:false,
		cache : false,
		contentType : false,
		processData : false
	}).done(function(data) {
		array = data;
	});
	
	var array = JSON.parse(array);
	var data = google.visualization.arrayToDataTable(
		array
	);

	var options = {
		title: 'Mis gastos',
		pieHole: 0.4,
	};

	var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
	chart.draw(data, options);
}


