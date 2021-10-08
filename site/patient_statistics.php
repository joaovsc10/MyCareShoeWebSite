<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Patient Statistics</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
	<script
src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
</script>
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Montserrat:300,400,700%7CPoppins:300,400,500,700,900">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <?php
  session_start();
  if(!isset($_SESSION['profile_id']))
{

    // restrição para o caso de inserir o endereço sem ter feito login
    header('Location: log_in.php');
    exit();
}else{
	if($_SESSION['profile_id']==3){
		header('Location:index.php');
	exit();
	}
}
?>

  <body>

        <?php include('header.html')?>


      <section class="section section-intro context-dark">
        <div class="intro-bg" style="background-color:powderblue;" background-position: top center;></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-8 text-center">
              <h1 class="font-weight-bold wow fadeInLeft">My Care Shoe</h1>
              <p class="intro-description wow fadeInRight"> We want to help you, we will analyze your patient's sensor readings, and guide you to a better diagnose</p>
            </div>
          </div>
        </div>
      </section>

      <section class="section custom-section position-relative section-md">
          <div class="container wow fadeInLeft">
              <h2 class="text-capitalize devider-left wow fadeInLeft">Search for patient's warnings</h2>



		<div class="row row-50 justify-content-center align-items-center">
			 <form id="form" align-content="center">
         <div class="col">
         <div class="form-group">
           <label for="start_date"><strong>Start Date</strong></label>
			  <input type="datetime-local" class="form-control" id="start_date" name="start_date" >
        </div>
        <div class="form-group">
          <label for="end_date"><strong>End Date</strong></label>
			  <input type="datetime-local" class="form-control" id="end_date" name="end_date">
        </div>
        <div class="form-group">
			  <input type="submit" class="button-width-190 button-primary button-circle button-lg button offset-top-30" id="submit" value="Search">
        </div>
			</form>
	</div>
			</div>

			<div class="row row-50 justify-content-center" style="display:none" id="1">
			<canvas id="cadencePlot" style="width:100%;max-width:800px"></canvas>
			<canvas id="balancePlot" style="width:100%;max-width:800px"></canvas>
			<canvas id="stepsPlot" style="width:100%;max-width:800px"></canvas>
			<canvas id="leftFootPlot" style="width:100%;max-width:800px"></canvas>
			<canvas id="rightFootPlot" style="width:100%;max-width:800px"></canvas>
			<canvas id="leftTemperaturePlot" style="width:100%;max-width:800px"></canvas>
			<canvas id="rightTemperaturePlot" style="width:100%;max-width:800px"></canvas>
			<canvas id="leftHumidityPlot" style="width:100%;max-width:800px"></canvas>
			<canvas id="rightHumidityPlot" style="width:100%;max-width:800px"></canvas>
			<canvas id="leftStancePlot" style="width:100%;max-width:800px"></canvas>
			<canvas id="rightStancePlot" style="width:100%;max-width:800px"></canvas>
        </div>
		</div>

		</section>

    <?php include('footer.html')?>

    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
	<script>
