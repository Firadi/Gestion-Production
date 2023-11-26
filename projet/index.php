<?php include 'C:\xampp\htdocs\GESTION_PRODUCTION\projet\php-scripts\getSV.php';?>
<?php include 'C:\xampp\htdocs\GESTION_PRODUCTION\projet\php-scripts\functions.php';?>

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
                        
                        <?php include 'pages\index\row_2.php'?>
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