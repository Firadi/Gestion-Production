<?php

    include 'C:\xampp\htdocs\GESTION_PRODUCTION\projet\php-scripts\connect.php';
    include 'C:\xampp\htdocs\GESTION_PRODUCTION\projet\php-scripts\functions.php';

    $Matricule = $_POST['inputMatricule'];
    $Nom = $_POST['inputNom'];
    $Prenom = $_POST['inputPrenom'];
    $Role = $_POST['inputRole'];
    $Tel = $_POST['inputTel'];
    $Manager = $_POST['inputManager'];
    $pwd = '0000';

    $sql ="INSERT INTO `person`(`matricule_person`, `nom`, `prenom`, `role_person`, `tel`, `manager_person`, `pwd_person`)
    VALUES ('$Matricule', '$Nom', '$Prenom', '$Role', '$Tel', '$Manager', '$pwd')";

    $message = 0;
    if ($conn->query($sql)) {
        $message = 1;
    }
    else {
        $message = 0;
    }
    $conn->close();
?>
<?php
    if($message === 1){
        echo '1 '.getRoleString($Role).' a bien été ajouté <br>';
        echo 'matricule: '.$_POST['inputMatricule'].'<br>';
        echo 'prenom: '.$_POST['inputPrenom'].'<br>';
        echo 'nom: '.$_POST['inputNom'].'<br>';
        echo 'Role: '.$_POST['inputRole'].'<br>';
        echo 'Manger: '.$_POST['inputManager'].'<br>';
        echo 'attend...';
        header( "Refresh:5; url='\GESTION_PRODUCTION\projet\pages\ajoute_subordonnes.php' ");
        exit();
    }
    else{
        echo 'error';
    }
?>
