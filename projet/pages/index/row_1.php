<div class="row">
    <!--chefs-->   
    <a href="pages\affiche_subordonnes.php">
        <div class="col-md-3 col-sm-6 col-xs-6">           
            <div class="panel panel-back noti-box">
                <span class="icon-box bg-primary set-icon">
                    <i class="fas fa-user"></i>
                </span>
                <div class="text-box" >
                    <?php $nbr = calculeChef($supervisor['matricule_person']);?>
                    <p class="main-text"><?php echo $nbr;?> chef d'équipe</p>
                    <p class="text-muted">Messages</p>
                </div>
            </div>
        </div>
    </a>
    <!--operateurs-->
    <a href="pages\affiche_subordonnes.php">
        <div class="col-md-3 col-sm-6 col-xs-6">           
            <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-red set-icon">
                    <i class="fas fa-users"></i>
                </span>
                <div class="text-box" >
                    <?php $nbr = calculeOperateur($supervisor['matricule_person']);?>
                    <p class="main-text"><?php echo $nbr;?> opérateurs</p>
                    <p class="text-muted">Messages</p>
                </div>
            </div>
        </div>
    </a>
    <!--chefs-->
    <div class="col-md-3 col-sm-6 col-xs-6">           
        <div class="panel panel-back noti-box">
            <span class="icon-box bg-color-red set-icon">
                <i class="fas fa-users"></i>
            </span>
            <div class="text-box" >
                <?php $nbr = calculeOperateur($supervisor['matricule_person']);?>
                <p class="main-text"><?php echo $nbr;?> opérateurs</p>
                <p class="text-muted">Messages</p>
            </div>
        </div>
    </div>
    <!--chefs-->
    <div class="col-md-3 col-sm-6 col-xs-6">           
        <div class="panel panel-back noti-box">
            <span class="icon-box bg-color-red set-icon">
                <i class="fas fa-users"></i>
            </span>
            <div class="text-box" >
                <?php $nbr = calculeOperateur($supervisor['matricule_person']);?>
                <p class="main-text"><?php echo $nbr;?> opérateurs</p>
                <p class="text-muted">Messages</p>
            </div>
        </div>
    </div>
</div>