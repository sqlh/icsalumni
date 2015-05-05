 (function($){
      
      $(document).ready(function() {
        $("#data_category").on("change", setMainData);
        $("#generate_button").on("click", generateGraph);
        $(document).on("change", "#data_main", setDetails);
        google.load('visualization', '1.0', {'packages':['corechart'], 'callback': drawChart});
      });

      function setDetails(){
        
      //  var main_data = $(this).find('option:selected').val();
      //  alert(main_data);
      }

      function setMainData(){
        var category = $('#data_category').val();
        $('#data_main_div').html('<select class="form-control" disabled><option value="0">--</option></select>');        
        
        if(category != "--"){
          $.ajax({
            type : 'post',
            dataType: 'json',
            data: {
              'category' : category

            },
            url : Drupal.settings.basePath + 'reports/main_data',
            beforeSend: function () {
              $('#data_main_loading').show();
            },
            success : function(result) {
              var str = '';
              for (var i=0; i<result.length; i++)
                str += '<option value="'+result[i][0]+'">'+result[i][1]+'</option>';
              $('#data_main_loading').hide();
              $('#data_main_div').html('<select id="data_main" class="form-control">'+str+'</select>');
            }
          });
        }

      }

      function generateGraph(){
        var qid = 5;//$('#data_main').val();
        var min_age = $('#min_age').val();
        var max_age = $('#max_age').val();
        var min_batch = $('#min_batch').val();
        var max_batch = $('#max_batch').val();

        var sex = [];
        $(".sex_input:checked").each(function(){
           sex.push($(this).val());
        });


        $.ajax({
          type : 'post',
          dataType: 'json',
          data: {
            'qid' : qid,
            'sex' : sex,
            'min_age' : min_age,
            'max_age' : max_age,
            'min_batch' : min_batch,
            'max_batch' : max_batch,
            //'location' : location
          },
          url : Drupal.settings.basePath + 'reports/result',
          beforeSend: function () {
            $('#chart_div').hide();
            $('#chart_loading').show();
          },
          success : function(data) {
            $('#chart_loading').hide();
            $('#chart_div').show();
            $('#chart_div').html(drawChart(data));
          }
       
        });
        
      }
  //    data.value    data.emaillist    data.message 

      function drawChart(values) {
        /* LINE CHART
        var data = google.visualization.arrayToDataTable([
          ['Year', value, 'Expenses'],
          ['2012',  1000,      400],
          ['2014',  1170,      460],
          ['2015',  1000,       1120],
          ['2016',  1030,      540]
        ]);

        var options = {
          title: 'Company Performance',
          hAxis: {title: 'Year',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };*/

        var data = new google.visualization.DataTable();
        data.addColumn('string', values[0][0]);
        data.addColumn('number', values[0][1]);

        for(i = 1; i < values.length; i++)
          data.addRow([values[i][0], values[i][1]]);


        var options = {
          title: 'My Daily Activities'
        };

        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));

        chart.draw(data, options);

      }


      

    })(jQuery);