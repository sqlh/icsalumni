<html>
  <head> 
  </head>
  <body>
   
    

    <div class="bs-example">
    <div class="panel-group" id="accordion">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="panel-toggle" data-toggle="collapse" href="#collapseOne">Data</a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
                <div class="panel-body">
                  
                  <form class="form-horizontal"> 
                    <div class="form-group">
                      <label class="col-xs-2 control-label">Category</label>
                      <div class="col-xs-3">
                        <select id="data_category" class="form-control">
                          <option>--</option>
                          <option value="career">Careers</option>
                          <option value="undergraduate">Undergraduate Data</option>
                          <option value="preferences">Preferences</option>
                          <option value="personal">Personal Information</option>
                        </select>
                        
                      </div>

                      <div id="data_main_loading"  style="display:none;">
                          <img src="<?php echo drupal_get_path('module', 'report'); ?>/small.gif" >
                      </div>
                    </div>

             
                    <div class="form-group">
                      <label class="col-xs-2 control-label">Main Data</label>
                      <div id="data_main_div" class="col-xs-3">
                        <select id="data_main" class="form-control" disabled>
                          <option>--</option>
                        </select>
                      </div>
                    </div>

                  </form>

                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="panel-toggle" data-toggle="collapse" href="#collapseTwo">Users</a>
                </h4>
            </div>
          
            <div id="collapseTwo" class="panel-collapse collapse">
                
                    <div class="panel-body">

                        <form id="users_form" class="form-horizontal">
                            <div class="form-group">
                              <label for="sex" class="col-xs-2 control-label">Sex</label>
                              <div class="col-xs-5">
                                <label class="checkbox-inline">
                                  <input type="checkbox" class="sex_input" value="0" checked> Male
                                </label>
                                <label class="checkbox-inline">
                                  <input type="checkbox" class="sex_input" value="1" checked> Female
                                </label>
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="col-xs-2 control-label">Age</label>
                              <div class="col-xs-2">
                                <div class="input-group">
                                    <input type="number" class="form-control" id="min_age" /> 
                                    <span class="input-group-addon">-</span>
                                    <input type="number" class="form-control" id="max_age" />
                                </div>
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="col-xs-2 control-label">Batch</label>
                              <div class="col-xs-3">
                                <div class="input-group">
                                    <input type="number" class="form-control" id="min_batch" /> 
                                    <span class="input-group-addon">-</span>
                                    <input type="number" class="form-control" id="max_batch" />
                                </div>
                              </div>
                            </div>
                            <!-- <div class="form-group">
                                <label class="col-xs-3 control-label">Age</label>
                                <div class="col-xs-2">
                                    
                                </div>
                            </div> -->

                            
                        </form>


                    </div>


            </div>

        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="panel-toggle" data-toggle="collapse" href="#collapseThree">Visualization</a>
                </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
                <div class="panel-body">
                    <form class="form-horizontal"> 
                      <div class="form-group">
                        <label class="col-xs-2 control-label">Graph</label>
                        <div class="col-xs-3">
                          <select id="data_visualization" class="form-control">
                            <option>--</option>
                            <option value="bar">Bar Graph</option>
                            <option value="pie">Pie Chart</option>
                            <option value="pie3d">3D Pie Chart</option>
                            <option value="line">Line Chart</option>
                          </select>
                        </div>
                      </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    </div>
    <br>
    <div class="form-group">
      <div class="col-sm-offset-1 col-sm-10">
        <button type="button" class="btn btn-default" id="generate_button">Generate</button>
      </div>
    </div><br><br>


    <div class="text-center" id="chart_loading" style="display:none; width: 1000px;">
      <br><br><br><br><img src="<?php echo drupal_get_path('module', 'report'); ?>/715.gif">
    </div>
    <div id='chart_div' style="width: 1000px; height: 500px;">
    </div>

  </body>
</html>

