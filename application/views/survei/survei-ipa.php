<div class="row g-5" >
	<div class="col-md-6">
		<div class="card card-stretch">
			<div class="card-header">
				<h2 class="card-title">Matakuliah</h2>
			</div>
			<div class="card-body">
				<table class="table table-rounded table-striped border gy-7 gs-7">
					<thead>
						<tr class="fw-semibold fs-6 text-gray-800 border-bottom border-gray-200">
							<th>No</th>
							<th>Importance</th>
							<th>Perpormance</th>
							<th>X</th>
							<th>Y</th>
						</tr>
					</thead>
					<tbody>
						<?php $total_x = 0; $total_y=0; $no=1; foreach($results_ipa as $ri): 
                            $total_x += $ri->avg_nilai_i;
                            $total_y += $ri->avg_nilai_p;
                            ?>
						<tr>
							<td><?= $no++ ?></td>
							<td><?= $ri->total_nilai_i?></td>
							<td><?= $ri->total_nilai_p?></td>
							<td><?= $ri->avg_nilai_i?></td>
							<td><?= $ri->avg_nilai_p?></td>
						</tr>
						<?php endforeach;
                        if(count($results_ipa) > 0){
                            $rata_x = $total_x / count($results_ipa);
                            $rata_y = $total_y / count($results_ipa);
                        }
                        
                        ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="card card-stretch">
			<div class="card-header">
				<h2 class="card-title">Diagram</h2>
			</div>
			<div class="card-body">
				<figure class="highcharts-figure">
					<div id="container"></div>
					<p class="highcharts-description">
						Chart showing basic use of bubble series with a custom tooltip formatter.
						The chart uses plot lines to show safe intake levels for sugar and fat.
						Bubble charts are great for comparing three dimensions of data without
						relying on color or 3D charts.
					</p>
				</figure>
			</div>
		</div>
	</div>
</div>
<div class="row g-5">
	<div class="col-md-6">
		<div class="card card-stretch">
			<div class="card-header">
				<h3 class="card-title">Uji Validitas</h3>
			</div>
			<div class="card-body">
				<table class="table table-rounded table-striped border gy-7 gs-7">
					<thead>
						<tr class="fw-semibold fs-6 text-gray-800 border-bottom border-gray-200">
							<th>No Soal</th>
							<th>Rxy</th>
							<!-- <th>Rtable</th> -->
							<th>Keterangan</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($korelasi as $index => $nilai): 
							    if ($nilai > 0.10) {
									$valid = 'Valid';
								} else {
									$valid = 'Tidak Valid';
								}
							?>
						<tr>
							<td><?= $index+1 ?></td>
							<td><?=  $nilai ?></td>
							<!-- <td></td> -->
							<td><?= $valid ?></td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="card card-stretch">
			<div class="card-header">
				<h3 class="card-title">Uji Realibilitas</h3>
			</div>
			<div class="card-body">
				<table class="table table-rounded table-striped border gy-7 gs-7">
					<thead>
						<tr class="fw-semibold fs-6 text-gray-800 border-bottom border-gray-200">
							<th>Koefisien Realibilitas</th>
							<th>Keterangan</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><?= round($realibilitas,3) ?></td>
							<td>Tinggi</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script>
	document.addEventListener('DOMContentLoaded', function () {
		Highcharts.chart('container', {

			chart: {
				type: 'bubble',
				plotBorderWidth: 1,
				zooming: {
					type: 'xy'
				}
			},

			legend: {
				enabled: false
			},

			title: {
				text: 'Sugar and fat intake per country'
			},

			subtitle: {
				text: 'Source: <a href="http://www.euromonitor.com/">Euromonitor</a> and <a href="https://data.oecd.org/">OECD</a>'
			},

			accessibility: {
				point: {
					valueDescriptionFormat: '{index}. {point.name}, fat: {point.x}g, ' +
						'sugar: {point.y}g, obesity: {point.z}%.'
				}
			},

			xAxis: {
				gridLineWidth: 1,
				title: {
					text: ''
				},
				labels: {
					format: '{value}'
				},
				plotLines: [{
					color: 'black',
					dashStyle: 'dot',
					width: 2,
					value: '<?= $rata_x ?>',
					label: {
						rotation: 0,
						y: 15,
						style: {
							fontStyle: 'italic'
						},
						text: ''
					},
					zIndex: 3
				}],
				accessibility: {
					rangeDescription: ''
				}
			},

			yAxis: {
				startOnTick: false,
				endOnTick: false,
				title: {
					text: ''
				},
				labels: {
					format: '{value}'
				},
				maxPadding: 0.2,
				plotLines: [{
					color: 'black',
					dashStyle: 'dot',
					width: 2,
					value: '<?= $rata_y ?>',
					label: {
						align: 'right',
						style: {
							fontStyle: 'italic'
						},
						text: '',
						x: -10
					},
					zIndex: 3
				}],
				accessibility: {
					rangeDescription: ''
				}
			},

			tooltip: {
				useHTML: true,
				headerFormat: '<table>',
				pointFormat: '<tr><th colspan="2"><h3>{point.country}</h3></th></tr>' +
					'<tr><th>Fat intake:</th><td>{point.x}g</td></tr>' +
					'<tr><th>Sugar intake:</th><td>{point.y}g</td></tr>' +
					'<tr><th>Obesity (adults):</th><td>{point.z}%</td></tr>',
				footerFormat: '</table>',
				followPointer: true
			},

			plotOptions: {
				series: {
					dataLabels: {
						enabled: true,
						format: '{point.name}'
					}
				}
			},

			series: [{
				data: <?= json_encode($results_ipa_json) ?> ,
				colorByPoint: true
			}]

		});
	});

</script>
