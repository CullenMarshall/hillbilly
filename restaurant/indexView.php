<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Hillbilly Pizza - Home</title>
    <link rel="stylesheet" href="main.css">
</head>

<body>
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
            <li><a href="indexView.php">Our Menu</a></li>
            <li><a href="reservationForm.php">Make a Reservation</a></li>
            <li><a href="contactPage.php">Find Us</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
    </nav>

    <main>
        <div class="menu-grid">
            <div class="menu-card">
                <div class="content">
                    <img src="/restaurant/images/thatsamore_pi.jpeg" alt="Menu 1">
                </div>
                <div class="back">
                    <h3 class="menu-title">That's Amore</h3>
                    <p>Fresh peppers, onions and mushrooms, house-made Italian sausage, pepperoni, black olives</p>
                    <p>Price: 24,900</p>
                    <p>*Our best Seller</p>
                    <a href="menu.php">See Full Menu</a>
                </div>

            </div>
            <div class="menu-card">
                <div class="content">
                    <img src="images/praiseChesus_pi.jpg" alt="Menu 2">
                </div>
                <div class="back">
                    <h3 class="menu-title">Praise Cheesus</h3>
                    <p>House blend of mozzarella, finished with pecorino romano</p>
                    <p>Price: 18,900</p>
                    <p>Simple is the best!</p>
                    <a href="menu.php">See Full Menu</a>
                </div>
            </div>
            <div class="menu-card">
                <div class="content">
                    <img src="images/redham_pi.jpg" alt="Menu 3">

                </div>
                <div class="back">
                    <h3 class="menu-title">Pepperoni</h3>
                    <p>RED HAM</p>
                    <p>Price: 18,900</p>
                    <p>*is a little spicy, but kids will love it</p>
                    <a href="menu.php">See Full Menu</a>
                </div>
            </div>
            <div class="menu-card">
                <div class="content">
                    <img src="images/gogimani_pi.jpeg" alt="Menu 4">

                </div>
                <div class="back">
                    <h3 class="menu-title">Gogimani</h3>
                    <p>Pepperoni, bacon, house-made Italian sausage, house-made Korean beef sausage</p>
                    <p>Price: 25,900</p>
                    <p>100% not vegan Friendly</p>
                    <a href="menu.php">See Full Menu</a>
                </div>
            </div>
            <div class="menu-card">
                <div class="content">
                    <img src="images/arirang_pi.jpg" alt="Menu 5">

                </div>
                <div class="back">
                    <h3 class="menu-title">Arirang</h3>
                    <p>House-made Korean beef sausage, fresh peppers, onions, mushrooms</p>
                    <p>Price: 22,900</p>
                    <p>It's Bulgogi Pizza</p>
                    <a href="menu.php">See Full Menu</a>
                </div>
            </div>
            <div class="menu-card">
                <div class="content">
                    <img src="images/72_pi.jpg" alt="Menu 6">
                </div>
                <div class="back">
                    <h3 class="menu-title">72 Roni</h3>
                    <p>Pepperoni with pickled Jalapenos</p>
                    <p>Price: 20,900</p>
                    <p>It's spicy!</p>
                    <a href="menu.php">See Full Menu</a>
                </div>
            </div>
            <div class="menu-card">
                <div class="content">
                    <img src="images/sets_pi.jpeg" alt="Menu 7">=con
                </div>
                <div class="back">
                    <h3 class="menu-title">Lil' Guys</h3>
                    <p>Get any pizza, but a mini version</p>
                    <p>starting at 9,900</p>
                    <p>perfect for 1 person</p>
                    <a href="menu.php">See Full Menu</a>
                </div>
            </div>
            <div class="menu-card">
                <div class="content">
                    <img src="images/hawi_pi.jpeg" alt="Menu 8">
                </div>
                <div class="back">
                    <h3 class="menu-title">Hawaiian</h3>
                    <p>Pineapples, bacon, fresh onions</p>
                    <p>Price: 23,400</p>
                    <p>Hate it or Love it</p>
                    <a href="menu.php">See Full Menu</a>
                </div>
            </div>

            <div class="menu-card order-button">
                <a href="orderingPage.php">Order Online</a>
                <a href="reservationForm.php">Make a Reservation</a>
            </div>

        </div>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Hillbilly Pizza. All rights reserved.</p>
    </footer>
</body>

</html>