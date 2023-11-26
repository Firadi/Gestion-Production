<div class="row">
    <!--chefs-->   
    <a href="pages\affiche_subordonnes.php">
        <div class="col-md-4 col-sm-12 col-xs-4">           
            <div class="panel panel-back noti-box">
                <span class="icon-box bg-primary set-icon">
                    <i class="fas fa-user"></i>
                </span>
                <div class="text-box" >
                    <?php $nbr = calculeChefViaSuperViseur($supervisor['matricule_person']);?>
                    <p class="main-text"><?php echo $nbr;?> chef d'équipe</p>
                    <p class="text-muted">clicker pour voir la liste</p>
                </div>
            </div>
        </div>
    </a>
    <!--operateurs-->
    <a href="pages\affiche_subordonnes.php" class="unstyle">
        <div class="col-md-4 col-sm-6 col-xs-4">           
            <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-red set-icon">
                    <i class="fas fa-users"></i>
                </span>
                <div class="text-box" >
                    <?php $nbr = calculeOperateurViaSuperviseur($supervisor['matricule_person']);?>
                    <p class="main-text"><?php echo $nbr;?> opérateurs</p>
                    <p class="text-muted">clicker pour voir la liste</p>
                </div>
            </div>
        </div>
    </a>
    <!--maintenance-->
    <div class="col-md-4 col-sm-6 col-xs-4">           
        <div class="panel panel-back noti-box">
            <span class="icon-box bg-color-green set-icon">
                <i class="fas fa-wrench"></i>
            </span>
            <div class="text-box" >
                <?php $nbr = calculeOperateurViaSuperviseur($supervisor['matricule_person']);?>
                <p class="main-text"><?php echo $nbr;?> maintenence</p>
                <p class="text-muted">clicker pour voir la liste</p>
            </div>
        </div>
    </div>

</div>
