
<?php
session_start();

// Check if user is already logged in, redirect if true
if(isset($_SESSION['username'])) {
    header("location: dashboard.php");
    exit;
}

// Check if the form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Perform database authentication here
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Example validation, replace with actual database query
    if($username === 'demo' && $password === 'demo123') {
        // Authentication successful, start session and redirect
        $_SESSION['username'] = $username;
        header("location: dashboard.php");
        exit;
    } else {
        $error = "Invalid username or password";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <img src="images/logo.png" alt="Logo">
                </div>
                <nav>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="login.php">Student Login</a></li>
                        <li><a href="#">Core Values</a></li>
                        <li><a href="#">General Services</a></li>
                        <li><a href="#">Help</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <main>


<div class="container">
    <h2>Login</h2>
    <?php
    if(isset($error)) {
        echo '<div class="error">' . $error . '</div>';
    }
    ?>
    <form action="" method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
        </div>
        <button type="submit">Login</button>
    </form>
</div>

</main>
    <footer>
        <div class="container">
            <p>&copy; 2024 Student Portal. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>



