<html>
  <head> 
  </head>
  <body>
    Enter number:<br>
    <input type="text" id="inputText" name="firstname">
    <br>
    <input type="submit" id="submitButton" value="Submit">
    <br>
    

    <div class="bs-example">
    <div class="panel-group" id="accordion">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Data</a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
                <div class="panel-body">
                    <p>HTML stands for HyperText Markup Language. HTML is the main markup language for describing the structure of Web pages. <a href="http://www.tutorialrepublic.com/html-tutorial/" target="_blank">Learn more.</a></p>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Users</a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body">
                    <label class="checkbox-inline">
                      <input type="checkbox" id="inlineCheckbox1" value="male"> Male
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" id="inlineCheckbox2" value="female"> Female
                    </label>
                    Location:
                    <select class="form-control">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Visualization</a>
                </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
                <div class="panel-body">
                    <p>CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such as colors, backgrounds, fonts etc. <a href="http://www.tutorialrepublic.com/css-tutorial/" target="_blank">Learn more.</a></p>
                </div>
            </div>
        </div>
    </div>
    </div>


   <!--  <?php //print '<div class="text-center" id="loading" style="display:none;"><img src="'+drupal_get_path('module', 'reports')+'"/loading.gif"/></div>' ?>
 -->

    <button type="button" class="btn btn-primary">Primary</button>
    <div id='results'>
      <div id="chart_div" style="width: 900px; height: 500px;"></div>
    </div>
  </body>
</html>

