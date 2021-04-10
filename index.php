<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Barber Point</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="chiefslider/chiefslider.css"/>
    <link rel="icon" href="images/icon/icon.svg"/>
    <script src="dropdown.js"></script>
    <script src="chiefslider/chiefslider.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const $sliders = document.querySelectorAll('[data-slider="chiefslider"]');
            $sliders.forEach(function ($slider) {
                new ChiefSlider($slider);
            });
        });
    </script>
</head>
<body>
<?php
$pages = ['service'=>'Послуги', 'portfolio'=>'Портфоліо', 'about'=>'Про нас', 'contacts'=>'Контакти']
?>
<div class="menu">
    <a href="?page=landing">
        <div class="logo">
            <div class="logo-icon">
                <div class="logo-circle">
                    <img src="images/icon/icon.svg">
                </div>
            </div>
            <p>Barber Point</p>
        </div>
    </a>
    <div class="menu-items">
        <?php
        foreach($pages as $key => $value) {
            echo "<div class='menu-item'><a href='?page=$key'>$value</a></div>";
        }
        ?>

    </div>
    <div class="dropdown">
        <img src="images/landing/menu-button.svg" onclick="myFunction()" class="dropbtn"/>
        <div id="myDropdown" class="dropdown-content">
            <?php
            foreach($pages as $key => $value) {
                echo "<a href='?page=$key'>$value</a>";
            }
            ?>
        </div>
    </div>
</div>

<?php
if(empty($_GET['page'])) include("landing.html");
if($_GET['page'] == 'service' && $_GET['haircut']) include "haircut".$_GET['haircut'].".html";
elseif($_GET['page'] == 'service' && $_GET['beard']) include "beard".$_GET['beard'].".html";
else include "{$_GET['page']}.html";
?>

<footer>
    <a href="?page=index">
        <div class="logo">
            <div class="logo-icon">
                <div class="logo-circle">
                    <img src="images/icon/icon.svg">
                </div>
            </div>
            <p>Barber Point</p>
        </div>
    </a>
    <div class="footer-menu">
        <div class="footer-menu-1">
            <a href="?page=service">Послуги</a>
            <a href="?page=portfolio">Портфоліо</a>
        </div>
        <div class="footer-menu-2">
            <a href="?page=about">Про нас</a>
            <a href="?page=contacts">Контакти</a>
        </div>
    </div>
    <div class="footer-contacts">
        <div class="contact-data">
            <img src="images/landing/phone-call.svg">
            <p>+380971231212</p>
        </div>
        <div class="contact-data">
            <a target="blank" href="https://www.google.com.ua/maps/place/%D1%83%D0%BB.+%D0%A1%D0%B2%D0%BE%D0%B1%D0%BE%D0%B4%D1%8B,+57,+%D0%A5%D0%BC%D0%B5%D0%BB%D1%8C%D0%BD%D0%B8%D1%86%D0%BA%D0%B8%D0%B9,+%D0%A5%D0%BC%D0%B5%D0%BB%D1%8C%D0%BD%D0%B8%D1%86%D0%BA%D0%B0%D1%8F+%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C,+29000/@49.4208677,26.986478,17z/data=!3m1!4b1!4m5!3m4!1s0x47320659d4359bdd:0xa2a25251b07b9838!8m2!3d49.4208642!4d26.9886667?hl=ru">
                <img src="images/landing/location-pin-thin.svg">
            </a>
            <p>м. Хмельницький, вул. Свободи, 57</p>
        </div>
        <div class="contact-data">
            <img src="images/landing/clock.svg">
            <p>Пн-Нд: 10:00 - 20:00</p>
        </div>
    </div>
</footer>
</body>
</html>