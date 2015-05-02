 (function($){
      
      $(document).ready(function() {
        alert("REPORTS PAGE JS");
        $('#submitButton').click(generateGraph);
     //   google.load('visualization', '1.0', {'packages':['corechart'], 'callback': drawChart});
      });


      function generateGraph(){
        
        var value = $('#inputText').val();
        alert(value);
        var test = ["yssa", "marie", "villanueva"];

        $.ajax({
          type : 'post',
          dataType: 'json',
          data: { 
            'ajax' : true,
            'from_js' : test
          },
          url : Drupal.settings.basePath + 'report_ajax',
          beforeSend: function () {
            $('#results').html("Loading..");
            //$('#loading').show();
          },
          success : function(result) {    
            $('#results').html(result);
         
          }
       
        });
        
      }

      function drawChart(value) {
        
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Value', 'Expenses'],
          ['2012',  1000,      400],
          ['2014',  1170,      460],
          ['2015',  (value),       1120],
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


      

    })(jQuery);