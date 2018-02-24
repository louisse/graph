
<script
  src="http://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>


<!DOCTYPE HTML>
<html>
<head>

<script>
$(document).ready(function () {
                var chart = new CanvasJS.Chart("chartContainerGas", {
				theme: "light2",
					title: {
						text: "Gas Sensor"
					},
					axisX:{
						title: "Time in Seconds"
					},
					axisY:{
						includeZero: false,
						suffix: ""
					},
                    zoomEnabled: true,
                    panEnabled: true,
                    animateEnabled: true,
                    data: [ {
                        type: "splineArea",
                        xValueType: "id",
                        y: "y",
                        dataPoints: [] 
                    } ] 

                });

                function updateChart(){
                    $.getJSON("getGasData.php", function (data_points) {
                            chart.options.data[0].dataPoints.push(data_points[0]);
            
                        chart.render();
                    });
                }               

                var updateInterval = 2000;

                setInterval(function(){
                        updateChart()
                }, updateInterval);

            });
</script>


<script>
$(document).ready(function () {
                var chart = new CanvasJS.Chart("chartContainerSound", {
				theme: "light2",
					title: {
						text: "Sound Sensor"
					},
					axisX:{
						title: "Time in Seconds"
					},
					axisY:{
						includeZero: false,
						suffix: ""
					},
                    zoomEnabled: true,
                    panEnabled: true,
                    animateEnabled: true,
                    data: [ {
                        type: "splineArea",
                        xValueType: "x",
                        y: "y",
                        dataPoints: [] 
                    } ] 

                });

                function updateChart(){
                    $.getJSON("getSoundData.php", function (data_points) {
                            chart.options.data[0].dataPoints.push(data_points[0]);
            
                        chart.render();
                    });
                }               

                var updateInterval = 2000;

                setInterval(function(){
                        updateChart()
                }, updateInterval);

            });
</script>

</head>
<body>
<div id="chartContainerGas" style="height: 370px; width: 100%;"></div>


<div id="chartContainerSound" style="height: 370px; width: 100%;"></div>


<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>





</body>
</html>   