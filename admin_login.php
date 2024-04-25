<?php
session_start();
include('dbconn.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    $query = "SELECT * FROM admins WHERE Username = ? AND Password = ?";
    $stmt = $con->prepare($query);
    $stmt->bind_param("ss", $Username, $Password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $_SESSION['Username'] = $row['Username'];
        $_SESSION['AdminName'] = $row['AdminName'];

        header("location: admin_dashboard.php");
        exit();
    } else {
        echo "<script>alert('Invalid credentials. Please try again.');</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="nav container">
            <a href="index.php" class="logo"><i class='bx bx-home'></i>TUK Ticketing System</a>
           
            <a href="owner_login.php" class="btn">Admin Login</a>
        </div>
    </header>
    <div class="login container">
        <div class="login-container">
            <h2>Login To Continue</h2>
            <p>Log in with your data that you given<br>during your registration</p>
            <form action="" method="post">
                <span>Enter Your Username</span>
                <input type="text" name="Username" id="Username" placeholder="Username">
                <span>Enter Your Password</span>
                <input type="password" name="Password" id="Password" placeholder="Password" required>
                <button type="submit" name="adminLogin">Log In</button>
            </form>
        </div>
    </div>
    
    <?php include('includes/footer.php') ?>
</body>
</html>
