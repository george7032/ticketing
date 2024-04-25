<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Log In</title>

</head>
<body>
    <header>
        <div class="nav container">
            <a href="index.php" class="logo"><i class='bx bx-home'></i>TUK Ticketing system</a>
           
            <a href="admin_login2.php" class="btn">Admin Login</a>
        </div>
    </header>
    <div class="login container">
        <div class="login-container">
            <h2>Login To Continue</h2>
            <p>Log in with your data that were given<br>during your registration</p>
            <form action="" method="post">
                <span>Registration Number</span>
                <input type="text" name="registrationNumber" id="registrationNumber" placeholder="Registration Number">
                <span>Enter Your Password</span>
                <input type="password" name="studentPassword" id="studentPassword" placeholder="Password" required>
                <button type="submit" name="studentLogin">Log In</button>
            </form>
        </div>
    </div>
    
    <?php include('includes/footer.php') ?>

    <?php
    // Your PHP code here
    if(isset($_POST['studentLogin'])) {
        $studentPassword = $_POST['studentPassword'];
        $query = "SELECT * FROM students WHERE registrationNumber = ? AND studentPassword = ?";
        $stmt = $con->prepare($query);
        $stmt->bind_param("ss", $registrationNumber, $studentPassword);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $_SESSION['studentID'] = $row['studentID'];
            $_SESSION['registrationNumber'] = $row['registrationNumber'];
            $_SESSION['studentName'] = $row['studentName'];

            header("location: student_dashboard.php");
            exit();
        } else {
            echo "<script>alert('Invalid credentials. Please try again.');</script>";
        }
    }
    ?>
</body>
</html>
