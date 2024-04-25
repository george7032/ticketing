<?php
session_start();
include('../dbcon.php');

if (!isset($_SESSION['login'])) {
    header("location: ../owner_login.php");
    exit();
}

if (isset($_POST['addStudentSubmit'])) {
    $studentName = $_POST['studentName'];
    $registrationNumber = $_POST['registrationNumber'];
    $course = $_POST['course'];
    $studentPassword = $_POST['studentPassword'];

    // You can add additional validation and sanitization here

    $query = "INSERT INTO students (studentName, registrationNumber, course, studentPassword)
              VALUES ('$studentName', '$registrationNumber', '$course', '$studentPassword')";

    if (mysqli_query($con, $query)) {
        echo "<script>alert('Student added successfully');</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($con) . "');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <link rel="stylesheet" href="css/style.css"> <!-- Assuming you have a CSS file for styling -->
</head>
<body>
    <header>
        <!-- Your header content -->
    </header>

    <section class="add-student container">
        <div class="student-form">
            <h1>Add Student</h1>
            <form action="" method="post">
                <label for="studentName">Student's Name:</label>
                <input type="text" name="studentName" required>

                <label for="registrationNumber">Registration Number:</label>
                <input type="text" name="registrationNumber" required>

                <label for="course">Course:</label>
                <input type="text" name="course" required>

                <label for="studentPassword">Create Password:</label>
                <input type="password" name="studentPassword" required>

                <button type="submit" name="addStudentSubmit">Add Student</button>
            </form>
        </div>
    </section>

</body>
</html>
