<?php
session_start();
include '../php-scripts/connect.php';

// logout auto if supervisor is already logged in
if (isset($_SESSION['matricule_sv'])) {
    unset($_SESSION['matricule_sv']);
}

// Login form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $matricule_person = $_POST['matricule_person'];
    $pwd_person = $_POST['pwd_person'];

    // Validate supervisor credentials 
    $query = "SELECT * FROM person WHERE matricule_person = '$matricule_person' AND pwd_person = '$pwd_person' AND role_person = 3";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        // Authentication successful, store supervisor ID in session
        $supervisor = $result->fetch_assoc();
        $_SESSION['matricule_sv'] = $supervisor['matricule_person'];

        // Redirect to dashboard
        header("Location: ..\index.php");
        exit();
    } else {
        // Authentication failed, display error message
        $error = "Matricule ou Password incorrect";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Supervisor Login</title>
    <style>
        body {
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            margin: 0;
            padding: 20px;
        }

        .logo {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo img {
            max-width: 200px;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 6px;
            background-color: #000;
            padding: 20px;
        }

        h2 {
            color: #fff;
            margin-bottom: 30px;
        }

        form {
            text-align: center;
        }

        label {
            display: block;
            text-align: left;
            margin-bottom: 8px;
            font-weight: bold;
            color: #fff;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
            text-align: center;
        }

        input[type="submit"] {
            background-color: #f00;
            color: #fff;
            padding: 12px 20px;
            border: none;
            cursor: pointer;
            margin-top: 10px;
        }

        input[type="submit"]:hover {
            background-color: #900;
        }

        .error {
            color: #f00;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="logo">
        <img src="../assets/img/premo.png" alt="Logo">
    </div>

    <div class="container">
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
    </div>
</body>



</html>
