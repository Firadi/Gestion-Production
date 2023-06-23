<?php
    include 'C:\xampp\htdocs\GESTION_PRODUCTION\projet\php-scripts\connect.php';
    echo  'matricule: '.$_POST['inputMatricule'].'<br>';
    echo  'prenom: '.$_POST['inputPrenom'].'<br>';
    echo  'nom: '.$_POST['inputNom'].'<br>';
    echo  'Role: '.$_POST['inputRole'].'<br>';
    echo  'Manger: '.$_POST['inputManager'].'<br>'; 
?>
<?php
    
?>
<?php

    $Matricule = $_POST['inputMatricule'];
    $Nom = $_POST['inputNom'];
    $Prenom = $_POST['inputPrenom'];
    $Role = $_POST['inputRole'];
    $Tel = $_POST['inputTel'];
    $Manager = $_POST['inputManager'];
    $pwd = '0000';
    $sql ="INSERT INTO `person`(`matricule_person`, `nom`, `prenom`, `role_person`, `tel`, `manager_person`, `pwd_person`)
    VALUES ('$Matricule', '$Nom', '$Prenom', '$Role', '$Tel', '$Manager', '$pwd')";
    if ($conn->query($sql)) {
        echo 'insertion OK';
    }
    else {
        echo 'error <br>';
        echo $conn->error;
    }
    $conn->close();
?>