<?php include 'topbar.php'?>
<nav class="navbar">
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
    <button class="navbar-hamburger" onClick="toggleHamburgerList()">
        <div></div>
        <div></div>
        <div></div>
    </button>
    <div class="navbar-hamburger-list" style="display: none">
        <a href="./">
            <h3>Home</h3>
        </a>
        <a href="./importantDates.php">
            <h3>Important Dates</h3>
        </a>
        <a href="./conferrence.php">
            <h3>Conference Session</h3>
        </a>
        <a href="./schedule.php">
            <h3>Schedule</h3>
        </a>
        <a href="./registration.php">
            <h3>Registration</h3>
        </a>
        <a href="./servey.php">
            <h3>Servey</h3>
        </a>
        <a href="./download.php"> 
            <h3>Download</h3>
        </a>
        <a href="./venue.php"> 
            <h3>Venue</h3>
        </a>
        <a href="./#contact">
            <h3>Contact Us</h3>
        </a>
    </div>
    <script>
        const path = window.location.pathname.split('/')
        const navbarOptions = document.querySelectorAll(`[href='./${path[path.length - 1]}']`)
        const option = navbarOptions[0]
        option.querySelector('span').style.color = '#fd7e14'
        option.querySelector('.navbar-option-slideIn').style.width = '100%'

        const hamburgerOption = navbarOptions[1]
        hamburgerOption.style.backgroundColor = 'white'
        hamburgerOption.querySelector('h3').style.color = '#fd7e14'

        function toggleHamburgerList() {
            const listElement = document.querySelector('.navbar-hamburger-list')
            const listState = listElement.style.display
            if(listState === 'none')
                listElement.style.display = 'block'
            else
                listElement.style.display = 'none'
        }
    </script>
</nav>