<?php

include "conectabd.php";
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Reporte</title>

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Temperatura'
        },
        subtitle: {
            text: ''
        },
        xAxis: {
            categories: [
<?php
date_default_timezone_set("America/Bogota");
$hoy= date('Y-m-d');
$ayer3= date('Y-m-d', strtotime('-2 day'));
$sql=mysql_query("select * from temperatura");
while($res=mysql_fetch_array($sql)){			
?>
			
			['<?php echo $res['timestamp'] ?>'],
			
<?php
}
?>
			
			],
            title: {
                text: null
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'C',
                align: 'high'
            },
            labels: {
                overflow: 'justify'
            }
        },
        tooltip: {
            valueSuffix: ' °C'
        },
        plotOptions: {
            bar: {
                dataLabels: {
                    enabled: true
                }
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: -20,
            y: 100,
            floating: true,
            borderWidth: 1,
            backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
            shadow: true
        },
        credits: {
            enabled: false
        },
        series: [{
            name: 'Temperatura',
            data: [
			<?php
$sql=mysql_query("select * from temperatura");
while($res=mysql_fetch_array($sql)){			
?>			
			[<?php echo $res['valor'] ?>],
			
		
<?php
}
?>			
			]
        }]
    });
});
		</script>
	</head>
	<body>
<script src="Highcharts-4.1.5/js/highcharts.js"></script>        
<script src="Highcharts-4.1.5/js/modules/exporting.js"></script>

<div id="container" style="min-width: 310px; max-width: 800px; height: 400px; margin: 0 auto"></div>
<br><br>
<center> <button style="border-radius:15px; font-size:24px; border:solid #F00; font-family:'Comic Sans MS', cursive; background:#C90;"><a href="index.html">Inicio</a></button></center>	</body>
</html>