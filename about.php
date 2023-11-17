<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include "includes/head_links.php";
    ?>
    <link rel="stylesheet" href="css/about.css"/>
    <title>Sports Web</title>
</head>
<body>
    <div class="container1">

        <?php
            include "includes/header.php";
        ?>

        <!-- Body of the page -->
    
        <div class="inner-container">
            <h1 class="title">About</h1>
            <div class="about-content">
                <div class="image">
                    <img src="img/backgroundimg.jpg" />
                </div>
                <div class="content">
                    <p>The Sports Web is a dynamic and interactive web application. This web application aims to cater to sports enthusiasts and fans by providing a comprehensive and engaging platform for accessing sports information, news, and interactive features to find the stadium's History. With an intuitive and user-friendly interface, users can stay updated on their favourite stadiums and news By combining the real-time stadiums data, the Sports Web become destination for sports fans, providing a feature-rich, engaging, and personalized platform for different sports enthusiasts to connect, stay informed, and celebrate their passion for sports.
                    </p>
                    <a href="#" class="readmore">Read More ...</a>
                </div>
            </div>
        </div>

        <?php
        include "includes/signup_modal.php";
        include "includes/login_modal.php";
        include "includes/footer.php";
        ?>

    </div>        
    
</body>
</html>