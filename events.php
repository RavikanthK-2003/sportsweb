<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>

    <?php
        include "includes/head_links.php";
    ?>

    <link rel="stylesheet" href="css/events.css"/>
    <title>Events</title>
</head>
<body>
    <div class="container1">

        <?php
            include "includes/header.php";
        ?>


        <!-- Body of the page -->
        <div class="center">
            <div class="icon"><i class="fa-sharp fa-solid fa-circle-xmark fa-2xl" style="color: #272222;"></i></div>
            <div class="content"><p class="center">No Events For Today</p></div>
        </div>

        <?php
            include "includes/signup_modal.php";
            include "includes/login_modal.php";
            include "includes/footer.php";
        ?>

    </div>
</body>
</html>