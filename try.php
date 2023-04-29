<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Description of the page">
	<meta name="keywords" content="Keyword1, Keyword2, Keyword3">
	<meta name="author" content="Author Name">
	<meta name="robots" content="index, follow">
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.2.1/chart.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"></script>
	<script src="myscript.js"></script>

	<title>Female-category analysis</title>


</head>

<body>
	<?php
	$data = array(array("x", array(2018, 2019, 2020, 2021), array(200, 300, 500, 900)), array("y", array(2018, 2019,2020, 2021), array(null, 100, 400, 1200)));
	?>

	<?php $colors = array('red', 'blue', 'green', 'orange', 'purple', 'yellow', 'teal', 'magenta', 'lime', 'navy', 'maroon', 'olive', 'aqua', 'silver', 'fuchsia'); ?>

	<div class="chart">
		<canvas id="myChart"></canvas>
		<script>
			// Define the data
			var data = <?php echo json_encode($data); ?>;
			var colors = <?php echo json_encode($colors); ?>;

			// Get the chart context
			var ctx = document.getElementById('myChart').getContext('2d');

			// Create the chart
			var myChart = new Chart(ctx, {
				type: 'line',
				data: {
					labels: [], // X-axis labels
					datasets: []
				},
				options: {
					scales: {
						yAxes: [{
							ticks: {
								beginAtZero: true
							}
						}]
					}
				}
			});

			// Add data to the chart
			for (var i = 0; i < data.length; i++) {
				var branch = data[i][0];
				var yrs = data[i][1];
				var opr = data[i][2];
				var clr = colors[i];

				var p = 0;
                    var new_opr = [];
                    if(!yrs.includes(2018))
                    {
                        new_opr.push(null);
                    }
                    else
                    {
                        new_opr.push(opr[p]);
                        p = p+1;
                    }
                    if(!yrs.includes(2019))
                    {
                        new_opr.push(null);
                    }
                    else
                    {
                        new_opr.push(opr[p]);
                        p = p+1;
                    }
                    if(!yrs.includes(2020))
                    {
                        new_opr.push(null);
                    }
                    else
                    {
                        new_opr.push(opr[p]);
                        p = p+1;
                    }
                    if(!yrs.includes(2021))
                    {
                        new_opr.push(null);
                    }
                    else
                    {
                        new_opr.push(opr[p]);
                        p = p+1;
                    }
                    if(!yrs.includes(2022))
                    {
                        new_opr.push(null);
                    }
                    else
                    {
                        new_opr.push(opr[p]);
                        p = p+1;
                    }

				myChart.data.datasets.push({
					label: branch,
					data: new_opr,
					borderColor: clr,
					fill: false,
					spanGaps: true
				});
			}

			myChart.data.labels = yrs;
			myChart.update();
		</script>
	</div>


</body>

</html>
