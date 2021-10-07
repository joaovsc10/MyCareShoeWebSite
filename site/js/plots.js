
(function ($) {
  
  
	
		var cadencePlot = new Chart("cadencePlot", {
  type: "line",
  data: {
    labels: [],
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "rgba(0,0,255,1.0)",
      borderColor: "rgba(0,0,255,0.1)",
      data: []
    }]
  },
  options: {
    legend: {display: false},
    scales: {
      yAxes: [{ticks: {beginAtZero:true}
	  ,scaleLabel: {
        display: true,
        labelString: 'Cadence'
      }}]
    },
	title: {
      display: true,
      text: "Evolution of cadence over time"
    }
  }
});

var balancePlot = new Chart("balancePlot", {
  type: "line",
  data: {
    labels: [],
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "rgba(0,0,255,1.0)",
      borderColor: "rgba(0,0,255,0.1)",
      data: []
    }]
  },
  options: {
    legend: {display: false},
    scales: {
      yAxes: [{ticks: {beginAtZero:true}
	  ,scaleLabel: {
        display: true,
        labelString: 'balance'
      }}]
    },
	title: {
      display: true,
      text: "Evolution of balance over time"
    }
  }
});


var stepsPlot = new Chart("stepsPlot", {
  type: "line",
  data: {
    labels: [],
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "rgba(0,0,255,1.0)",
      borderColor: "rgba(0,0,255,0.1)",
      data: []
    }]
  },
  options: {
    legend: {display: false},
    scales: {
      yAxes: [{ticks: {beginAtZero:true}
	  ,scaleLabel: {
        display: true,
        labelString: 'steps'
      }}]
    },
	title: {
      display: true,
      text: "Evolution of steps over time"
    }
  }
});

var leftFootPlot = new Chart("leftFootPlot", {
  type: "line",
  data: {
    labels: [],
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "rgba(0,0,255,1.0)",
      borderColor: "rgba(0,0,255,0.1)",
      data: []
    }]
  },
  options: {
    legend: {display: false},
    scales: {
      yAxes: [{ticks: {beginAtZero:true}
	  ,scaleLabel: {
        display: true,
        labelString: 'Pressure (kPa)'
      }}]
    },
	title: {
      display: true,
      text: "Evolution of left foot pressure over time"
    }
  }
});


var rightFootPlot = new Chart("rightFootPlot", {
  type: "line",
  data: {
    labels: [],
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "rgba(0,0,255,1.0)",
      borderColor: "rgba(0,0,255,0.1)",
      data: []
    }]
  },
  options: {
    legend: {display: false},
    scales: {
      yAxes: [{ticks: {beginAtZero:true}
	  ,scaleLabel: {
        display: true,
        labelString: 'Pressure (kPa)'
      }}]
    },
	title: {
      display: true,
      text: "Evolution of right foot pressure over time"
    }
  }
});

		function updateChartData(data){
  var newYDataCadence=[];
  var newXDataCadence=[];
  var newYDataBalance=[];
  var newXDataBalance=[];
  var newYDataSteps=[];
  var newXDataSteps=[];
  
  for(var i=0;i<data.records.length;i++){
     newYDataCadence.push(data.records[i].cadence);
	 newXDataCadence.push(data.records[i].date);
	 
	 newYDataBalance.push(data.records[i].balance);
	 newXDataBalance.push(data.records[i].date);
	 
	 newYDataSteps.push(data.records[i].steps);
	 newXDataSteps.push(data.records[i].date);
	 
  }
    cadencePlot.data.datasets[0].data =newYDataCadence;
	cadencePlot.data.labels=newXDataCadence;
	
	balancePlot.data.datasets[0].data =newYDataBalance;
	balancePlot.data.labels=newXDataBalance;
	
	stepsPlot.data.datasets[0].data =newYDataSteps;
	stepsPlot.data.labels=newXDataSteps;
	
  cadencePlot.update();
  balancePlot.update();
  stepsPlot.update();
}

	

		
   

function updateChartSensorsData(data){
	
	
  var newYDataLeftFoot=[];
  var newXDataLeftFoot=[];
  var newYDataRightFoot=[];
  var newXDataRightFoot=[];
 
  
  for(var i=0;i<data.records.length;i++){

	
     newYDataLeftFoot.push((Math.round((Number(data.records[i].S1)+Number(data.records[i].S2)+Number(data.records[i].S3)+Number(data.records[i].S4)+Number(data.records[i].S5)+Number(data.records[i].S6)+Number(data.records[i].S7)+Number(data.records[i].S8)+Number(data.records[i].S9))/9)*10000)/10000);
	 newXDataLeftFoot.push(data.records[i].date);
	 
	 newYDataRightFoot.push((Math.round((Number(data.records[i].S10)+Number(data.records[i].S11)+Number(data.records[i].S12)+Number(data.records[i].S13)+Number(data.records[i].S14)+Number(data.records[i].S15)+Number(data.records[i].S16)+Number(data.records[i].S17)+Number(data.records[i].S18))/9)*10000)/10000);
	 newXDataRightFoot.push(data.records[i].date);

	 
  }
    leftFootPlot.data.datasets[0].data =newYDataLeftFoot;
	leftFootPlot.data.labels=newXDataLeftFoot;
	
	rightFootPlot.data.datasets[0].data =newYDataRightFoot;
	rightFootPlot.data.labels=newXDataRightFoot;
	

  rightFootPlot.update();
  leftFootPlot.update();
}
var start_date = new Date(document.getElementById("start_date").valueAsDate);
var start_date_format=start_date.getFullYear()+"-"+(Number(start_date.getMonth())+1)+"-"+start_date.getDate();

var end_date = new Date(document.getElementById("end_date").valueAsDate);
var end_date_format=end_date.getFullYear()+"-"+(Number(end_date.getMonth())+1)+"-"+end_date.getDate();


		$.ajax({
			url:"http://localhost/mycareshoeapi/search.php",
			method:"POST",
			data:{patient_number:'<?php echo $_GET['patient_number']; ?>', start_date:start_date_format, end_date:end_date_format, topic:"statistics"},
			dataType:"JSON",
			success:function(data)
			{
			 updateChartData(data);
			}
   })
   
   $.ajax({
			url:"http://localhost/mycareshoeapi/search.php",
			method:"POST",
			data:{patient_number:'<?php echo $_GET['patient_number']; ?>', start_date:start_date_format, end_date:end_date_format, topic:"sensorsReading"},
			dataType:"JSON",
			success:function(data)
			{
			 updateChartSensorsData(data);
			}
   })
    

})(jQuery);