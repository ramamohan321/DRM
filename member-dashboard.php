<?php 

session_start();
include "db_conn.php";


if (isset($_SESSION['sno']) && isset($_SESSION['user_id'])) 

 ?>
<!DOCTYPE html>
<html>
<link rel="icon" href="images\logo.jpg" type="image/icon type">
<title>DRM - Dashboard</title>
<!-- Head Section -->

<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <link rel="stylesheet" href="styles\member-dashboard.css">
</head>
<!-- Body Section -->

<body>
    <!-- <script src="script\member-dashboard.js"></script> -->

    <div class="main">
        <div class="section">
            <!-- Top Nav Bar Section -->
            <div class="navbar">
                <div class="hamburger">
                    <i class="fas fa-bars"></i>
                </div>
                <h1 class="navbar-heading">Dashboard
                    <a href="login.php" id="logoutButton"><button class="logout-btn" id="logoutButton" name="button"
                            type="button">Logout</button></a>
                </h1>
            </div>
            <!-- Actual Body Container -->
            <div class="main-body-container">
                <h1 style="text-align: center;">Member Dashboard Page</h1>
                <p style="text-align: center;">This is a Sample "Member Dashboard" Page.</p><br>
                <p style="text-align: center;">In this page, the Member roles and responsabilities are appeared here...</p>
            </div>
        </div>
        <!-- Side Bar Section -->
        <div class="sidebar" id="sideNav">
            <div class="profile">
                <img src="images\dpp.jpg" alt="profile_picture">
                <h3><?php $emptySpace = " "; echo $_SESSION['fname'] . $emptySpace . $_SESSION['lname']; ?></h3>
                <p>Member</p>

            </div>
            <ul>
                <li>
                    <a href="member-dashboard.php?<?php echo time(); ?>" class="active">
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span class="item">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="member-assign-docs.php?<?php echo time(); ?>">
                        <span class="icon"><i class="fas fa-duotone fa-file-invoice"></i></span> 
                        <span class="item">Assigned Documents</span>
                    </a>
                </li>
            </ul>
        </div>

    </div>

    <script>
        var hamburger = document.querySelector(".hamburger");
        var logoutButton = document.getElementById("logoutButton");
        var sideNav = document.getElementById("sideNav");

        // When the side navigation bar is collapsed, set the logout button position to fixed.
        sideNav.addEventListener("collapsed", () => {
            logoutButton.style.position = "fixed";
            logoutButton.style.top = "0";
            
        });

        // When the side navigation bar is expanded, set the logout button position to relative.
        sideNav.addEventListener("expanded", () => {
            logoutButton.style.position = "relative";
            logoutButton.style.left = "70";
        });

        // Toggle the hamburger menu when clicked.
        hamburger.addEventListener("click", function () {
            document.querySelector("body").classList.toggle("active");
        });

    </script>
</body>

</html>