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
    <style>
        /* FONTS */
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap');

/* KEYFRAMES ANIMATION */
@keyframes showRight {
    100% {
        width: 0;
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
    color: black ;
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
    }



    /* Logo Website */

    .logo {
        position: relative;
        font-size: 25px;
        color: black;
        text-decoration: none;
        font-weight: 600;
    }

    .logo::before{
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


    /* Navigation Bar */
    .navbar a {
        font-size: 14px;
        width: max-content;
        position: relative;
        color: black;
        text-decoration: none;
        font-weight: 500;
        margin-left: 35px;
        justify-content: space-between;
        transition: .3s;
        z-index: 1;
    }

    .navbar a:hover, .navbar a.active {
    color: gray;
    }

    .navbar a:hover{
        color: gray;
    }

    .navbar a::before{
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

    .navbar a:hover::before{
        transform: scaleX(1);
    }

    @media screen and (max-width: 480px) {
    .header {
        padding: 10px 3%;
    }

    .navbar a {
        font-size: 12px;
        margin-left: 5px;
    }
    }
    </style>
</head>

<body>
<header class="header">
    <a href="#" class="logo">Hello.</a>
    <nav class="navbar">
        <?php foreach($nav_items as $page => $title): ?>
            <a href="<?php echo $page; ?>" <?php echo ($current_page == $page) ? 'class="active"' : ''; ?>>
                <?php echo $title; ?>
            </a>
        <?php endforeach; ?>
    </nav>
</header>

<!-- Your page content goes here -->

</body>
</html>