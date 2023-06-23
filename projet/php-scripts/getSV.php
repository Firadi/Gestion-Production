<?php
session_start();
include 'connect.php';

// Check if supervisor is logged in
if (!isset($_SESSION['matricule_sv'])) {
    // Redirect to login page if not logged in
    header("Location: login.php");
    exit();
}

// Function to retrieve personnel hierarchy
function displayPersonnelHierarchy($personId, $indentation = ""){
    global $conn;

    // Retrieve person details
    $query = "SELECT * FROM person WHERE matricule_person = $personId";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {

        $person = $result->fetch_assoc();
        //get the role name
        $role = getRoleString($person['role_person']);
        
        echo '<div class="person-info">' . $person['nom'] . ' ' . $person['prenom'] . '</div><div class="person-role">Role: ' . $role . '</div>';
        
        // Retrieve direct reports
        $query = "SELECT * FROM person WHERE manager_person = $personId ";
        $result = $conn->query($query);
        
        if ($result->num_rows > 0) {
            echo '<ul class="person-details">';
            while ($report = $result->fetch_assoc()) {
                
                // Recursively display the hierarchy for each direct report
                echo '<li class="indent">';
                displayPersonnelHierarchy($report['matricule_person'], $indentation . "&nbsp;&nbsp;&nbsp;&nbsp;");
                echo '</li>';
            }
            echo '</ul>';
        }
    }
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
