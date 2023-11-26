<?php
    include 'connect.php';
    include 'functions.php';

    if (!isset($_GET['person-delete'])) {
        $matricule = -1;
        
    }
    else if (isset($_GET['person-delete'])) {
        $matricule = $_GET['person-delete'];
        $sql = "SELECT prenom, nom FROM person WHERE matricule_person = $matricule;";
        $nomPrenom = $conn->query($sql);
        $nomPrenom = $nomPrenom->fetch_assoc();
        $nomPrenom = $nomPrenom['prenom'].' '.$nomPrenom['nom'];
        if (removePersonViaMatricule($matricule)) {
            $alert = "Vous avez supprimez <strong> $nomPrenom </strong> avec success";
            $type = "alert-success";
        }
        else {
            $alert = "Error de suppression <strong> $nomPrenom </strong>";
            $type = "alert-danger";
        }
    }

    header("location: \GESTION_PRODUCTION\projet\pages\affiche_subordonnes.php?alert=$alert&&alertType=$type");
    exit();    
    
?>