<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Find Us</title>
    <!-- Link your CSS file here -->
    <link rel="stylesheet" href="main.css">
    <style>
        .roundlogo {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            margin: 0 auto;
            display: block;
        }

        .menuCon {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .menuPage {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            margin: 0 auto;
            display: block;
            align-items: center;
        }
    </style>
</head>

<body>
    <main>
        <header>
            <div class="logo">
                <img id="left_logo" src="/restaurant/images/header_logo.png" alt="Restaurant Logo">
            </div>
            <div>
                <img class="roundlogo" src="images/힐빌리-이미지1.png" alt="">
            </div>
            <div class="logo">
                <img id="right_logo" src="/restaurant/images/header_logo.png" alt="Restaurant Logo">
            </div>
        </header>
        <nav>
            <ul class="nav-links">
                <li><a href="indexView.php">Home</a></li>
                <li><a href="reservationForm.php">Make a Reservation</a></li>
                <li><a href="contactPage.php">Find Us</a></li>
            </ul>
        </nav>

        <div class="menuCon">
            <img id="menuPage" src="images/old price.png" alt="">
        </div>



    </main>


    <footer>
        <p>&copy; <?php echo date('Y'); ?> Hillbilly Pizza. All rights reserved.</p>
    </footer>
</body>

</html>