$("#form").submit(function(e){
    e.preventDefault();

	$('#1').show();
 });

	</script>
	<script>
	var cadencePlot, balancePlot, stepsPlot, leftFootPlot, rightFootPlot, leftTemperaturePlot, rightTemperaturePlot, leftHumidityPlot, rightHumidityPlot, leftStancePlot, rightStancePlot;
	var array=[cadencePlot, balancePlot, stepsPlot, leftFootPlot, rightFootPlot, leftTemperaturePlot, rightTemperaturePlot, leftHumidityPlot, rightHumidityPlot, leftStancePlot, rightStancePlot];

	$("#form").submit(function(e) {

	var arrayPlotName=["cadencePlot", "balancePlot",  "stepsPlot", "leftFootPlot", "rightFootPlot", "leftTemperaturePlot", "rightTemperaturePlot", "leftHumidityPlot", "rightHumidityPlot", "leftStancePlot", "rightStancePlot"];
	var arrayPlotTitle=["Evolution of cadence over time", "Evolution of balance over time", "Evolution of steps over time", "Evolution of left foot sensors values over time", "Evolution of right foot sensors values over time", "Evolution of left foot temperature values over time", "Evolution of right foot temperature values over time", "Evolution of left foot humidity values over time", "Evolution of right foot humidity values over time", "Evolution of left foot stance time values over time", "Evolution of right foot stance time values over time"]
	var arrayYLabels=["Cadence", "Percentage of left foot contribution to total pressure", "Steps", "Pressure (kPa)", "Pressure (kPa)", "Temperature (ºC)", "Temperature (ºC)", "Humidity (%)", "Humidity (%)", "Time (seconds)", "Time (seconds)"];


	for(var i=0;i<array.length;i++){

		if(array[i] instanceof Chart)
		{
			array[i].destroy();
		}

		setPlots(arrayPlotName[i], arrayYLabels[i], arrayPlotTitle[i]);
	}


	function setPlots(plotName, yLabel, plotTitle){


		array[i] = new Chart(plotName, {
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
				labelString: yLabel
			  }}]
			},
			title: {
			  display: true,
			  text: plotTitle
			}
		  }
});
	}


		function updateChartData(data){
  var newYDataCadence=[];
  var newXDataCadence=[];
  var newYDataBalance=[];
  var newXDataBalance=[];
  var newYDataSteps=[];
  var newXDataSteps=[];
  var newYDataLeftStance=[];
  var newYDataRightStance=[];



  for(var i=0;i<data.records.length;i++){
     newYDataCadence.push(data.records[i].cadence);
	 newXDataCadence.push(data.records[i].date);

	 newYDataBalance.push(data.records[i].balance);
	 newXDataBalance.push(data.records[i].date);

	 newYDataSteps.push(data.records[i].steps);
	 newXDataSteps.push(data.records[i].date);

	 newYDataLeftStance.push(data.records[i].left_foot_stance);
	 newYDataRightStance.push(data.records[i].right_foot_stance);


  }
    array[0].data.datasets[0].data =newYDataCadence;
	array[0].data.labels=newXDataCadence;

	array[1].data.datasets[0].data =newYDataBalance;
	array[1].data.labels=newXDataBalance;

	array[2].data.datasets[0].data =newYDataSteps;
	array[2].data.labels=newXDataSteps;

	array[9].data.datasets[0].data =newYDataLeftStance;
	array[9].data.labels=newXDataSteps;

	array[10].data.datasets[0].data =newYDataRightStance;
	array[10].data.labels=newXDataSteps;



  array[0].update();
  array[1].update();
  array[2].update();
  array[9].update();
  array[10].update();

}






function updateChartSensorsData(data){


  var newYDataLeftFoot=[];
  var newXDataLeftFoot=[];
  var newYDataRightFoot=[];
  var newXDataRightFoot=[];

  var leftFootTemp=[];
  var rightFootTemp=[];
  var leftFootHumidity=[];
  var rightFootHumidity=[];

  for(var i=0;i<data.records.length;i++){


     newYDataLeftFoot.push((Math.round((Number(data.records[i].S1)+Number(data.records[i].S2)+Number(data.records[i].S3)+Number(data.records[i].S4)+Number(data.records[i].S5)+Number(data.records[i].S6)+Number(data.records[i].S7)+Number(data.records[i].S8)+Number(data.records[i].S9))/9)*10000)/10000);
	 newXDataLeftFoot.push(data.records[i].date);

	 newYDataRightFoot.push((Math.round((Number(data.records[i].S10)+Number(data.records[i].S11)+Number(data.records[i].S12)+Number(data.records[i].S13)+Number(data.records[i].S14)+Number(data.records[i].S15)+Number(data.records[i].S16)+Number(data.records[i].S17)+Number(data.records[i].S18))/9)*10000)/10000);
	 newXDataRightFoot.push(data.records[i].date);
	 rightFootTemp.push(data.records[i].T2);
	 leftFootTemp.push(data.records[i].T1);
	 rightFootHumidity.push(data.records[i].H2);
	 leftFootHumidity.push(data.records[i].H1);

  }

    array[3].data.datasets[0].data =newYDataLeftFoot;
	array[3].data.labels=newXDataLeftFoot;

	array[4].data.datasets[0].data =newYDataRightFoot;
	array[4].data.labels=newXDataRightFoot;

	array[5].data.datasets[0].data =leftFootTemp;
	array[5].data.labels=newXDataRightFoot;
	array[6].data.datasets[0].data =rightFootTemp;
	array[6].data.labels=newXDataRightFoot;
	array[7].data.datasets[0].data =leftFootHumidity;
	array[7].data.labels=newXDataRightFoot;
	array[8].data.datasets[0].data =rightFootHumidity;
	array[8].data.labels=newXDataRightFoot;


	array[4].update();
	array[3].update();
    array[5].update();
	array[6].update();
	array[7].update();
	array[8].update();
}


var start_date_format = document.getElementById('start_date').value.replace("T", " ");
var end_date_format = document.getElementById('end_date').value.replace("T", " ");

		$.ajax({
			url:"http://localhost/mycareshoeapi/search.php",
			method:"POST",
			data:{patient_number:'<?php echo $_GET['patient_number']; ?>', start_date:start_date_format, end_date:end_date_format, topic:"statistics"},
			dataType:"JSON",
			success:function(data)
			{
			 updateChartData(data);
     },
      error:function(data)
			{
        $('#1').hide();
        alert("No data found!");

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
		});



</script>

  </body>
</html>
