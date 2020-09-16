<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function () {
	var chart = new CanvasJS.Chart("chartContainer", {
	title:{
		text: "Grafik PS"
	},
	axisY:[{
		title: "Jumlah",
		lineColor: "#000000",
		tickColor: "#000000",
		labelFontColor: "#000000",
		titleFontColor: "#000000",
		suffix: ""
	}
	],
	  axisY2: {
	},
	toolTip: {
		shared: true
	},
	legend: {
		cursor: "pointer",
		itemclick: toggleDataSeries
	},
	data: [{
		type: "line",
		name: "Januari 2018",
		color: "#369EAD",
		showInLegend: true,
		axisYIndex: 1,
		dataPoints: [
			{ x: <?php
      while($b = mysqli_fetch_array($data)) {
        echo '"' . $b['data'] . '",';
      }
      ?>,
      y: 16 }
		]
	},
	{
		type: "line",
		name: "Februari 2018",
		color: "#C24642",
		axisYIndex: 0,
		showInLegend: true,
		dataPoints: [
			{ x: new Date(2018, 1, 1), y: 48 },
			{ x: new Date(2018, 1, 3), y: 62 },
			{ x: new Date(2018, 1, 3), y: 36 },
			{ x: new Date(2018, 1, 4), y: 44 },
			{ x: new Date(2018, 1, 5), y: 53 },
			{ x: new Date(2018, 1, 6), y: 72 },
			{ x: new Date(2018, 1, 7), y: 78 },
			{ x: new Date(2018, 1, 8), y: 66 },
			{ x: new Date(2018, 1, 9), y: 56 },
			{ x: new Date(2018, 1, 10), y: 61 },
			{ x: new Date(2018, 1, 11), y: 27 },
			{ x: new Date(2018, 1, 12), y: 65 },
			{ x: new Date(2018, 1, 13), y: 50 },
			{ x: new Date(2018, 1, 14), y: 65 },
			{ x: new Date(2018, 1, 15), y: 76 },
			{ x: new Date(2018, 1, 16), y: 82 },
			{ x: new Date(2018, 1, 17), y: 65 },
			{ x: new Date(2018, 1, 18), y: 46 },
			{ x: new Date(2018, 1, 19), y: 82 },
			{ x: new Date(2018, 1, 20), y: 96 },
			{ x: new Date(2018, 1, 21), y: 85 },
			{ x: new Date(2018, 1, 22), y: 84 },
			{ x: new Date(2018, 1, 23), y: 112 },
			{ x: new Date(2018, 1, 24), y: 67 },
			{ x: new Date(2018, 1, 25), y: 31 },
			{ x: new Date(2018, 1, 26), y: 69 },
			{ x: new Date(2018, 1, 27), y: 81 },
			{ x: new Date(2018, 1, 28), y: 66 }
		]
	},
	{
		type: "line",
		name: "Maret 2018",
		color: "#7F6084",
		axisYIndex: 2,
		showInLegend: true,
		dataPoints: [
		{ x: new Date(2018, 2, 1), y: 73 },
		{ x: new Date(2018, 2, 3), y: 107 },
		{ x: new Date(2018, 2, 3), y: 52 },
		{ x: new Date(2018, 2, 4), y: 54 },
		{ x: new Date(2018, 2, 5), y: 70 },
		{ x: new Date(2018, 2, 6), y: 74 },
		{ x: new Date(2018, 2, 7), y: 75 },
		{ x: new Date(2018, 2, 8), y: 57 },
		{ x: new Date(2018, 2, 9), y: 50 },
		{ x: new Date(2018, 2, 10), y: 44 },
		{ x: new Date(2018, 2, 11), y: 81 },
		{ x: new Date(2018, 2, 12), y: 91 },
		{ x: new Date(2018, 2, 13), y: 66 },
		{ x: new Date(2018, 2, 14), y: 78 },
		{ x: new Date(2018, 2, 15), y: 63 },
		{ x: new Date(2018, 2, 16), y: 57 },
		{ x: new Date(2018, 2, 17), y: 79 },
		{ x: new Date(2018, 2, 18), y: 34 },
		{ x: new Date(2018, 2, 19), y: 85 },
		{ x: new Date(2018, 2, 20), y: 67 },
		{ x: new Date(2018, 2, 21), y: 69 },
		{ x: new Date(2018, 2, 22), y: 62 },
		{ x: new Date(2018, 2, 23), y: 53 },
		{ x: new Date(2018, 2, 24), y: 64 },
		{ x: new Date(2018, 2, 25), y: 57 },
		{ x: new Date(2018, 2, 26), y: 49 },
		{ x: new Date(2018, 2, 27), y: 100 },
		{ x: new Date(2018, 2, 28), y: 55 },
		{ x: new Date(2018, 2, 29), y: 65 },
		{ x: new Date(2018, 2, 30), y: 56 },
		{ x: new Date(2018, 2, 31), y: 48 }
		]
	},
	{
		type: "line",
		name: "April 2018",
		color: "#13870a",
		axisYIndex: 3,
		showInLegend: true,
		dataPoints: [
		{ x: new Date(2018, 3, 1), y: 35 },
		{ x: new Date(2018, 3, 3), y: 49 },
		{ x: new Date(2018, 3, 3), y: 56 },
		{ x: new Date(2018, 3, 4), y: 87 },
		{ x: new Date(2018, 3, 5), y: 96 },
		{ x: new Date(2018, 3, 6), y: 61 },
		{ x: new Date(2018, 3, 7), y: 51 },
		{ x: new Date(2018, 3, 8), y: 83 },
		{ x: new Date(2018, 3, 9), y: 87 },
		{ x: new Date(2018, 3, 10), y: 109 },
		{ x: new Date(2018, 3, 11), y: 123 },
		{ x: new Date(2018, 3, 12), y: 60 },
		{ x: new Date(2018, 3, 13), y: 84 },
		{ x: new Date(2018, 3, 14), y: 52 },
		{ x: new Date(2018, 3, 15), y: 31 },
		{ x: new Date(2018, 3, 16), y: 219 },
		{ x: new Date(2018, 3, 17), y: 210 },
		{ x: new Date(2018, 3, 18), y: 148 },
		{ x: new Date(2018, 3, 19), y: 92 },
		{ x: new Date(2018, 3, 20), y: 119 },
		{ x: new Date(2018, 3, 21), y: 93 },
		{ x: new Date(2018, 3, 22), y: 76 },
		{ x: new Date(2018, 3, 23), y: 82 },
		{ x: new Date(2018, 3, 24), y: 127 },
		{ x: new Date(2018, 3, 25), y: 133 },
		{ x: new Date(2018, 3, 26), y: 130 },
		{ x: new Date(2018, 3, 27), y: 92 },
		{ x: new Date(2018, 3, 28), y: 75 },
		{ x: new Date(2018, 3, 29), y: 72 },
		{ x: new Date(2018, 3, 30), y: 103 }
		]
	},
	{
		type: "line",
		name: "Mei 2018",
		color: "#1139c6",
		axisYIndex: 4,
		showInLegend: true,
		dataPoints: [
		{ x: new Date(2018, 4, 1), y: 91 },
		{ x: new Date(2018, 4, 3), y: 62 },
		{ x: new Date(2018, 4, 3), y: 170 },
		{ x: new Date(2018, 4, 4), y: 146 },
		{ x: new Date(2018, 4, 5), y: 99 },
		{ x: new Date(2018, 4, 6), y: 97 },
		{ x: new Date(2018, 4, 7), y: 134 },
		{ x: new Date(2018, 4, 8), y: 139 },
		{ x: new Date(2018, 4, 9), y: 130 },
		{ x: new Date(2018, 4, 10), y: 135 },
		{ x: new Date(2018, 4, 11), y: 118 },
		{ x: new Date(2018, 4, 12), y: 144 },
		{ x: new Date(2018, 4, 13), y: 63 },
		{ x: new Date(2018, 4, 14), y: 59 },
		{ x: new Date(2018, 4, 15), y: 92 },
		{ x: new Date(2018, 4, 16), y: 80 },
		{ x: new Date(2018, 4, 17), y: 82 },
		{ x: new Date(2018, 4, 18), y: 74 },
		{ x: new Date(2018, 4, 19), y: 76 },
		{ x: new Date(2018, 4, 20), y: 46 },
		{ x: new Date(2018, 4, 21), y: 76 },
		{ x: new Date(2018, 4, 22), y: 105 },
		{ x: new Date(2018, 4, 23), y: 88 },
		{ x: new Date(2018, 4, 24), y: 61 },
		{ x: new Date(2018, 4, 25), y: 71 },
		{ x: new Date(2018, 4, 26), y: 38 },
		{ x: new Date(2018, 4, 27), y: 127 },
		{ x: new Date(2018, 4, 28), y: 109 },
		{ x: new Date(2018, 4, 29), y: 42 },
		{ x: new Date(2018, 4, 30), y: 99 },
		{ x: new Date(2018, 4, 31), y: 118 }
		]
	},
	{
		type: "line",
		name: "Juni 2018",
		color: "#ff0000",
		axisYIndex: 5,
		showInLegend: true,
		dataPoints: [
		{ x: new Date(2018, 5, 1), y: 111 },
		{ x: new Date(2018, 5, 3), y: 142 },
		{ x: new Date(2018, 5, 3), y: 61 },
		{ x: new Date(2018, 5, 4), y: 90 },
		{ x: new Date(2018, 5, 5), y: 74 },
		{ x: new Date(2018, 5, 6), y: 78 },
		{ x: new Date(2018, 5, 7), y: 83 },
		{ x: new Date(2018, 5, 8), y: 102 },
		{ x: new Date(2018, 5, 9), y: 58 },
		{ x: new Date(2018, 5, 10), y: 67 },
		{ x: new Date(2018, 5, 11), y: 102 },
		{ x: new Date(2018, 5, 12), y: 112 },
		{ x: new Date(2018, 5, 13), y: 59 },
		{ x: new Date(2018, 5, 14), y: 71 },
		{ x: new Date(2018, 5, 15), y: 110 },
		{ x: new Date(2018, 5, 16), y: 20 },
		{ x: new Date(2018, 5, 17), y: 9 },
		{ x: new Date(2018, 5, 18), y: 19 },
		{ x: new Date(2018, 5, 19), y: 28 },
		{ x: new Date(2018, 5, 20), y: 30 },
		{ x: new Date(2018, 5, 21), y: 79 },
		{ x: new Date(2018, 5, 22), y: 64 },
		{ x: new Date(2018, 5, 23), y: 59 },
		{ x: new Date(2018, 5, 24), y: 30 },
		{ x: new Date(2018, 5, 25), y: 126 },
		{ x: new Date(2018, 5, 26), y: 94 },
		{ x: new Date(2018, 5, 27), y: 49 },
		{ x: new Date(2018, 5, 28), y: 54 },
		{ x: new Date(2018, 5, 29), y: "" },
		{ x: new Date(2018, 5, 30), y: "" }
		]
	}]
});
chart.render();

function toggleDataSeries(e) {
	if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	} else {
		e.dataSeries.visible = true;
	}
	e.chart.render();
}

}
</script>
</head>
<body>
<div id="chartContainer" style="height: 300px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>
