$(document).ready(function () {

	var ctx = $("#bar-chartcanvas");

	var data = {
		labels : ["Sen, 25 Mar", "Sel, 26 Mar", "Rab, 27 Mar", "Kam, 28 Mar", "Jum, 29 Mar", "Sab, 30 Mar", "Min, 31 Mar"],
		datasets : [
			/*{
				label : "TeamA score",
				data : [10, 50, 25, 70, 40],
				backgroundColor : [
					"rgba(10, 20, 30, 0.3)",
					"rgba(10, 20, 30, 0.3)",
					"rgba(10, 20, 30, 0.3)",
					"rgba(10, 20, 30, 0.3)",
					"rgba(10, 20, 30, 0.3)"
				],
				borderColor : [
					"rgba(10, 20, 30, 1)",
					"rgba(10, 20, 30, 1)",
					"rgba(10, 20, 30, 1)",
					"rgba(10, 20, 30, 1)",
					"rgba(10, 20, 30, 1)"
				],
				borderWidth : 1
			},*/
			{
				label : "",
				data : [2, 3.5, 4, 6, 5, 1, 3],
				backgroundColor : [
					"rgba(50, 150, 250, 0.3)",
					"rgba(50, 150, 250, 0.3)",
					"rgba(50, 150, 250, 0.3)",
					"rgba(50, 150, 250, 0.3)",
					"rgba(50, 150, 250, 0.3)",
					"rgba(50, 150, 250, 0.3)",
					"rgba(50, 150, 250, 0.3)"
				],
				borderColor : [
					"rgba(50, 150, 250, 1)",
					"rgba(50, 150, 250, 1)",
					"rgba(50, 150, 250, 1)",
					"rgba(50, 150, 250, 1)",
					"rgba(50, 150, 250, 1)",
					"rgba(50, 150, 250, 1)",
					"rgba(50, 150, 250, 1)"
				],
				borderWidth : 1
			}
		]
	};

	var options = {
		title : {
			display : false,
			position : "top",
			text : "Bar Graph",
			fontSize : 18,
			fontColor : "#111"
		},
		legend : {
			display : false,
			position : "bottom"
		},
		scales : {
			yAxes : [{
				ticks : {
					min : 0
				}
			}]
		}
	};

	var chart = new Chart( ctx, {
		type : "bar",
		data : data,
		options : options
	});

});