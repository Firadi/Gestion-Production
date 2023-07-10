<?php
        //include '..\php-scripts\getSV.php';
        include 'C:\xampp\htdocs\GESTION_PRODUCTION\projet\php-scripts\functions.php';
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
    </head>
    <body>    
        <!-- /. NAV SIDE  -->
        
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                    <h2 class="text-center"><strong>Checklist</strong></h2>  
                        <h5></h5>
                </div>
            </div>   
            <hr/>

            
            <div class="row">

                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading d-flex justify-content-between align-items-center">
                            <div>
                                <h3 class="panel-title">post 1</h3>
                            </div>
                            <div class="text-right">
                                <label for="matricule">Matricule</label>
                                <input type="number" min="0" id="matricule">
                            </div>
                        </div>
                    
                    <div class="panel-body">
                        <div class="">
                            <table class="table table-striped table-bordered table-fixed" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th class="overflow-auto">parametre</th>
                                        <th class="text-success">Min</th>
                                        <th class="text-danger">Max</th>
                                        <th class="">valeur</th>
                                        <th class="">ok</th>
                                        <th class="">nok</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="overflow-auto">Lorem sed atque, sapiente cupiditate in mindiandae earum sunt, quaerat ullam.</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td><input type="number" min="0" step="0.1" name="" id=""></td>
                                        <td><input type="checkbox" name="" id=""></td>
                                        <td><input type="checkbox" name="" id=""></td>
                                    </tr>
                                    <tr>
                                        <td class="overflow-auto">test</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td><input type="number" min="0" step="0.1" name="" id=""></td>
                                        <td><input type="checkbox" name="" id=""></td>
                                        <td><input type="checkbox" name="" id=""></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <input type="submit" value="submit" class="btn btn-success">
                    </div>
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
    <?php //$conn->close();?>