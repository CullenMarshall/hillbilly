<!DOCTYPE html>
<html>

<head>
    <title>Reservation Form</title>
    <link rel="stylesheet" type="text/css" href="main.css">

</head>

<body>
    <header>
        <div class="logo">
            <img src="/restaurant/images/header_logo.png" alt="Restaurant Logo">
        </div>
        <nav>
            <ul class="nav-links">
                <li><a href="indexView.php">Home</a></li>
                <li><a href="indexView.php">Menu</a></li>
                <li><a href="contactPage.php">Contact Us</a></li>
            </ul>
        </nav>
    </header>
    <h1>Reservation Form</h1>
    <form action="index.php" method="post">
        <!-- 'code' => $_REQUEST["code"] -->
        <label for="code">Enter your Code:</label>
        <input type="text" id="code" name="code" required><br><br>

        <label for="customer_name">Name:</label>
        <input type="text" id="customer_name" name="customer_name"><br><br>

        <label for="contact_number">Contact Number:</label>
        <input type="text" id="contact_number" name="contact_number"><br><br>

        <label for="reservation_date">Date:</label>
        <input type="date" id="reservation_date" name="reservation_date"><br><br>

        <label for="reservation_time">Time:</label>
        <input type="time" id="reservation_time" name="reservation_time"><br><br>

        <label for="number_of_guests">Number of Guests:</label>
        <input type="number" id="number_of_guests" name="number_of_guests" min="1"><br><br>

        <input type="hidden" name="route" value="updateReservation">
        <input type="submit" value="Update">



    </form>
</body>

</html>