<?php include 'C:\xampp\htdocs\GESTION_PRODUCTION\projet\php-scripts\getSV.php';?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SuperViseur panel</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>    
    <?php include 'templates\sidebar.php';?>
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                        <div class="col-md-12">
                            <h2>Bienvenu <span style="font-weight: bold;"><?php echo $supervisor['prenom'] . ' ' . $supervisor['nom'];?></span></h2>  
                                <h5>superviseur</h5>
                            </div>
                        </div>              
                        <!-- /. ROW  -->
                        <hr/>

                        <?php include 'pages\index\row_1.php'?>
                        <!-- /. ROW  -->
                        <hr />      
                        
                        <div class="row">

                            <div class="col-md-6 col-sm-12 col-xs-12">           
                                <div class="panel panel-back noti-box">
                                    <span class="icon-box bg-color-blue">
                                        <i class="fas fa-users-cog"></i>
                                    </span>
                                    <div class="text-box" >
                                        <p class="main-text">52 Important Issues to Fix </p>
                                        <p class="text-muted">Please fix these issues to work smooth</p>
                                        <p class="text-muted">Time Left: 30 mins</p>
                                        
                                        <hr/>

                                        <p class="text-muted">
                                            <span class="text-muted color-bottom-txt"><i class="fa fa-edit"></i>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit gthn. 
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit gthn. 
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="col-md-3 col-sm-12 col-xs-12">
                                <div class="panel back-dash">
                                    <i class="fa fa-dashboard fa-3x"></i><strong> &nbsp;personal note</strong>
                                    <p class="text-muted" contenteditable>Lorem ipsum dolor sit amet, consectetur adipiscing sit ametsit amet elit ftr. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                </div>
                            </div>
                            
                            <div class="col-md-3 col-sm-12 col-xs-12 ">
                                <div class="panel ">
                                    <div class="main-temp-back">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-xs-3">
                                                    <i class="fas fa-calendar-alt fa-3x"></i>
                                                </div>
                                                <div class="col-xs-9">
                                                    <div class="text-temp"><?php echo date("d / m / Y");?> &nbsp;</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                
                                </div>
                                <div class="panel panel-back noti-box">
                                    <span class="icon-box bg-color-green set-icon">
                                        <i class="fa fa-desktop"></i>
                                    </span>
                                    <div class="text-box" >
                                        <p class="main-text">Display</p>
                                        <p class="text-muted">Looking Good</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                <!-- /. ROW  -->

    
            <!-- /. PAGE INNER  -->
            </div>
        <!-- /. PAGE WRAPPER  -->
        </div>
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- MORRIS CHART SCRIPTS -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    

</body>
</html>
<?php $conn->close();?>