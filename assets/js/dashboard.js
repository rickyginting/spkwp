(function ($) {
		var $checkbox = $('.todo-list .checkbox input[type=checkbox]');

		$checkbox.change(function () {
			if ($(this).is(':checked')) {
				$(this).parent().addClass('checked');
			} else {
				$(this).parent().removeClass('checked');
			}
		});

		$checkbox.each(function (index) {
			if ($(this).is(':checked')) {
				$(this).parent().addClass('checked');
			} else {
				$(this).parent().removeClass('checked');
			}
		});
		
				 //Flot Charts
		  var barOptions = {
				series: {
					bars: {
						show: !0,
						barWidth: 0.5,
						fill: true,
						fillColor: {
							colors: [{
									opacity: 1
								}, {
									opacity: 1
								}]
						}
					}
				},
				xaxis: {
					tickDecimals: 0,
					font: {
						weight: "bold"
					},
					color: "#D6D8DB",
					tickColor: "rgba(237,194,64,0.25)",
					tickLength: 5,
					ticks: [[0,""],[1,"J"],[2,"F"],[3,"M"],[4,"A"],[5,"M"],[6,"J"],[7,"J"],[8,"A"],[9,"S"],[10,"O"],[11,"N"],[12,"D"]]
				},
				yaxis: {
					ticks: [],
					min: 0,
					autoscaleMargin: 0.1
				},
				colors: ["#efefef"],
				grid: {
					color: "#999999",
					hoverable: true,
					clickable: true,
					tickColor: "#D4D4D4",
					borderWidth: 0
				},
				legend: {
					show: false
				},
				tooltip: false
			};
			var barData = {
				label: "bar",
				data: [
					[1, 164],
					[2, 250],
					[3, 130],
					[4, 184],
					[5, 122],
					[6, 260],
					[7, 182],
					[8, 201],
					[9, 256],
					[10, 129],
					[11, 120],
					[12, 80]
				]
			};
			$.plot($("#online-signup"), [barData], barOptions);
			
			//revenue chart
			$.plot($("#total-revenue"), [
					{
						label: "bar",
						data: [
							[1, 164],
							[2, 250],
							[3, 130],
							[4, 184],
							[5, 10],
							[6, 360],
							[7, 182],
						]
					}
				], 
				{
					series: {
					  points: {
						  show: true
					  },
					  lines: {
						  show: true
					  }
					},
					xaxis: {
						ticks: []
					},
					yaxis: {
						ticks: []
					},
					colors: ["#efefef"],
					grid: {
						color: "#999999",
						hoverable: true,
						clickable: true,
						tickColor: "#D4D4D4",
						borderWidth: 0
					},
					legend: {
						show: false
					},
					tooltip: false
				}
			);
			
			// LINE CHART
			var lineChart = new Morris.Area({
				element: 'last-month-sale',
				data: [
					{period: '2011 Q1', iphone: 14},
					{period: '2011 Q2', iphone: 10},
					{period: '2011 Q3', iphone: 28},
					{period: '2011 Q4', iphone: 8},
					{period: '2012 Q1', iphone: 26},
					{period: '2012 Q2', iphone: 9}
				],
				axes: false,
				grid: false,
				xkey: 'period',
				ykeys: ['iphone'],
				labels: ['iPhone'],
				pointSize: 0,
				hideHover: 'auto',
				resize: true,
				lineColors: ['#7e7ac3'],
				lineWidth: 1,
				padding: 0,
				hoverCallback: function(index, options, content) {
					return false;
				},
		 });
		
		//KNOB CHART
		$(".knob").knob();
		
		//DONUT CHART
		 var donutChart = new Morris.Donut({
			element: 'morris-donut-chart',
			data: [{label: "Registered", value: 1920},
				  {label: "Bounce", value: 1260},
				  {label: "Visitors", value: 1320}],
			resize: true,
			colors: ['#6059ee', '#4bc0c0', '#fa3b63'],
		 });
		
		 //VACTOR MAP
		 $('#world-map-markers').vectorMap({
			map: 'world_mill_en',
			scaleColors: ['#C8EEFF', '#0071A4'],
			normalizeFunction: 'polynomial',
			hoverOpacity: 0.7,
			hoverColor: false,
			regionStyle: {
				initial: {
					fill: '#DCDCDC',
					'fill-opacity': 1,
					 stroke: 'none',
					'stroke-width': 0,
					'stroke-opacity': 1
				},
				hover: {
					fill: '#CCCCCC',
					'fill-opacity': 1,
					cursor: 'pointer'
				},
				selected: {
					fill: '#CCCCCC'
				},
				selectedHover: {}
			},
			markerStyle: {
				initial: {
					fill: '#6059ee',
					stroke: '#ffffff',
					"stroke-width": 2,
					r: 10
				},
				hover: {
					stroke: '#ec407a',
					"stroke-width": 2,
					cursor: 'pointer'
				},
				selected: {
					fill: '#ec407a',
					"stroke-width": 0,
				},
			},
			backgroundColor: '#F8F8F8',
			markers: [
			  {latLng: [41.90, 12.45], name: 'Vatican City'},
			  {latLng: [43.73, 7.41], name: 'Monaco'},
			  {latLng: [-0.52, 166.93], name: 'Nauru'},
			  {latLng: [-8.51, 179.21], name: 'Tuvalu'},
			  {latLng: [43.93, 12.46], name: 'San Marino'},
			  {latLng: [47.14, 9.52], name: 'Liechtenstein'},
			  {latLng: [7.11, 171.06], name: 'Marshall Islands'},
			  {latLng: [17.3, -62.73], name: 'Saint Kitts and Nevis'},
			  {latLng: [3.2, 73.22], name: 'Maldives'},
			  {latLng: [35.88, 14.5], name: 'Malta'},
			  {latLng: [12.05, -61.75], name: 'Grenada'},
			  {latLng: [13.16, -61.23], name: 'Saint Vincent and the Grenadines'},
			  {latLng: [13.16, -59.55], name: 'Barbados'},
			  {latLng: [17.11, -61.85], name: 'Antigua and Barbuda'},
			  {latLng: [-4.61, 55.45], name: 'Seychelles'},
			  {latLng: [7.35, 134.46], name: 'Palau'},
			  {latLng: [42.5, 1.51], name: 'Andorra'},
			  {latLng: [14.01, -60.98], name: 'Saint Lucia'},
			  {latLng: [6.91, 158.18], name: 'Federated States of Micronesia'},
			  {latLng: [1.3, 103.8], name: 'Singapore'},
			  {latLng: [1.46, 173.03], name: 'Kiribati'},
			  {latLng: [-21.13, -175.2], name: 'Tonga'},
			  {latLng: [15.3, -61.38], name: 'Dominica'},
			  {latLng: [-20.2, 57.5], name: 'Mauritius'},
			  {latLng: [26.02, 50.55], name: 'Bahrain'},
			  {latLng: [0.33, 6.73], name: 'São Tomé and Príncipe'}
			]
		  });
		  
		  //Polar Chart
		  var polarData = [
			{
				value: 180,
				color: "#ff6384",
				highlight: "#ef5374",
				label: "Books"
			},
			{
				value: 300,
				color: "#4bc0c0",
				highlight: "#43b8b8",
				label: "iPhone"
			},
			{
				value: 130,
				color: "#ffce56",
				highlight: "#eebd45",
				label: "App"
			},
			{
				value: 80,
				color: "#e4e6ea",
				highlight: "#d9dbdf",
				label: "Software"
			},
			{
				value: 250,
				color: "#36a2eb",
				highlight: "#2a96df",
				label: "Laptop"
			}
		];

		var polarOptions = {
			scaleShowLabelBackdrop: true,
			scaleBackdropColor: "rgba(255,255,255,0.75)",
			scaleBeginAtZero: true,
			scaleBackdropPaddingY: 1,
			scaleBackdropPaddingX: 1,
			scaleShowLine: true,
			segmentShowStroke: true,
			segmentStrokeColor: "#fff",
			segmentStrokeWidth: 2,
			animationSteps: 100,
			animationEasing: "easeOutBounce",
			animateRotate: true,
			animateScale: false,
			responsive: true,
		};
	
		var ctx = document.getElementById("polarChart").getContext("2d");
		var myNewChart = new Chart(ctx).PolarArea(polarData, polarOptions);
	
})(jQuery);

		
