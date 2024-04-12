
<?php include 'includes/header.php'; ?>

<main>
    <div class="container">
        <h1>Admin Login</h1>
        <form action="admin_dashboard.php" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
