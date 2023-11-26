<?php
    $supervisorId = $_SESSION['matricule_sv'];

    $sql = "SELECT cd.nome_Code AS `code`,
            concat(p.`prenom`,' ', p.`nom`) AS responsable,
            c.`date_checklist` AS `date`,
            c.`shift_checklist` AS shift,
            c.`of`, c.`comment`
            FROM `checklist` c
            INNER JOIN person p ON c.`responsable` = p.matricule_person
            INNER JOIN code cd ON cd.id_Code = c.id_code
            WHERE p.manager_person = $supervisorId;";

    if ($conn->query($sql)) {
        $result = $conn->query($sql);
        $checklists = [];
        while( $checklist = $result->fetch_assoc()){
            $checklists [] = $checklist;
        }
    }
    else{
        echo $conn->error;
    }
    
?>