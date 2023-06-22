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
                    <h2 class="text-center"><strong>MON GROUP</strong></h2>  
                        <h5></h5>
                </div>
            </div>   
            <hr/>

            <div class="form-group">
                <p class="col-md-1">filter</p>
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
                        <input class="form-control" placeholder="Please Enter Keyword">
                    </div>
                    <div class="col-md-2 mb-3">
                        <div class="form-group">
                            <label>Grade</label>
                            <select class="form-control">
                                <option>opérateur</option>
                                <option>chef d'équipe</option>
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
                                            <th>Matricule</th>
                                            <th>Nom</th>
                                            <th>Prenom</th>
                                            <th>Grade</th>
                                            <th>Historique</th>
                                            <th style="width:">paramétres</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($persons as $person):?>
                                            <tr class="odd gradeX">
                                                <td><?php echo $person['matricule_person']?></td>
                                                <td><?php echo $person['nom']?></td>
                                                <td><?php echo $person['prenom']?></td>
                                                <td class="center"><?php echo getRoleString($person['role_person']);?></td>
                                                <td class="center text-center">
                                                    <a href="#" class="btn btn-primary btn-sm">voir..</a>
                                                </td>
                                                <td class="center text-center">
                                                    <button class="btn btn-primary"><i class="fa fa-edit "></i> Edit</button>
                                                    <button class="btn btn-danger">
                                                        <i class="fa fa-pencil"></i>Supprimer
                                                    </button>
                                                </td>
                                            </tr>
                                        <?php endforeach;?>
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
    

</body>
</html>
<?php $conn->close();?>