<?php include '..\php-scripts\getSV.php';?>
<?php include 'C:\xampp\htdocs\GESTION_PRODUCTION\projet\php-scripts\functions.php';?>

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
                        <h2>Ajouter un subalterne</h2>
                        <h5>vous: <?php echo $supervisor['prenom'].' '.$supervisor['nom'];?></h5>
                    </div>
                </div>              
                <!-- /. ROW  -->
                <hr/>
                <form action="\GESTION_PRODUCTION\projet\php-scripts\addSub.php" method="Post">
                    <!--HIDE DATA-->
                    <input type="hidden" name="superViseur" value="<?php echo $supervisor['matricule_person']?>">
                    <div class="form-row">
                        <div class="col-md-3"></div>
                        <div class="form-group col-md-6">
                            <div class="form-group">
                                <label for="inputMatricule">Matricule</label>
                                <input type="number" min="0" class="form-control" id="inputMatricule" name="inputMatricule" required>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="inputNom">Nom</label>
                                    <input type="text" class="form-control" id="inputNom" name="inputNom" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPrenom">Prénom</label>
                                    <input type="text" class="form-control" id="inputPrenom" name="inputPrenom" required>
                                </div>
                            </div>
                            <div class="row">
                                <!-- SELECT ROLE -->
                                <div class="form-group col-md-6">
                                    <label for="inputRole">Role</label>
                                    <select id="inputRole" name="inputRole" class="form-control" required>
                                        <option value="1" selected>Opérateur</option>
                                        <option value="2">Chef d'équipe</option>
                                    </select>
                                </div>
                                <!-- SELECT RESPO -->
                                <div class="form-group col-md-6" id="managerChef">
                                    <label for="inputManger">Responsable</label>
                                    <select id="inputManager" name="inputManager" class="form-control" required>
                                        <?php
                                            $resposOperator = getResponsableViaRole(1);
                                            $resposChef = getResponsableViaRole(2);
                                        ?>
                                        <option value="" selected disabled hidden>Choiser un responsable</option>
                                        <?php foreach ($resposOperator as $respo) : ?>
                                            <option value="<?php echo $respo['matricule_person']; ?>" data-role="1"><?php echo $respo['prenom'] . ' ' . $respo['nom'] ?></option>
                                        <?php endforeach; ?>
                                        <?php foreach ($resposChef as $respo) : ?>
                                            <option value="<?php echo $respo['matricule_person']; ?>" data-role="2" ><?php echo $respo['prenom'] . ' ' . $respo['nom'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="inputTel">TEL</label>
                                    <input type="text" class="form-control" id="inputTel" name="inputTel">
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
    <script src="\GESTION_PRODUCTION\projet\js-scripts\addSub.js"></script>
</body>
</html>
<?php $conn->close();?>