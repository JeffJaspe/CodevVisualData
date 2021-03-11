<!DOCTYPE html>
<html>
<head>
	<title> Data Visualization Project</title>
	<link rel="stylesheet" href="css\bootstrap.min.css">
	<script src="Javascript\jquery-3.6.0.min.js"></script>
	<script src="Javascript\bootstrap.min.js">	</script>
	<script src="Javascript\highcharts.js"></script>
	<script src="Javascript\highcharts-3d.js"></script>
	<script src="Javascript\highcharts-more.js"></script>
	<script src="Javascript\exporting.js"></script>
	<script src="Javascript\export-data.js"></script>
	<script src="Javascript\accessibility.js"></script>
	<script src="Javascript\data.js"></script>
	<script src="Javascript\papaparse.min.js"></script>
</head>
<body>

	<div calss="container">
		<div class="row"></div>
			<div class="col-sm-6 col-md-6" >
				<div  id="container1"></div>
			</div>
			<div class="col-sm-6 col-md-6" >
				<div  id="container2"></div>
			</div>
			<div class="col-sm-6 col-md-6" >
				<div  id="container3"></div>
			</div>
			<div class="col-sm-6 col-md-6" >
				<div  id="container4"></div>
			</div>
	</div>

<script type="text/javascript">

//	$.get('pkdata2.csv', function(csvfile) {
	//	var data = parseCSVData(csvfile);
		
	
	var janvalue = 0;
	var febvalue = 0;
	var marvalue = 0;
	var aprvalue = 0;
	var mayvalue = 0;
	var junvalue = 0;
	var julvalue = 0;
	var augnvalue = 0;
	var sepvalue = 0;
	var octvalue = 0;
	var novvalue = 0;
	var decvalue = 0;
	
	
	$.ajax({
	  type: "GET",  
	  url: "pkdata2.csv",
	  dataType: "text",       
	  success: function(response)  
	  {
		var data1 = response;
		var datas = data1.split("\n");
		$.each(datas, function(i) {
			var newData = datas[i].split(",");
			var newDate = newData[0];
			var newNet = newData[1];
			
			var getDate = newDate.split("/");
					
				if(getDate[0] == '1'){
					janvalue = janvalue + parseInt(newNet);		
				}
				if(getDate[0] == '2'){
					febvalue = febvalue + parseInt(newNet);		
				}

				if(getDate[0] == '3'){
					marvalue = marvalue + parseInt(newNet);		
				}

				if(getDate[0] == '4'){
					aprvalue = aprvalue + parseInt(newNet);		
				}

				if(getDate[0] == '5'){
					mayvalue = mayvalue + parseInt(newNet);		
				}

				if(getDate[0] == '6'){
					junvalue = junvalue + parseInt(newNet);		
				}

				if(getDate[0] == '7'){
					julvalue = julvalue + parseInt(newNet);		
				}
				if(getDate[0] == '8'){
					augnvalue = augnvalue + parseInt(newNet);		
				}
				if(getDate[0] == '9'){
					sepvalue = sepvalue + parseInt(newNet);		
				}
				if(getDate[0] == '10'){
					octvalue = octvalue + parseInt(newNet);		
				}
				if(getDate[0] == '11'){
					novvalue = novvalue + parseInt(newNet);		
				}
				if(getDate[0] == '12'){
					decvalue = decvalue + parseInt(newNet);		
				}



			
					
			//datasum.push(sumvalue);
			// if(getDate[0] == '2'){
				// febVal = febVal + parseInt(newNet);
				
			// }
			
		}); 
		
		//alert(datasum);
		var datasum = [janvalue, febvalue, marvalue, aprvalue, mayvalue, junvalue, julvalue, augnvalue, sepvalue, octvalue,novvalue,decvalue];
	
		Highcharts.chart('container1', {
			chart: {
				type: 'column',
				options3d: {
					enabled: true,
					alpha: 10,
					beta: 25,
					depth: 70
				}
			},
			title: {
				text: 'Total Sales per Month of Peanut Kisses in 2020'
			},
			subtitle: {
				text: 'Notice the difference between a 0 value and a null point'
			},
			plotOptions: {
				column: {
					depth: 25
				}
			},
			xAxis: {
				categories: Highcharts.getOptions().lang.shortMonths,
				labels: {
					skew3d: true,
					style: {
						fontSize: '16px'
					}
				}
			},
			yAxis: {
				title: {
					text: null
				}
			},
			series: [{
				name: 'Sales',
				data: datasum
			}]
		});
	  } 
	  
	});
	
	
	
	

// function parseCSVData(csvfile){
	
	// var data = [];
	
	// var lines = csvfile.split(",");
	
	// $.each(lines, function(linenumber, line) {
		// if (linenumber != 0 ) {
			
			// var fields = line.split(",");
			// if (fields.lenght == 2) {
				// var timestamp = Data.parse(field[0])
				// var value = parseFloat(fields[1]);
				// data.push([timestamp,value]);
			
			// }
			
		 
		// }
		
	// }); 

	// return data.reversed();
// }


</script>

</body>
</html>