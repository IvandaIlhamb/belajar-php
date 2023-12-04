<?php
$error_message = ""; // Initialize the error message variable

// Mock authentication function (replace this with your actual logic)
function authenticateUser($email, $password) {
    // Example: Check if email and password match a user in the database
    $validUserEmail = 'user@example.com';
    $validPassword = 'password123';

    if ($email === $validUserEmail && $password === $validPassword) {
        return true; // Authentication successful
    } else {
        return false; // Authentication failed
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Perform user authentication
    if (authenticateUser($email, $password)) {
        // If authentication is successful, redirect to dashboard.php
        header("Location: dashboard.php");
        exit();
    } else {
        // If authentication fails, set an error message to display to the user
        $error_message = "Email dan password salah";
    }
}
?>

<!-- Rest of your HTML code remains unchanged -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Layout</title>
    <link rel="stylesheet" href="assets/dist/CSS/login-layout.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <div class="wrapper">
        <div class="container main">
            <div class="row">
                <div class="col-md-6 side-image">
                    <img src="assets/dist/img/github.png" alt="">
                    <div class="text">
                        <p>Join the community <i>IvandaIlham</i></p>
                    </div>
                </div>
                <div class="col-md-6 right">
                    <div class="input-box">
                        <header>Halaman Login</header>
                        <form method="POST" action="login.php">
                            <div class="input-field">
                                <input type="text" class="input" id="email" name="email" required autocomplete="off">
                                <label for="email">Email</label>
                            </div>
                            <div class="input-field">
                                <input type="password" class="input" id="password" name="password" required>
                                <label for="password">Password</label>
                            </div>
                            <div class="input-field">
                                <input type="submit" class="submit" value="Sign Up">
                            </div>
                            <div class="signin">
                                <span>Anda belum memiliki akun? <a href="#">Sign In here</a></span>
                            </div>
                            <div class="error">
                            <?php
                                // Display error message if authentication fails
                                if (!empty($error_message)) {
                                    echo '<div class="error-message">' . $error_message . '</div>';
                                }
                            ?>
                            </div>
  
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
