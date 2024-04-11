<?php include 'include/header.php'; ?>

<main>
    <div class="container">
        <h2>Submit a Ticket</h2>
        <form action="submit_ticket.php" method="post">
            <label for="name">Your Name:</label><br>
            <input type="text" id="name" name="name" required><br><br>

            <label for="email">Your Email:</label><br>
            <input type="email" id="email" name="email" required><br><br>

            <label for="subject">Subject:</label><br>
            <input type="text" id="subject" name="subject" required><br><br>

            <label for="message">Message:</label><br>
            <textarea id="message" name="message" rows="4" required></textarea><br><br>

            <input type="submit" value="Submit Ticket">
        </form>
    </div>
</main>

<?php include 'include/footer.php'; ?>
