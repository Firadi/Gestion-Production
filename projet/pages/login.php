<?php
session_start();
include '../php-scripts/connect.php';

// logout auto if supervisor is already logged in
if (isset($_SESSION['matricule_person'])) {
    unset($_SESSION['matricule_person']);
}

// Login form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $matricule_person = $_POST['matricule_person'];
    $pwd_person = $_POST['pwd_person'];

    // Validate supervisor credentials (Replace this with your own authentication logic)
    $query = "SELECT * FROM person WHERE matricule_person = '$matricule_person' AND pwd_person = '$pwd_person' AND role_person = 3";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        // Authentication successful, store supervisor ID in session
        $supervisor = $result->fetch_assoc();
        $_SESSION['matricule_person'] = $supervisor['matricule_person'];

        // Redirect to dashboard
        header("Location: ..\index.php");
        exit();
    } else {
        // Authentication failed, display error message
        $error = "Invalid credentials. Please try again.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Supervisor Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            margin: 0;
            padding: 20px;
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
        }

        form {
            max-width: 300px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ddd;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            color: #333;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }

        .error {
            color: #ff0000;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h2>Supervisor Login</h2>

    <form method="POST" action="">
        <?php if (isset($error)): ?>
            <div class="error"><?php echo $error; ?></div>
        <?php endif; ?>

        <label for="matricule_person">Matricule:</label>
        <input type="text" id="matricule_person" name="matricule_person" required>

        <label for="pwd_person">Password:</label>
        <input type="password" id="pwd_person" name="pwd_person" required>

        <input type="submit" value="Login">
    </form>
</body>
</html>
