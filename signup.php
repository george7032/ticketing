<?php include 'include/header.php'; ?>

<main>
    <div class="container">
        <h1>Student Sign Up</h1>
        <form action="#" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="regno">Registration Number:</label>
                <input type="text" id="regno" name="regno" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirm Password:</label>
                <input type="password" id="confirm_password" name="confirm_password" required>
            </div>
            <button type="submit">Sign Up</button>
        </form>
    </div>
</main>

<?php include 'include/footer.php'; ?>
