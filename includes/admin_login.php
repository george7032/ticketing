<?php

include ("dbcon.php");

if(isset($_POST["adminSubmit"])){
    $ownerEmail = $_POST ["Username"];
    $ownerPassword = $_POST ["Password"]; 
    $result = mysqli_query($con, "SELECT * FROM 'admin' WHERE Username = '$Username' or Password = '$Password'");
    $row =(mysqli_fetch_assoc($result));
    if(mysqli_num_rows($result) > 0){
        if($ownerPassword == $row["Password"]){
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            header("location: admin_dashboard.php");
        }
        else
        {
            echo
            "<script> alert('Wrong password'); </script>";
        }
    }
    else{
        echo
            "<script>alert ('User Not Registered');</script>";  
    }

}
if ($row['Username'] == $Username && $row['Password'] == $Password) {
    $_SESSION['Username'] = $row['Username'];
    $_SESSION['login'] = true;
    header("location: admin_dashboard.php");
    exit();
} else {
    echo "<script>alert('Login failed. Please check your username and password.');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Sign Up</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="nav container">
            <a href="index.php" class="logo"><i class='bx bx-home'></i>TUK Ticketing System</a>
           
            <a href="index.php" class="btn">Home</a>
        </div>

    </header>
    <div class="login container">
        <div class="login-container">
            <h2>Welcome Back</h2>
            <form action="" method="post">
                <span>Username</span>
                <input type="text" name="Username" id="" placeholder="Username" required>                
                <span>Enter your password</span>
                <input type="Password" name="Password" id="" placeholder="Password" required>
                <button type="submit" name="AdminSubmit">Log In </button>                   
                <p>Don't Have An Account!</p>
            </form>
            <a href="admin_signup.php" class="btn">Sign Up</a>
        </div>
    </div>
    
<?php include('includes/footer.php'); ?>