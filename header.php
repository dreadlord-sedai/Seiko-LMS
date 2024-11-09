<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/headfoot.css">
</head>

<body>
    <header class="header">
        <div class="header__content">
            <?php
            
            session_start();

            ?>
            <div class="header__left">
                <div class="hamburger">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
                </div>
                <img class="logo" src="resources/logo.png" alt="" style="height: 50px;background-size: contain;background-position: center;background-repeat: no-repeat;">
                <h2 class="title font1" style=" font-family: 'Poppins', sans-serif; font-weight: 400;">SEIKO</h2>
            </div>
           
              
            

            <nav class="nav">
                <ul class="nav__list">
                    <li class="nav__item1"><a href="home.php" class="nav__link font1" style="font-family: 'Poppins', sans-serif;">Home</a></li>
                    <li class="nav__item2"><a href="" class="nav__link font1" style="font-family: 'Poppins', sans-serif;">Classes</a></li>
                    <li class="nav__item3"><a href="contact.php" class="nav__link font1" style="font-family: 'Poppins', sans-serif;">Contact</a></li>
                    <li class="nav__item4"><a href="about.php" class="nav__link font1" style="font-family: 'Poppins', sans-serif;">About</a></li>
                </ul>
            </nav>
            <div class="LRbuttons">
                    <button type="button" class="btn btn-dark me-2 mb-1 Lbtton"><a href="entrance.php">Login</a></button>
                    <button type="button" class="btn btn-outline-warning accordion Rbutton">GET STARTED</button>
            </div>

            <div class="UNbuttons d-none">
                    <button type="button" class="notify" ><i class="bi bi-bell"></i></button>
                    <div class="user__profile" onclick="toggleDropdown();"><img src="resources/user.png"/></div>
            </div>

            <div class="user__dropdown">
                <h3>Buddhi Kavindya<br/><span>buddhikavindya@gmail.com</span></h3>
                <ul class="dropdown__list">
                    <li class="dropdown__item1"><img class="dropdown__icon" src="resources/profile_dropdown/dashboard.png"><a href="#" class="dropdown__link font1">Dashboard</a></li>
                    <li class="dropdown__item2"><img class="dropdown__icon" src="resources/profile_dropdown/my_profile.png"><a href="#" class="dropdown__link font1">My Profile</a></li>
                    <li class="dropdown__item3"><img class="dropdown__icon" src="resources/profile_dropdown/my_classes.png"><a href="#" class="dropdown__link font1">My Classes</a></li>
                    <li class="dropdown__item4"><img class="dropdown__icon" src="resources/profile_dropdown/payments.png"><a href="#" class="dropdown__link font1">Payments</a></li>
                    <li class="dropdown__item5 d-none"><img class="dropdown__icon" src="resources/profile_dropdown/review.png"><a href="#" class="dropdown__link font1">Reviews</a></li>
                    <hr>
                    <li class="dropdown__item6"><img class="dropdown__icon" src="resources/profile_dropdown/settings.png"><a href="#" class="dropdown__link font1">Settings</a></li>
                    <li class="dropdown__item7"><img class="dropdown__icon" src="resources/profile_dropdown/logout.png"><a href="#" class="dropdown__link font1">Logout</a></li>
                </ul>
            </div>
        </div>
    </header>

</body>

</html>
