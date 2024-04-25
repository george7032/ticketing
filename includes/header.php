<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
}

.container {
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.header-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px 0;
}

.logo img {
    max-width: 100%;
    height: auto;
}

nav ul {
    list-style-type: none;
    display: flex;
}

nav ul li {
    margin-right: 20px;
}

nav ul li a {
    text-decoration: none;
    color: #ffff;
    font-weight: bold;
    transition: color 0.3s ease;
}

nav ul li a:hover {
    color: #3498db;
}

main {
    padding: 20px;
}

    </style>
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
                        <li><a href="student_login.php">Student Login</a></li>
                        <li><a href="#">Core Values</a></li>
                        <li><a href="#">General Services</a></li>
                        <li><a href="#">Help</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <main>
