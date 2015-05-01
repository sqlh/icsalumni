<html>
  <head> 
     <script type="text/javascript">
    (function($){
      google.load('visualization', '1.0', {'packages':['corechart'], 'callback': drawChart});
      $(document).ready(function() {
        alert("REPORTS PAGE JS");
        $('#submitButton').click(generateGraph);
        
      });


      function generateGraph(){
        var value = $('#inputText').val();
        alert(value);

        // $.ajax({
        //   type : 'get',
        //   url : '/reports_ajax',
        //   success : function(result) {
             $('#results').html(drawChart(value));
        //   }
        // });
        //     var str = "l(t('Graph'), 'ajax_link_callback/graph/nojs/"+value+"', array('attributes' => array('class' => array('use-ajax'))))";
      }

      function drawChart(value) {
        var data = google.visualization.arrayToDataTable([
          ['Year', value, 'Expenses'],
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


      



    })(jQuery);
    </script>

  </head>
  <body>
    Enter number:<br>
    <input type="text" id="inputText" name="firstname">
    <br>
    <input type="submit" id="submitButton" value="Submit">
    <br>
    <div id='results'>
      <div id="chart_div" style="width: 900px; height: 500px;"></div>
    </div>
    <?php

    // drupal_add_library is invoked automatically when a form element has the
    // '#ajax' property, but since we are not rendering a form here, we have to
    // do it ourselves.
    drupal_add_library('system', 'drupal.ajax');


        // The use-ajax class is special, so that the link will call without causing
        // a page reload. Note the /nojs portion of the path - if javascript is
        // enabled, this part will be stripped from the path before it is called.
        $link1 = l(t('Graph'), 'ajax_link_callback/graph/nojs/', array('attributes' => array('class' => array('use-ajax'))));
        $link2 = l(t('List'), 'ajax_link_callback/list/nojs/', array('attributes' => array('class' => array('use-ajax'))));
        $link3 = l(t('Create Alert'), 'ajax_link_callback/alert/nojs/', array('attributes' => array('class' => array('use-ajax'))));

        $output = "<span>$link1</span><span>$link2</span><span>$link3</span><div id='myDiv'></div>";

        print $output;

    ?>

  </body>
</html>

