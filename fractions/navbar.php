<?php include 'topbar.php'?>
<header class="navbar">
    <div class="navbar-image-container">
        <img src="./assets/images/uamc-removebg-preview.png" alt="">
    </div>
    <div class="navbar-option-list">
        <a href="./">
            <div class="navbar-option">
                <span>Home</span>
                <div class="navbar-option-slideIn"></div>
            </div>
        </a>
        <a href="./importantDates.php">
            <div class="navbar-option">
                <span>Important Dates</span>
                <div class="navbar-option-slideIn"></div>
            </div>
        </a>
        <a href="./conferrence.php">
            <div class="navbar-option">
                <span>Conference Session</span>
                <div class="navbar-option-slideIn"></div>
            </div>
        </a>
        <a href="./schedule.php">
            <div class="navbar-option">
                <span>Schedule</span>
                <div class="navbar-option-slideIn"></div>
            </div>
        </a>
        <a href="./registration.php">
            <div class="navbar-option">
                <span>Registration</span>
                <div class="navbar-option-slideIn"></div>
            </div>
        </a>
        <a href="./servey.php">
            <div class="navbar-option">
                <span>Servey</span>
                <div class="navbar-option-slideIn"></div>
            </div>
        </a>
        <a href="./download.php"> 
            <div class="navbar-option">
                <span>Download</span>
                <div class="navbar-option-slideIn"></div>
            </div>
        </a>
        <a href="./venue.php"> 
            <div class="navbar-option">
                <span>Venue</span>
                <div class="navbar-option-slideIn"></div>
            </div>
        </a>
        <a href="./#contact">
            <div class="navbar-option">
                <span>Contact Us</span>
                <div class="navbar-option-slideIn"></div>
            </div>
        </a>
    </div>
    <script>
        const option = document.querySelector(`[href='.${window.location.pathname}']`)
        option.querySelector('span').style.color = '#fd7e14'
        option.querySelector('.navbar-option-slideIn').style.width = '100%'
    </script>
</header>