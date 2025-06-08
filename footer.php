<footer>
    <div class="footer-content">
        <div class="home-sci">
            <a href="https://www.instagram.com/gaatsuu/"><i class='bx bxl-instagram'></i></a>
            <a href="https://github.com/RockHead07?tab=repositories"><i class='bx bxl-github'></i></a>
            <a href="https://www.linkedin.com/in/bagus-insan-pradana-69513434a/"><i class='bx bxl-linkedin'></i></a>
        </div>
    </div>
</footer>

<style>

.footer-content {
    display: flex;
    align-items: center;
    background-position: center;
    padding: 0 10%;
    position: relative;
}

.home-sci {
    position: absolute;
    bottom: 40px;
    width: 170px;
    display: flex;
    justify-content: space-between;
}

.home-sci::before{
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    width: 100%;
    height: 100%;
    background: white;
    animation: showRight 1s ease forwards;
    animation-delay: 2.5s;
    z-index: 2;
}

.home-sci a {
    position: relative;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    width: 40px;
    height: 40px;
    background: transparent ;
    border: 2px solid black;
    border-radius: 50%;
    font-size: 20px;
    color: black;
    text-decoration: none;
    z-index: 1;
    overflow: hidden;
}

.home-sci a::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 0;
    height: 100%;
    background: black;
    z-index: -1;
    transition: .5s;
}

.home-sci a:hover {
    color: white ;
}

.home-sci a:hover::before {
    width: 100%;
}

@media screen and {max-width: 768px} {
    .footer-content {
        padding: 0 5%;
    }

    .home-sci {
        width: 120px;
        bottom: 20px;
    }

    .home-sci a {
        width: 30px;
        height: 30px;
        font-size: 16px;
    }
    
}

    .home-sci::before{
        content: '';
        position: absolute;
        top: -5px;
        right: -15px;
        width: 120%;
        height: 120%;
        background: white;
        animation: showRight 1s ease forwards;
        animation-delay: 2.5s;
        z-index: 2;
    }

@media screen and {max-width: 480px} {
        .home-sci a {
        width: 35px;
        height: 35px;
        font-size: 1.25rem;
    }
}

</style>