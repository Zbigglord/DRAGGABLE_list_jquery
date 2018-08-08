<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Draggable system by hellux</title>
    <link media="screen" type="text/css" href="css/bootstrap.min.css" rel="StyleSheet">
    <link media="screen" type="text/css" href="css/style.css" rel="StyleSheet">
    <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/dd-system-hellux.js"></script>
</head>
<body>
<div class="main-container">
<div id="whole-holder">
<form role="form" method="post" id="dummy-form">
    <ul id="sortable"><!-- changing ul id must be done along with data in dd-system-hellux.js --> 
    <li class="ui-state-default">
            <div class="row">
             <div class="col-lg-6">
                <image class="img-responsive" src="images/01.jpg" >
            </div>
            <div class="col-lg-6">
                <p><input type="text" id="d_1" name="d_1" value="" placeholder="pierdoły 01" /></p>
                <p><input type="text" id="d_2" name="d_2" value="" placeholder="pierdoły 02" /></p>
                <p><input type="text" id="d_3" name="d_3" value="" placeholder="pierdoły 03" /></p>
            </div>
           </div>
    </li><!-- li -->

        <li class="ui-state-default">
            <div class="row">
                <div class="col-lg-6">
                    <image class="img-responsive" src="images/02.jpg" >
                </div>
                <div class="col-lg-6">
                    <p><input type="text" id="d_4" name="d_4" value="" placeholder="pierdoły 05" /></p>
                    <p><input type="text" id="d_5" name="d_5" value="" placeholder="pierdoły 06" /></p>
                    <p><input type="text" id="d_6" name="d_6" value="" placeholder="pierdoły 07" /></p>
                </div>
            </div>
        </li><!-- li -->

        <li class="ui-state-default">
            <div class="row">
                <div class="col-lg-6">
                    <image class="img-responsive" src="images/03.jpg" >
                </div>
                <div class="col-lg-6">
                    <p><input type="text" id="d_7" name="d_7" value="" placeholder="pierdoły 08" /></p>
                    <p><input type="text" id="d_8" name="d_8" value="" placeholder="pierdoły 09" /></p>
                    <p><input type="text" id="d_9" name="d_9" value="" placeholder="pierdoły 10" /></p>
                </div>
            </div>
        </li><!-- li -->

        <li class="ui-state-default">
            <div class="row">
                <div class="col-lg-6">
                    <image class="img-responsive" src="images/04.jpg" >
                </div>
                <div class="col-lg-6">
                    <p><input type="text" id="d_10" name="d_10" value="" placeholder="pierdoły 11" /></p>
                    <p><input type="text" id="d_11" name="d_11" value="" placeholder="pierdoły 12" /></p>
                    <p><input type="text" id="d_12" name="d_12" value="" placeholder="pierdoły 13" /></p>
                </div>
            </div>
        </li><!-- li -->
    </ul><!-- end sortable list -->
</form>
</div><!-- end wholeholder -->
</div><!-- end maincontainer -->
</body>
</html>