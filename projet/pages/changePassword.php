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
                <?php include 'C:\xampp\htdocs\GESTION_PRODUCTION\projet\php-scripts\alert.php';?>
                
                <div class="row">

                    <div class="col-md-12">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                changer le mot de pass
                            </div>
                            <div class="panel-body">
                                <form action="" method="Post">
                                    <!--HIDE DATA-->
                                    <div class="form-row">
                                        <div class="col-md-4"></div>
                                        <div class="form-group col-md-4">
                                            <div class="form-group">
                                                <label for="pwd">Current mot de pass</label>
                                                <input type="password" class="form-control" id="pwd" name="pwd" required>
                                                <label for="newPwd">Nouveau mot de pass</label>
                                                <input type="password" class="form-control" id="newPwd" name="newPwd" required>
                                                <label for="confirmPwd">Confirmer le nouveau mot de pass</label>
                                                <input type="password" class="form-control" id="confirmPwd" name="confirmPwd" required>
                                            </div>
                                            

                                            <!--affiche-->
                                            <button type="button" class="btn btn-success col-md-12 col-xs-12" data-toggle="modal" data-target="#myModal">
                                                modifier
                                            </button>
                                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                            <h4 class="modal-title" id="myModalLabel">Confirmer L'ajoute</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            Êtes-vous sûr d'ajouter un nouveau subordonné ?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">
                                                                Annuler
                                                            </button>
                                                            <button type="submit" class="btn btn-primary " data-toggle="modal" data-target="#myModal">
                                                                Confirmer
                                                            </button>
                                                        </div>

                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                        <div class="form-group col-md-3"></div>
                                    </div>
                                </form> 
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