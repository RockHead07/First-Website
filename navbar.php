<?php
// Get current page filename
$current_page = basename($_SERVER['PHP_SELF']);

// Define navigation items
$nav_items = [
    'index.php' => 'Home',
    'About_Me.php' => 'About', 
    'ContactMe.php' => 'Contact',
    'Schedule.php' => 'Schedule'
];
?>

<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Personal Website</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="brand.png" type="image/png">
    <style>
        /* FONTS */
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap');

/* KEYFRAMES ANIMATION */
@keyframes showRight {
    100% {
        width: 0;
    }
}

@keyframes slideDown {
    from {
        opacity: 0;
        transform: translateY(-20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* BASE CSS */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

.body {
    color: black;
}

.header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    padding: 20px 10%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 100;
    background-color: white;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

/* Logo Website */
.logo {
    position: relative;
    font-size: 25px;
    color: black;
    text-decoration: none;
    font-weight: 600;
}

.logo::before {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    width: 100%;
    height: 100%;
    background: white;
    animation: showRight 1s ease forwards;
    animation-delay: .4s;
}

/* Hamburger Menu Button */
.menu-toggle {
    display: none;
    flex-direction: column;
    cursor: pointer;
    padding: 5px;
}

.hamburger {
    width: 25px;
    height: 3px;
    background: black;
    margin: 3px 0;
    transition: 0.3s;
}

.menu-toggle.active .hamburger:nth-child(1) {
    transform: rotate(-45deg) translate(-5px, 6px);
}

.menu-toggle.active .hamburger:nth-child(2) {
    opacity: 0;
}

.menu-toggle.active .hamburger:nth-child(3) {
    transform: rotate(45deg) translate(-5px, -6px);
}

/* Navigation Bar */
.navbar {
    display: flex;
    align-items: center;
}

.navbar a {
    font-size: 14px;
    width: max-content;
    position: relative;
    color: black;
    text-decoration: none;
    font-weight: 500;
    margin-left: 35px;
    transition: .3s;
    z-index: 1;
}

.navbar a:hover, .navbar a.active {
    color: gray;
}

.navbar a::before {
    content: '';
    position: absolute;
    bottom: -4px;
    height: 4px;
    width: 100%;
    background: black;
    border-radius: 40px;
    transform: scaleX(0);
    transition: transform 0.25s linear;
    z-index: -1;
}

.navbar a:hover::before {
    transform: scaleX(1);
}

/* Tablet Styles */
@media screen and (max-width: 768px) {
    .header {
        padding: 15px 5%;
    }
    
    .navbar a {
        font-size: 13px;
        margin-left: 25px;
    }
    
    .logo {
        font-size: 22px;
    }
}

/* Mobile Styles */
@media screen and (max-width: 640px) {
    .header {
        padding: 15px 5%;
    }
    
    .logo {
        font-size: 20px;
    }
    
    .menu-toggle {
        display: flex;
    }
    
    .navbar {
        position: fixed;
        top: 70px;
        left: 0;
        width: 100%;
        height: calc(100vh - 70px);
        background: white;
        flex-direction: column;
        justify-content: flex-start;
        align-items: center;
        padding-top: 50px;
        transform: translateX(-100%);
        transition: transform 0.3s ease;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }
    
    .navbar.active {
        transform: translateX(0);
        animation: slideDown 0.3s ease forwards;
    }
    
    .navbar a {
        font-size: 18px;
        margin: 20px 0;
        margin-left: 0;
        padding: 10px 20px;
        width: 80%;
        text-align: center;
        border-radius: 8px;
        transition: all 0.3s ease;
    }
    
    .navbar a:hover {
        background: #f5f5f5;
        color: black;
    }
    
    .navbar a::before {
        display: none;
    }
    
    .navbar a.active {
        background: #f0f0f0;
        color: black;
    }
}

/* Very Small Mobile Devices */
@media screen and (max-width: 480px) {
    .header {
        padding: 12px 4%;
    }
    
    .logo {
        font-size: 18px;
    }
    
    .navbar {
        top: 60px;
        height: calc(100vh - 60px);
    }
    
    .navbar a {
        font-size: 16px;
        margin: 15px 0;
        width: 90%;
    }
}

/* Large Desktop Styles */
@media screen and (min-width: 1200px) {
    .header {
        padding: 20px 15%;
    }
    
    .navbar a {
        font-size: 16px;
        margin-left: 40px;
    }
    
    .logo {
        font-size: 28px;
    }
}
    </style>
</head>

<body>
<header class="header">
    <a href="#" class="logo">Hello.</a>
    
    <!-- Hamburger Menu Button -->
    <div class="menu-toggle" id="menu-toggle">
        <div class="hamburger"></div>
        <div class="hamburger"></div>
        <div class="hamburger"></div>
    </div>
    
    <nav class="navbar" id="navbar">
        <?php foreach($nav_items as $page => $title): ?>
            <a href="<?php echo $page; ?>" <?php echo ($current_page == $page) ? 'class="active"' : ''; ?>>
                <?php echo $title; ?>
            </a>
        <?php endforeach; ?>
    </nav>
</header>

<script>
// Mobile menu toggle functionality
const menuToggle = document.getElementById('menu-toggle');
const navbar = document.getElementById('navbar');

menuToggle.addEventListener('click', function() {
    this.classList.toggle('active');
    navbar.classList.toggle('active');
});

// Close menu when clicking on a link (mobile)
const navLinks = document.querySelectorAll('.navbar a');
navLinks.forEach(link => {
    link.addEventListener('click', () => {
        if (window.innerWidth <= 640) {
            menuToggle.classList.remove('active');
            navbar.classList.remove('active');
        }
    });
});

// Close menu when clicking outside (mobile)
document.addEventListener('click', function(event) {
    if (window.innerWidth <= 640) {
        if (!navbar.contains(event.target) && !menuToggle.contains(event.target)) {
            menuToggle.classList.remove('active');
            navbar.classList.remove('active');
        }
    }
});

// Handle window resize
window.addEventListener('resize', function() {
    if (window.innerWidth > 640) {
        menuToggle.classList.remove('active');
        navbar.classList.remove('active');
    }
});
</script>

<!-- Your page content goes here -->

</body>
</html>