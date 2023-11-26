<?php
        //include '..\php-scripts\getSV.php';
        include 'C:\xampp\htdocs\GESTION_PRODUCTION\projet\php-scripts\functions.php';
        include 'C:\xampp\htdocs\GESTION_PRODUCTION\projet\php-scripts\getPostes.php';
    ?>


    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>SuperViseur panel</title>
        <!-- BOOTSTRAP STYLES-->
        <link href="../assets/css/bootstrap.css" rel="stylesheet" />
        <!-- FONTAWESOME STYLES-->
        <link href="../assets/css/font-awesome.css" rel="stylesheet" />
        <!-- MORRIS CHART STYLES-->
        <link href="../assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
        <link href="../assets/css/custom.css" rel="stylesheet" />
        <!-- GOOGLE FONTS-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
        <style>
            body{
                background-color: #eee;
            }
        </style>
    </head>
    <body>    
        <!-- /. NAV SIDE  -->
        <div class="page-wrapper" style="margin: 0 35px">
            <div id="page-inner" >
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-center"><strong></strong></h2>  
                        <h5></h5>
                    </div>
                    <div class="col-md-12 text-center">
                        <a href="#" class="btn btn-primary btn-sm">print</a>
                        <a href="#" class="btn btn-danger btn-sm">save as PDF</a>

                    </div>
                </div>   
                <hr/>

                <!-- <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading text-center">
                                TN-LF Antenna-F X-D0287-039R3
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <tr><th>code</th><td>X09</td></tr>
                                    <tr><th>Responsable</th><td>Rachid 1009</td></tr>
                                    <tr><th>OF</th><td>154261</td></tr>
                                    <tr><th>shift</th><td>soir</td></tr>
                                    <tr><th>Date</th><td>03-11-2015</td></tr>
                                    <tr><th>ligne</th><td>1</td></tr>
                                </table>
                                        
                            </div>
                            <div class="panel-footer">
                                
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- \. ROW -->
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="collapsed">
                                        TN-LF Antenna-F X-D0287-039R3 | 03-11-2015 | soir
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse" style="height: 0px;">
                                    <div class="panel-body">
                                    <table class="table table-striped">
                                    <tr><th>code</th><td>X09</td></tr>
                                    <tr><th>Responsable</th><td>Rachid 1009</td></tr>
                                    <tr><th>OF</th><td>154261</td></tr>
                                    <tr><th>shift</th><td>soir</td></tr>
                                    <tr><th>Date</th><td>03-11-2015</td></tr>
                                    <tr><th>ligne</th><td>1</td></tr>
                                </table>                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>



                <?php foreach($posts as $post):?>
                    <div class="">
                        <span> <h4> <?php echo $post['nom_post'];?></h4></span>
                    </div>
                    <div style="margin-bottom: 17px; border-top: 0.5px solid; padding: 9px">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 text-right">
                                <label for="matricule">Matricule</label>
                                <input type="number" style="width: 70px;" min="0" id="matricule">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Advanced Tables -->
                                
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-fixed" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th class="overflow-auto">parametre</th>
                                                <th class="text-success">Min</th>
                                                <th class="text-danger">Max</th>
                                                <th class="" style="width: 70px">valeur</th>
                                                <th class="" style="max-width: fit-content">ok</th>
                                                <th class="" style="max-width: fit-content">nok</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="overflow-auto">Les tables et les équipenment sont en leur places</td>
                                                <td>2</td>
                                                <td>3</td>
                                                <td><input type="number" style="width: 70px" min="0" step="0.1" name="" id=""></td>
                                                <td><input type="checkbox" name="" id=""></td>
                                                <td><input type="checkbox" name="" id=""></td>
                                            </tr>
                                            <tr>
                                                <td class="overflow-auto">Aucun piéce sur le poste de travail</td>
                                                <td></td>
                                                <td></td>
                                                <td><input type="number" style="display: none;" min="0" step="0.1" name="" id=""></td>
                                                <td><input type="checkbox" name="" id=""></td>
                                                <td><input type="checkbox" name="" id=""></td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                                <input type="submit" value="Done" class="btn btn-success">

                            </div>                  
                        </div>
                    </div>
                    <hr>
                <?php endforeach;?>
                
                
                
            </div>
        </div>
        
        <!-- /. WRAPPER  -->
        <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
        <!-- JQUERY SCRIPTS -->
        <script src="../assets/js/jquery-1.10.2.js"></script>
        <!-- BOOTSTRAP SCRIPTS -->
        <script src="../assets/js/bootstrap.min.js"></script>
        <!-- METISMENU SCRIPTS -->
        <script src="../assets/js/jquery.metisMenu.js"></script>
        <!-- MORRIS CHART SCRIPTS -->
        <script src="../assets/js/morris/raphael-2.1.0.min.js"></script>
        <script src="../assets/js/morris/morris.js"></script>
        <!-- CUSTOM SCRIPTS -->
        <script src="../assets/js/custom.js"></script>
        <script src="../js-scripts/filter.js"></script>
        

    </body>
    </html>
