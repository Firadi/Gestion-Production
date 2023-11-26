<?php
        include '..\php-scripts\getSV.php';
        include 'C:\xampp\htdocs\GESTION_PRODUCTION\projet\php-scripts\functions.php';
        include '../php-scripts/getChecklists.php';
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
                    <div class="row">
                        <div class="col-md-2 mb-2">
                            <label>Code</label>
                            <input class="form-control" placeholder="Please Enter Keyword">
                        </div>
                        <div class="col-md-2 mb-2">
                            <label>OF</label>
                            <input class="form-control" placeholder="Please Enter Keyword">
                        </div>
                        
                        <div class="col-md-2 mb-2">
                            <div class="form-group">
                                <label>Responsable</label>
                                <select class="form-control" id="selectRole">
                                    <option value="">tout</option>
                                    <option value="">karim filali 1009</option>
                                    <option value="">prénom nom matricule</option>
                                    <option value="">karim filali 1009</option>
                                    <option value="">prénom nom matricule</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2 mb-2">
                            <div class="form-group">
                                <label>Shift</label>
                                <select class="form-control" id="selectRole">
                                    <option value="">tout</option>
                                    <option value="">matin</option>
                                    <option value="">soir</option>
                                    <option value="">nuit</option>                                </select>
                            </div>
                        </div>
                        <div class="col-md-2 mb-2">
                            <div class="form-group">
                                <label>Etat</label>
                                <select class="form-control" id="selectRole">
                                    <option value="">tout</option>
                                    <option value="">OK</option>
                                    <option value="">NOK</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2 mb-2">
                            <label>Date</label>
                            <input type="date" class="form-control" placeholder="Please Enter Keyword">
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-12">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Checklists
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Code</th>
                                                <th>Ligne</th>
                                                <th>OF</th>
                                                <th>Responsable</th>
                                                <th>Date</th>
                                                <th>Shift</th>
                                                <th>Etat</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($checklists as $checklist):?>
                                                <tr>
                                                    <td><?php echo $checklist['code']?></td>
                                                    <td>1</td>
                                                    <td><?php echo $checklist['of']?></td>
                                                    <td><?php echo $checklist['responsable']?></td>
                                                    <td><?php echo $checklist['date']?></td>
                                                    <td><?php echo $checklist['shift']?></td>
                                                    <td style="text-align: center;"><span class="label label-success">OK</span></td>
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
        <script src="../js-scripts/filter.js"></script>
        

    </body>
    </html>
    <?php $conn->close();?>