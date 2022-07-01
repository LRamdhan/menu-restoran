<?php
    $menus = file_get_contents('json/menu.json');
    $menus = json_decode($menus, true)["menu"];
    $kategori = [];
    foreach($menus as $menu) {
        if(!in_array($menu['kategori'], $kategori)) {
            $kategori[] = $menu['kategori'];
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Pizza Hut</title>
    <link rel="icon" href="img/favicon.ico">
    <link rel="stylesheet" href="css/global.css?i=<?= uniqid(); ?>">
    <link rel="stylesheet" href="css/navbar.css?i=<?= uniqid(); ?>">
    <link rel="stylesheet" href="css/aside.css?i=<?= uniqid(); ?>">
    <link rel="stylesheet" href="css/content.css?i=<?= uniqid(); ?>">
    <link rel="stylesheet" href="css/footer.css?i=<?= uniqid(); ?>">
    <link rel="stylesheet" href="css/responsive.css?i=<?= uniqid(); ?>">
</head>
<body>
    <!-- nav-start -->
    <nav>
        <img src="img/logo.png" alt="terjadi masalah" class="logo">

        <ul class="links">
            <li><a href="#">home</a></li>
            <li><a href="#">about</a></li>
            <li id="link-menu">
                <a href="#" data-el="pop-menu">menu</a>
                <ul class="box-menu pop-menu-hilang" id="box-menu" data-el="pop">
                    <li data-el="pop"><a href="#" data-kategori="all">semua menu</a></li>
                    <?php foreach($kategori as $row) : ?>
                        <li data-el="pop">
                            <a href="#" data-kategori="<?= $row; ?>"><?= $row; ?></a>
                        </li>
                    <?php endforeach; ?>
                    <div class="direct" data-el="pop"></div>
                </ul>
            </li>
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
    </nav>

    <!-- nav-end -->

    <!-- aside-start -->
    <aside id="side-bar">
        <div class="close">
            <div class="hamberger">
                <div class="garis">
                    <div class="kiri"></div>
                    <div class="kanan"></div>
                </div>
                <div class="garis">
                    <div class="kiri"></div>
                    <div class="kanan"></div>
                </div>
            </div>
        </div>
        <ul>
            <li><a href="#">home</a></li>
            <hr>
            <li><a href="#">about</a></li>
            <hr>
            <li class="daftar-menu">
                <div class="drop-menu">
                    <a href="#">menu</a>    
                    <img src="img/icon/down-white.png" class="down down-kiri" id="down">
                </div>
                <ul class="list-link" id="list-link">
                    <div class="space"></div>
                    <li><a href="#" data-kategori="all">semua menu</a></li>
                    <?php foreach($kategori as $row) : ?>
                        <li>
                            <a href="#" data-kategori="<?= $row; ?>"><?= $row; ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </li>
            <hr>
            <li><a href="#">contact</a></li>
            <hr>
            <li><a href="#">service</a></li>
        </ul>
    </aside>
    <!-- aside-end -->

    <!-- content-start -->
    <section class="content">
        <div class="container">
            <div class="judul">
                <h2 id="kategori-menu">Menu</h2>
            </div>
            <div class="menu" id="menu"></div>
        </div>
    </section>
    <!-- content-end -->

    <!-- footer-start -->
    <footer>
        <p>&copy;copyright 2022 | built by.Luji Ramdhan</p>
    </footer>
    <!-- footer-end -->

    <script src="js/get-menu.js?i=<?= uniqid(); ?>""></script>
    <script src="js/pop-menu.js?i=<?= uniqid(); ?>""></script>
    <script src="js/side-bar.js?i=<?= uniqid(); ?>""></script>
    <!-- <script src="test/script.js"></script> -->
</body>
</html>