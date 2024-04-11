<?php include 'include/header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h2 class="mt-4">Submitted Tickets</h2>
            <table class="table table-striped mt-3">
                <thead>
                    <tr>
                        <th scope="col">Ticket ID</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Description</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Assuming you have a database connection established
                    $servername = "localhost";
                    $username = "username"; // Replace with your MySQL username
                    $password = "password"; // Replace with your MySQL password
                    $dbname = "ticketing_system"; // Replace with your database name

                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);

                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    // SQL query to fetch tickets from the database
                    $sql = "SELECT * FROM tickets";
                    $result = $conn->query($sql);

                    // Check if any tickets were returned
                    if ($result->num_rows > 0) {
                        // Output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<th scope='row'>" . $row['ticket_id'] . "</th>";
                            echo "<td>" . $row['subject'] . "</td>";
                            echo "<td>" . $row['description'] . "</td>";
                            echo "<td>" . $row['status'] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='4'>No tickets found</td></tr>";
                    }
                    $conn->close();
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include 'include/footer.php'; ?>
