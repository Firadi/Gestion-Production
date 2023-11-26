<?php

// Function to get chefs data based on superviseur matricule
function getChefsViaSuperViseur($supervisorM){
        
    global $conn;

    $sql = "SELECT * FROM `person`
    WHERE role_person = 2
    AND manager_person = $supervisorM;";

    $res = $conn->query($sql);
    $chefs = [];
    while ($chef = $res->fetch_assoc()){
        $chefs[] = $chef;
    }
    return $chefs;
}

// Function to get responsable data based on matricule
function getResponsableViaRole($role){
        
    global $conn;
    global $supervisor;

    $supervisorM = $supervisor['matricule_person'];

    $respos = [];

    if ($role === 1) {
        $respos = getChefsViaSuperViseur($supervisorM);
    }
    elseif ($role === 2) {
        $sql = "SELECT * FROM `person`
        WHERE role_person = 3
        AND matricule_person = $supervisorM;";
    
        $res = $conn->query($sql);
        while ($respo = $res->fetch_assoc()){
            $respos[] = $respo;
        }
    }
    return $respos;
}

// Function to get role string based on role number
function getRoleString($roleNumber){
    switch ($roleNumber) {
        case 1:
            return 'Opérateur';
        case 2:
            return 'Chef d\'équipe';
        case 3:
            return 'Superviseur';
        default:
            return 'Unknown';
    }
}

// Function to calcule chefs
function calculeChefViaSuperViseur($sv){
    global $conn;

    $sql = "SELECT matricule_person from person WHERE manager_person = $sv";
    $n = $conn->query($sql);
    $nbr = $n->num_rows;
    return $nbr;
}

// Function to calcule opérateurs
function calculeOperateurViaSuperviseur($sv){

    global $conn;

    $nbr = 0;
    $sql = "SELECT matricule_person from person WHERE manager_person = $sv";
    $result = $conn->query($sql);

    while($chef = $result->fetch_assoc()){
        $chefMatricule = $chef['matricule_person'];
        $sql =
        "SELECT matricule_person from person
            WHERE manager_person = $chefMatricule
        ";
        $n = $conn->query($sql);

        $nbr += $n->num_rows;
    }
    return $nbr;
}

// Supression d'un person
function removePersonViaMatricule($matricule){
    global $conn;

    //
    if ($matricule === -1) { return; }
    //
    $sql = 
        "DELETE  from person WHERE matricule_person = $matricule";
    if( $conn->query($sql) ){
        echo "suppression Done";
        return true;
    }
    else{
        echo $conn->error;
        return false;
    };
}

//
function getParametresViaPost($postId){}
    global $conn;
?>