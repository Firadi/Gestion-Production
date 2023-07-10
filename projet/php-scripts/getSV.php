<?php
session_start();
include 'connect.php';

// Check if supervisor is logged in
if (!isset($_SESSION['matricule_sv'])) {
    // Redirect to login page if not logged in
    header("Location: /GESTION_PRODUCTION/projet/pages/login.php");
    exit();
}



// Retrieve supervisor's ID from session
$supervisorId = $_SESSION['matricule_sv'];

// Retrieve supervisor's details
$query = "SELECT * FROM person WHERE matricule_person = $supervisorId";
$result = $conn->query($query);
$supervisor = $result->fetch_assoc();


// Retrieve oprt's details
$query = 
"SELECT * FROM person WHERE manager_person = $supervisorId";
$resultO = $conn->query($query);

$persons = [];

while($chef = $resultO->fetch_assoc()){
    $persons[] = $chef;
    $chefMatricule = $chef['matricule_person'];
    $sql =
    "SELECT * from person WHERE manager_person = $chefMatricule";
    $optRslt = $conn->query($sql);
    while($opt = $optRslt->fetch_assoc()){
        $persons[] = $opt;
    }

}
?>
