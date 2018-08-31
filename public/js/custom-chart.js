$(document).ready(function () {
	var ctx = document.getElementById("myChart1").getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: ["Blue",  "Green","Yellow", "Pink"],
			datasets: [{
				label: '# of Votes',
				data: [4, 4, 2, 5],
				backgroundColor: [
					'rgba(54, 162, 235, 1)',
					'#92d14f',
					'#ffff00',
					'#ff00fe'
				],
				borderColor: [
					'rgba(54, 162, 235, 1)',
					'#92d14f',
					'#ffff00',
					'#ff00fe'
				],
				borderWidth: 1
			}]
		},
		options: {
			legend: {
				display: false
			},
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero:true
					}
				}]
			}
		}
	});
	
	var ctx = document.getElementById("myChart2").getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: ["Blue",  "Green","Yellow", "Pink"],
			datasets: [{
				label: '# of Votes',
				data: [4, 4, 2, 5],
				backgroundColor: [
					'rgba(54, 162, 235, 1)',
					'#92d14f',
					'#ffff00',
					'#ff00fe'
				],
				borderColor: [
					'rgba(54, 162, 235, 1)',
					'#92d14f',
					'#ffff00',
					'#ff00fe'
				],
				borderWidth: 1
			}]
		},
		options: {
			legend: {
				display: false
			},
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero:true
					}
				}]
			}
		}
	});
	var ctx = document.getElementById("myChart3").getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: ["Blue",  "Green","Yellow", "Pink"],
			datasets: [{
				label: '# of Votes',
				data: [4, 4, 2, 5],
				backgroundColor: [
					'rgba(54, 162, 235, 1)',
					'#92d14f',
					'#ffff00',
					'#ff00fe'
				],
				borderColor: [
					'rgba(54, 162, 235, 1)',
					'#92d14f',
					'#ffff00',
					'#ff00fe'
				],
				borderWidth: 1
			}]
		},
		options: {
			legend: {
				display: false
			},
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero:true
					}
				}]
			}
		}
	});
	var ctx = document.getElementById("myChart4").getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: ["Blue",  "Green","Yellow", "Pink"],
			datasets: [{
				label: '# of Votes',
				data: [4, 4, 2, 5],
				backgroundColor: [
					'rgba(54, 162, 235, 1)',
					'#92d14f',
					'#ffff00',
					'#ff00fe'
				],
				borderColor: [
					'rgba(54, 162, 235, 1)',
					'#92d14f',
					'#ffff00',
					'#ff00fe'
				],
				borderWidth: 1
			}]
		},
		options: {
			 legend: {
				display: false
			},
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero:true
					}
				}]
			}
		}
	});
	
	var ctx = document.getElementById("myChart5").getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: ["Q3 2017 ",  "Q4 2017 ","Q1 2018 ","Q2 2018 "],
			datasets: [{
				label: 'Low',
				data: [1,4,7,10],
				backgroundColor: '#76af40',
			  },
			  {
				label: 'Moderate',
				data: [10,10,7,3],
				backgroundColor: '#d4e019',
			  },
		  {
			label: 'High',
			data: [5,2,2,3],
			backgroundColor: '#e7383d',
		  }]
			},
		options: {
			 legend: {
				display: false
			},
			scales: {
				xAxes: [{
					stacked: true,
					gridLines: {
						display:false
					}
				}],
				yAxes: [{
					stacked: true,
					gridLines: {
						display:false
					}
				}]
			}
		}
	});
	
});
