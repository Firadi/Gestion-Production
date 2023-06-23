<?php include '..\php-scripts\getSV.php';?>
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
                        <h2>Ajouter un sub</h2>
                        <h5>superviseur: khalil afilal</h5>
                    </div>
                </div>              
                <!-- /. ROW  -->
                <hr/>
                <form action="" method="Post">
                    <div class="form-row">
                        <div class="col-md-3"></div>
                        <div class="form-group col-md-6">
                            <div class="form-group">
                                <label for="inputPassword4">Matricule</label>
                                <input type="number" min="0" class="form-control" id="inputMatricule" required>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="inputNom">Nom</label>
                                    <input type="email" class="form-control" id="inputNom">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPrenom">Prénom</label>
                                    <input type="email" class="form-control" id="inputPrenom">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="inputState">Grade</label>
                                    <select id="inputState" class="form-control">
                                        <option selected>Opérateur</option>
                                        <option>Chef d'équipe</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputCity">TEL</label>
                                    <input type="text" class="form-control" id="inputCity">
                                </div>
                            </div>

                            <!--affiche-->
                            <button type="button" class="btn btn-success col-md-12 col-xs-12" data-toggle="modal" data-target="#myModal">
                                Ajouter
                            </button>
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Confirmer L'ajoute</h4>
                                        </div>
                                        <div class="modal-body">
                                            <table class="table">
                                                <tr>
                                                    <td colspan="2"><strong>Matricule :</strong></td>
                                                    <td colspan="2">1009</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Prenom :</strong></td>
                                                    <td>Badr</td>
                                                    <td><strong>Nom :</strong></td>
                                                    <td>Firadi</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Grade :</strong></td>
                                                    <td>Chef d'équipe</td>
                                                    <td><strong>TEL :</strong></td>
                                                    <td>070654398</td>
                                                </tr>
                                                <tr></tr>
                                            </table>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary " data-toggle="modal" data-target="#myModal">
                                                Sauvgarder
                                            </button>
                                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                            <h4 class="modal-title" id="myModalLabel">Modal title Here</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                    </div>
                                                </div>
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
        <!-- /. PAGE INNER -->                
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
</body>
</html>
<?php $conn->close();?>