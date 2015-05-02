/**
 * file
 */
?>
<p>This is the demo page for Google Charts. If you haven't already you can read the blog post <?php echo l(t('here'), 'node/20');?>.</p>
<h2> Loop and Print out our Pie Charts </h2>
<p>This displays the latest data point. No interactivity here.</p>

<html>
  <head> 
     <script type="text/javascript">

      
     // google.load('visualization', '1.0', {'packages':['corechart'], "callback": drawChart});
    	//google.setOnLoadCallback(drawChart, true);
      google.load('visualization', '1.0', {'packages':['corechart'], 'callback': drawChart});
      function drawChart(test) {
      	alert(test);
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses'],
          [Math.random(),  1000,      400],
          ['2014',  1170,      460],
          ['2015',  660,       1120],
          ['2016',  1030,      540]
        ]);

        var options = {
          title: 'Company Performance',
          hAxis: {title: 'Year',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }

      function myFunction(){
      	alert("MY FUNCTION!!");
      }
    </script>

  </head>
  <body>
  	<?php echo $test ?>
    <div id="chart_div" style="width: 900px; height: 500px;"></div>
    <?php echo '<button id="generate">Generate</button>' ?>
  </body>
</html>