<!DOCTYPE html>
<html>

<head>
    <title>Reservation Form</title>
    <link rel="stylesheet" type="text/css" href="main.css">

</head>

<body>
    <header>
        <div class="logo">
            <img src="/restaurant/images/힐빌리-이미지1.png" alt="Restaurant Logo">
        </div>
        <nav>
            <ul class="nav-links">
                <li><a href="indexView.php">Home</a></li>
                <li><a href="indexView.php">Menu</a></li>
                <li><a href="contactPage.php">Find Us</a></li>
            </ul>
        </nav>
        <div class="logo">
            <img src="/restaurant/images/힐빌리-이미지1.png" alt="Restaurant Logo">
        </div>
    </header>
    <h1>Reservation Form</h1>
    <form action="index.php" method="post">
        <label for="customer_name">Name:</label>
        <input type="text" id="customer_name" name="customer_name" required><br><br>

        <label for="contact_number">Contact Number:</label>
        <input type="text" id="contact_number" name="contact_number" required><br><br>

        <label for="reservation_date">Date:</label>
        <input type="date" id="reservation_date" name="reservation_date" required><br><br>

        <label for="reservation_time">Time:</label>
        <input type="time" id="reservation_time" name="reservation_time" required><br><br>

        <label for="number_of_guests">Number of Guests:</label>
        <input type="number" id="number_of_guests" name="number_of_guests" min="1" required><br><br>

        <input type="hidden" name="route" value="createReservation">
        <!-- <input type="submit" value="Submit"> -->
        <button type="submit" id="submitButt">Submit</button>

        <!-- <button id="updatebutton"><a href="updatereservation.php">Update or Cancel</a></button> -->

    </form>
    <div id="overlay" class="overlay">
        <div class="popup">
            <div class="reservationMessage">
                <?php
                // if (isset($reservationMessage) && isset($reservationMessage['status']) && $reservationMessage['status'] === 'success') {
                //     echo "<div class='successMessage'>" . $reservationMessage['message'] . "</div>";
                //     echo "<a href='indexView.php' class='backButtonAfterSuccess'>Back to homepage</a>";

                ?>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('submitButt').addEventListener('click', function(event) {
            event.preventDefault();
            document.getElementById('overlay').style.display = 'block';
            sendFormData();
        });
        async function sendFormData() {
            try {
                const bodyContent = [
                    document.getElementById('customer_name').value,
                    document.getElementById('contact_number').value,
                    document.getElementById('reservation_date').value,
                    document.getElementById('reservation_time').value,
                    document.getElementById('number_of_guests').value
                ];

                const response = await fetch(`index.php?route=createReservation`, {
                    method: 'POST',
                    headers: {
                        "Content-Type": "application/json",
                    },
                    body: JSON.stringify(bodyContent)
                });

                if (!response.ok) throw new Error('Network response was not ok');

                const data = await response.json();
                console.log('Received data:', data);
            } catch (error) {
                console.error('Error:', error);
            }
        };
    </script>
    <footer>
        <p>&copy; <?php echo date('Y'); ?> Hillbilly Pizza. All rights reserved.</p>
    </footer>
</body>

</html>