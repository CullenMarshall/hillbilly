<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Find Us</title>
    <link rel="stylesheet" href="main.css">
    <style>
        h1 {
            text-align: center;
            color: #d42f12;
            text-shadow: #FC0 1px 0 10px;
        }

        .mapouter-container {
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
            flex-wrap: wrap;
            width: 100vw;

        }

        .mapouter {
            display: flex;
            flex-direction: column;
            position: relative;
            justify-content: center;
            text-align: center;
            height: 700px;
            width: 100%;
            max-width: 400px;
            flex: 1 0 auto;
        }

        .gmap_canvas {
            overflow: hidden;
            background: none;
            height: 700px;
            width: 400px;
            border-radius: 8px;
        }

        .gmap_canvas,
        .contact-info {
            flex: 1;

        }

        .contact-info {
            color: #d42f12;
            text-shadow: 1px 0 5px white;
            text-align: center;
            padding: 2px;
            margin: 20px;
            border-radius: 10px;
            font-size: 1.3rem;
            background-image: linear-gradient(rgba(255, 255, 255, 0.5), rgba(255, 255, 255, 0.5)), url("images/overlay.png");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: top;

        }
    </style>
</head>

<body>

    <!-- Main Content Section -->
    <main>
        <header>
            <div class="logo">
                <img id="left_logo" src="/restaurant/images/header_logo.png" alt="Restaurant Logo">
            </div>
            <div>
                <img class="plainlogo" src="images/plainlogo.png" alt="">
            </div>
            <div class="logo">
                <img id="right_logo" src="/restaurant/images/header_logo.png" alt="Restaurant Logo">
            </div>
        </header>
        <nav>
            <ul class="nav-links">
                <li><a href="indexView.php">Home</a></li>
                <li><a href="reservationForm.php">Make a Reservation</a></li>
                <li><a href="menu.php">Menu</a></li>
            </ul>
        </nav>
        <h1>Find Us</h1>
        <div class="mapouter-container">
            <div class="mapouter">
                <div class="gmap_canvas">
                    <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=hillbilly%20pizza%20seoul&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net/blog/divi-discount-code-elegant-themes-coupon/">
                    </a>
                </div>
                <div id="box1" class="contact-info">
                    <h2>Address</h2>
                    <p>JungSan Store</p>
                    <p>Seoul, South Korea</p>
                    <h2>Phone Number</h2>
                    <p>123-456-7890</p>
                    <h2>Hours</h2>
                    <p>Monday - Friday: 11:00am - 10:00pm</p>
                    <p>Break time 2:30-4:30/ No Break on Weekends</p>
                    <p>Saturday - Sunday: 11:00am - 10:00pm</p>
                    <p>Delivery/Take Out/ Eat In</p>
                </div>
            </div>
            <!-- second store -->
            <div class="mapouter">
                <div class="gmap_canvas">
                    <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=hillbilly%20pizza%20seoul&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net/blog/divi-discount-code-elegant-themes-coupon/"></a>
                </div>
                <div id="box2" class="contact-info">
                    <h2>Address</h2>
                    <p>Jeongbalsan Store</p>
                    <p>Ilsan, South Korea</p>
                    <h2>Phone Number</h2>
                    <p>123-456-7890</p>
                    <h2>Hours</h2>
                    <p>Tuesday - Friday: 3:00pm - 11:00pm </p>
                    <p>Break time 2:30-4:30 </p>
                    <p>Saturday - Sunday: 11:00am - 10:00pm</p>
                    <p>Delivery/Take Out Only</p>
                    <p>Last Order 20 mins before closing</p>

                </div>
            </div>
        </div>


    </main>


    <footer>
        <p>&copy; <?php echo date('Y'); ?> Hillbilly Pizza. All rights reserved.</p>
    </footer>
</body>

</html>