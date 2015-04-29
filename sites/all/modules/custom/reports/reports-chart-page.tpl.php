/**
 * file
 */
?>
<p>This is the demo page for Google Charts. If you haven't already you can read the blog post <?php echo l(t('here'), 'node/20');?>.</p>
<h2> Loop and Print out our Pie Charts </h2>
<p>This displays the latest data point. No interactivity here.</p>
<button id="generate">Generate</button> 
<html>
  <head> 
     <script type="text/javascript">

      
     // google.load('visualization', '1.0', {'packages':['corechart'], "callback": drawChart});
    	//google.setOnLoadCallback(drawChart, true);
      google.load('visualization', '1.0', {'packages':['corechart'], 'callback': drawChart});
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses'],
          ['2012',  1000,      400],
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
    </script>
  </head>
  <body>
    <div id="chart_div" style="width: 900px; height: 500px;"></div>
  </body>
</html>