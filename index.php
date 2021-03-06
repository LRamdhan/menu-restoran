<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Pizza Hut</title>
    <link rel="icon" href="img/favicon.ico">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/content.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>
    <!-- nav-start -->
    <nav>
        <img src="img/logo.png" alt="terjadi masalah" class="logo">

        <ul class="links">
            <li><a href="#">home</a></li>
            <li><a href="#">about</a></li>
            <li><a href="#">menu</a></li>
            <li><a href="#">contact</a></li>
            <li><a href="#">service</a></li>
        </ul>

        <div class="hamberger">
            <div class="garis">
                <div class="kiri"></div>
                <div class="kanan"></div>
            </div>
            <div class="garis">
                <div class="kiri"></div>
                <div class="kanan"></div>
            </div>
            <div class="garis">
                <div class="kiri"></div>
                <div class="kanan"></div>
            </div>
        </div>

        <div class="drop-down">
            <ul class="links-drop">
                <li><a href="#">home</a></li>
                <hr>
                <li><a href="#">about</a></li>
                <hr>
                <li><a href="#">menu</a></li>
                <hr>
                <li><a href="#">contact</a></li>
                <hr>
                <li><a href="#">service</a></li>
            </ul>
        </div>
    </nav>
    <!-- nav-end -->

    <!-- content-start -->
    <section class="content">
        <div class="container">
            <div class="judul">
                <h2>Menu</h2>
            </div>
            <div class="menu" id="menu"></div>
        </div>
    </section>
    <!-- content-end -->

    <!-- footer-start -->
    <footer>
        <p>&copy;copyright 2022 | bulit by. Luji Ramdhan</p>
    </footer>
    <!-- footer-end -->

    <script src="js/drop-down-navbar.js"></script>
    <script src="js/fetch-menu.js"></script>
</body>
</html>