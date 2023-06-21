<?php
session_start();
include 'connect.php';

// Check if supervisor is logged in
if (!isset($_SESSION['matricule_person'])) {
    // Redirect to login page if not logged in
    header("Location: login.php");
    exit();
}

// Function to retrieve personnel hierarchy
function displayPersonnelHierarchy($personId, $indentation = "")
{
    global $conn;

    // Retrieve person details
    $query = "SELECT * FROM person WHERE matricule_person = $personId";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $superVisorUser = $result->fetch_assoc();

        // Display person information
        $role = getRoleString($superVisorUser['role_person']);
        echo '<div class="person-info">' . $superVisorUser['nom'] . ' ' . $superVisorUser['prenom'] . '</div><div class="person-role">Role: ' . $role . '</div>';

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

// Function to get role string based on role number
function getRoleString($roleNumber)
{
    switch ($roleNumber) {
        case 1:
            return 'Opérateur';
        case 2:
            return 'Chef';
        case 3:
            return 'Superviseur';
        default:
            return 'Unknown';
    }
}

// Retrieve supervisor's ID from session
$supervisorId = $_SESSION['matricule_person'];

// Retrieve supervisor's details
$query = "SELECT * FROM person WHERE matricule_person = $supervisorId";
$result = $conn->query($query);
$supervisor = $result->fetch_assoc();

// Display the personnel hierarchy for the supervisor
echo '<h2>Welcome, ' . $supervisor['nom'] . ' ' . $supervisor['prenom'] . '</h2>';
echo '<h3>Your Team</h3>';
echo '<ul>';
displayPersonnelHierarchy($supervisorId);
echo '</ul>';

$conn->close();
?>
