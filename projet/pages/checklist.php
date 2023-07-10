<?php
        include '..\php-scripts\getSV.php';
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
        <?php include '..\templates\sidebar.php';?>
            <!-- /. NAV SIDE  -->
            <div id="page-wrapper">
                <div id="page-inner">
                    <div class="row">
                        <div class="col-md-12">
                        <h2 class="text-center"><strong>MON GROUP</strong></h2>  
                            <h5></h5>
                    </div>
                </div>   
                <hr/>

                <div class="form-group">
                    <p class="col-md-1">filtre</p>
                    <div class="row">
                        <div class="col-md-2 mb-3">
                            <label>nom</label>
                            <input class="form-control" placeholder="Please Enter Keyword">
                        </div>
                        <div class="col-md-2 mb-3">
                            <label>prenom</label>
                            <input class="form-control" placeholder="Please Enter Keyword">
                        </div>
                        <div class="col-md-2 mb-3">
                            <label>matricule</label>
                            <input type="number" min="0" class="form-control" id="matriculeInput" placeholder="Matricule">
                        </div>
                        <div class="col-md-2 mb-3">
                            <div class="form-group">
                                <label>Grade</label>
                                <select class="form-control" id="selectRole">
                                    <option value="0" selected>Tous</option>
                                    <option value="1">opérateur</option>
                                    <option value="2">chef d'équipe</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-12">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                group liste
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Code</th>
                                                <th>Ligne</th>
                                                <th>Date</th>
                                                <th>Shift</th>
                                                <th>Responsable</th>
                                                <th>Etat</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>test</td>
                                                <td>test</td>
                                                <td>test</td>
                                                <td>test</td>
                                                <td>test</td>
                                                <td>test</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>
                        </div>
                        <!--End Advanced Tables -->
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
    <?php $conn->close();?>